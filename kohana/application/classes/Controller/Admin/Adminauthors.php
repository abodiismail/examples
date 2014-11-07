<?php defined('SYSPATH') or die('No direct script access.');

 /*Контроллер Adminauthors отвечает за вывод информации об авторах в админской части*/
class Controller_Admin_Adminauthors extends Controller_Admin {

     //ВЫВОД ИНФОРМАЦИИ О ВСЕХ АВТОРАХ
   	 public function action_index()	{
			
		//Параметры для подключения модуля пагинации
		$count=ORM::factory('Author')->count_all();//Подсчитываем общее число записей в базе
		$pagination = Pagination::factory(array(
			'total_items' => $count,// общее число записей 
			'items_per_page' => 10,  // число записей на странице
			))
				->route_params(array(
				'controller' => Request::current()->controller(),
				'action' => Request::current()->action(),
				));
		$authors=ORM::factory('Author')
			->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by('author','ASC') // сортировка записей на странице по алфавиту
			->find_all();              // выбираем все записи
	
	
		//Вывод в шаблон
		$c=View::factory('admin/authors/v_authors_index',
						array('authors'=>$authors,
							  'count'=>$count,
							  'pagination'=>$pagination));
		$this->template->content=array($c);
	}// End	action_index
	
		
     //ДОБАВЛЕНИЕ АВТОРА
	 public function action_add(){
	
		if(isset($_POST['submit']))	{// кнопка отправки данных нажата
		    //Считываем данные из полей ввода 
			$auth=Arr::extract($_POST, array('author'));
		    $authors=ORM::factory('Author');
			$authors->values($auth); 
		
			try { // Если валидация прошла успешно(Правила валидации описаны в моделях), то
				$authors->save(); 						//Создаем запись в таблице authors 
				HTTP::redirect('admin/adminauthors');	//Перенаправляем на страницу с общим списком авторов
			}	  
			catch (// Если валидация не пройдена, создаем массив ошибок
				ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
		    }
		}// End submit
		
		//Вывод в шаблон 
        $content = View::factory('admin/authors/v_add_authors')
                ->bind('errors', $errors)
				->bind('auth', $auth);	
				
         $this->template->content=array($content); 
	} // End action_add	

	 
	 
	  //РЕДАКТИРОВАНИЕ АВТОРА
	public function action_edit(){
		
		$id= (int) $this->request->param('id');   
		$authors=ORM::factory('Author',$id);
		$auth=$authors->as_array();	
		
		if(!$authors->loaded()) {
            HTTP::redirect('admin/adminauthors'); 
		    }
		
					
		if(isset($_POST['submit'])){// кнопка отправки данных нажата
			//Считываем данные из полей ввода 
			$data=Arr::extract($_POST, array('author'));
			$authors->values($data);
			try {
				$authors->save(); //Создаем запись в таблице authors 
				HTTP::redirect('admin/adminauthors');	     //Перенаправляем на страницу с общим списком авторов
			}
		 catch ( //Если валидация не пройдена, создаем массив ошибок
				ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
		    }
		}// End submit
		
		//Вывод в шаблон 
        $content = View::factory('admin/authors/v_edit_authors') 
		        ->bind('id', $id)
				->bind('errors', $errors)
				->bind('auth',  $auth);	
		$this->template->content= array($content);
		
    }//action_edit	
 
 
     //АВТОРА АВТОРА
	 public function action_delete(){
	
		$id= (int) $this->request->param('id');
		$authors=ORM::factory('Author',$id)->delete();
		HTTP::redirect('admin/adminauthors');//Перенаправляем на страницу с общим списком авторов
     
     } //End action_delete

} // End Adminauthors