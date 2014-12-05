<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends Crud
{
    
public $table = 'posts'; //Имя таблицы	
public $idkey = 'id'; //Имя ID
   

   //Вывод всех постов по дате с пометкой "видимый"	(swich=1)
	 public function get_all_posts($limit=NULL,$start_from=NULL,$swich=NULL,$category_title=NULL)
	
	{  
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->join('categories', 'categories.id_cat = posts.category_id');
        
		//Если задано название категории, то выбираем посты из заданной категории
		if ($category_title!=NULL){
			$this->db->where('category_title',$category_title); //Выбор данных по заданной категории
		}
		
		$this->db->order_by('date','desc'); //Сортировка по дате
		
		if ($swich!=NULL){
			$this->db->where('posts.swich',$swich); //$swich =0 - пост невидимый, $swich=1 -пост видимый
		}
		
		if ($limit!=NULL and $start_from!=NULL){
			$this->db->limit($limit,$start_from); // $limit - количество постов на странице, $start_from - с какого начинать  
		}
		
		$query = $this->db->get();
		return $query->result_array();
	}

	   	
      //Просмотр поста с пометкой "видимый"	(swich=1)
	public function get_post($obj_id)
    {
	    $this->db->select('*');
		$this->db->from('posts');
		$this->db->join('categories', 'categories.id_cat = posts.category_id');
		
        $this->db->where('posts.id',$obj_id);//Выбор данных по заданному id
		$this->db->where('posts.swich',1); //Вывод видимого поста (swich=1)
     
	    $query = $this->db->get();
        return $query->row_array();
    }
	
	//Вывод количества всех записей  в таблице posts без привязки к категории
	public function num_rows($category_title=NULL) 
	{
	    $this->db->where('swich',1); //Вывод постов только с пометкой "видимый"
		$this->db->from('posts');
     	return $this->db->count_all_results();
		
		$this->db->select('*');
		$this->db->from('posts');
		
		if ($category_title!=NULL){
		$this->db->join('categories', 'categories.id_cat = posts.category_id');
		$this->db->where('category_title',$category_title); //Выбор данных по заданной категории
		}
				
		$this->db->where('posts.swich',1); //Вывод видимого поста (swich=1)
	    return $this->db->count_all_results(); 
		
    }

}

?>