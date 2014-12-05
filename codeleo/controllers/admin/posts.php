<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*Админпанель. Записи блога*/
class Posts extends CI_Controller {

		 
	 function __construct()
	{
        parent::__construct();
		
		//Подключаем модели
        $this->load->model('posts_model');
		$this->load->model('categories_model');
		
		//Подключаем хэлперы
		$this->load->helper('url');
		$this->load->helper('editor');
		//$this->load->helper('will_pickdate');
			
		
		//Подключаем библиотеки
		$this->load->library('pagination');
        $this->load->library('pagination_lib');
	}
	
	 //Вывод всех постов
	public function index()
	{   
	    $data = array();
		$data['all_categories']=$this->categories_model->get_all(); //Список всех категорий   
	    $data['all_posts']=$this->posts_model->get_all_posts();//Список всех постов всех категорий в соответствии с настройками	 
	
    	//Выводим шаблон  
		$name='admin/posts/posts';
		$this->display_admin_lib->admin_page($name,$data);      
	}
	
	
	//Выводим форму добавления поста
	public function add_post()
	{   
	  $data=array();
	  $data['all_categories']=$this->categories_model->get_all(); //Список всех категорий   
	  $data['add']=$this->posts_model->add(); 
	  // Вывод шаблона
	  $name='admin/posts/add_post';
   	  $this->display_admin_lib->admin_page($name,$data); //Передаем в библиотеку название шаблона страницы и данные
	}
	
	
	
	//Добавление поста. Отправка данных с формы по Ajax
	 public function add_post_ajax()
	{
	  // Если запрос пришел не по Аякс, выводим сообщение об ошибке
		if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest'){
              	{ echo "Не Ajax!"; return;} // Если обращаются к методу не по Аякс, выводим сообщение
			   
		} else {  //Если запрос пришел по Аякс, то производим его обработку
		
		        $data=array();
	            $data['all_categories']=$this->categories_model->get_all(); //Список всех категорий   
						if($this->posts_model->add()!==FALSE) { //Если валидация прошла успешно, выводим соощение об успехе
				          	echo json_encode(array('err' => '0', 'message' => '<div class="success">Ваша запись успешно сохранена!</div>'));
				   		}else{ //Если валидация не прошла, выводим сообщение об ошибке
				            echo json_encode(array('err' => '1', 'message' => validation_errors('<div class="error"><strong>Ошибка!</strong> ', '</div>')));
				        }
				}
	}
	
	
	
    //Выводим форму редактирования поста
	public function edit_post($id)
	{   
	  $data = array();
      $data['list'] = $this->posts_model->get_post($id); //Выбираем из базы данные по одному посту
	  $data['all_categories']=$this->categories_model->get_all();
	  //Выводим шаблон  
	  $name='admin/posts/edit_post';
   	  $this->display_admin_lib->admin_page($name,$data); //Передаем в библиотеку название шаблона страницы и данные
	}
	
	
	
	//Редактирование поста. Отправка данных с формы по Ajax
	 public function edit_post_ajax($id)
	{
	  // Если запрос пришел не по Аякс, выводим сообщение об ошибке
		if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest'){
              	{ echo "Не Ajax!"; return;} // Если обращаются к методу не по Аякс, выводим сообщение
			   
		} else {  //Если запрос пришел по Аякс, то производим его обработку
		
		        $data=array();
	            $data['all_categories']=$this->categories_model->get_all(); //Список всех категорий   
						if($this->posts_model->edit($id)!==FALSE) { //Если валидация прошла успешно, выводим соощение об успехе
				          	echo json_encode(array('err' => '0', 'message' => '<div class="success">Ваша запись успешно сохранена!</div>'));
				   		}else{ //Если валидация не прошла, выводим сообщение об ошибке
				            echo json_encode(array('err' => '1', 'message' => validation_errors('<div class="error"><strong>Ошибка!</strong> ', '</div>')));
				        }
				}
	}
	
	
	
	// Удаление поста
	public function delete_post()
	{   
	  if (isset($_POST['delete']) and isset($_POST['chk'])){ 
	            //Удалям посты, у которых отмеченн чекбокс	  
	      foreach($_POST['chk'] as $id) 
                   { 
				    $this->posts_model->delete($id); 
                   } 
	  }
	  redirect('admin/posts/index');		  
	   
	}
	
	
	
	//Загрузка изображений
	function do_upload()
	{
	//Проверяем, пришел ли запрос по Ajax. Если нет - выходим из программы с сообщением "Не Ajax!"
	if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest')
	{ 
		die( "Не Ajax!"); 
	} else{
		  
			$config['upload_path'] = './uploads/posts/';     //директория, в которую загружаем изображение
			$config['allowed_types'] = 'gif|jpg|png';  //допустимые расширения изображений
			$config['max_size']	= '0';                 //нет ограничений на размер изображения  
			$config['max_width']  = '1024';            //допустимая максимальная ширина изображения
			$config['max_height']  = '768';            //допустимая максимальная высота изображения
			$config['encrypt_name'] = TRUE;            //у загруженного изображения будет случано сгенерированное имя

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload()) //если загрузка не произошла, выводим сообщение об ошибках
				{
						$res['error_upload']=$this->upload->display_errors();
						echo json_encode($res);
				} else { //если загрузка произошла успешно, делаем ресайз.
						$data = $this->upload->data();
						$this->do_resize($data['full_path'],$data['file_name']);//передаем в функцию ресайза путь до файла и  имя файла
						}
		}
	} //end function do_upload()
	
	
	
	
	//Изменение размеров изображений
	function do_resize($path_to,$file_name)
	{
	
	  $config['image_library'] = 'gd2';    // библиотека, используемая для ресайза
      $config['source_image'] = $path_to;  // в $datа массив который мы получили выше; получение полного пути файла
      $config['maintain_ratio'] = true;    
      $config['width'] = 220;   //ширина миниатюры
      $config['height'] = 140;  //высота миниатюры
      
	  $this->load->library('image_lib', $config);
		if (!$this->image_lib->resize()) //если ресайз не произошел, выводим сообщение об ошибках
			{
					$res['error_resize']=$this->image_lib->display_errors();
					echo json_encode($res);
			} else{ //если ресайз прошел успешно выводим миниатюру на экран
					$res['mini_foto']=base_url().'uploads/posts/'.$file_name; //Путь до миниатюры
					$res['foto_name']=$file_name; //имя миниатюры
					echo json_encode($res);
			}
	} //end function do_resize()
	
	
	
	public function do_delete()
	{   
		 // Если запрос пришел не по Аякс, выводим сообщение об этом
		
		if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest'){
              	 echo "Не Ajax!"; 
				 return; // Если обращаются к методу не по Аякс, выводим сообщение
			   
		} else { //Если запрос пришел по Аякс, то считываем значение скрытого поля prew с именем миниатюры
					  
				$prew = $this->input->post('prew');//Считываем значение скрытого поля с именем миниатюры        
				$foto="./uploads/posts/".$prew;        //Путь к фотографии
				 
				
				if (file_exists($foto)) {
                   	        unlink($foto);
				            $res['success_delete']="Миниатюра успешно удалена!"; //сообщение об ошибке
							echo json_encode($res);
					} else {
				            $res['error_delete']="Ошибка! Миниатюра не удалена!"; //сообщение об ошибке
					        echo json_encode($res);
                           }	
                						   
                } 
	}//end function do_delete()
	
	
	
	
	
	
	
	
}
/* End of file posts.php */
/* Location: ./application/controllers/welcome.php */