<?php defined('SYSPATH') or die('No direct script access.');

/*
  Контроллер Admincategories отвечает за вывод информации о книгах в админской части
*/
class Controller_Admin_Admincategories extends Controller_Admin {

	//ВЫВОД ИНФОРМАЦИИ О ВСЕХ КАТЕГОРИЯХ	
    public function action_index(){	
	
		//Параметры для подключения модуля пагинации
		$count=ORM::factory('Category')->count_all();//Подсчитываем общее число записей в базе
		$pagination = Pagination::factory(array(
			'total_items' => $count,// общее число записей 
			'items_per_page' => 10,  // число записей на странице
			))
				->route_params(array(
				'controller' => Request::current()->controller(),
				'action' => Request::current()->action(),
				));
		$categories=ORM::factory('Category')
			->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by('category','ASC') // сортировка записей на странице по алфавиту
			->find_all();               // выбираем все записи
	
	
		//Вывод в шаблон
		$c=View::factory('admin/categories/v_categories_index',
						array('categories'=>$categories,
							  'count'=>$count,
							  'pagination'=>$pagination));
		$this->template->content=array($c);
	}//end action_index
		
		
     //ДОБАВЛЕНИЕ КАТЕГОРИИ
	 public function action_add(){
	
		if(isset($_POST['submit']))	{// кнопка отправки данных нажата
			//Считываем данные из поля ввода 
			$data=Arr::extract($_POST, array('category'));
		    $categories=ORM::factory('Category');
			$categories->values($data); 
			
			try{// Если валидация прошла успешно(Правила валидации описаны в моделях), то
				$categories->save();					//Создаем запись в таблице categories 
				HTTP::redirect('admin/admincategories');//Перенаправляем на страницу с общим списком категорий
		  	}	  
			catch (// Если валидация не пройдена, создаем массив ошибок
				ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
			}
		}// End submit
		
		//Вывод в шаблон 
        $content = View::factory('admin/categories/v_add_categories')
                ->bind('errors', $errors)
				->bind('data', $data);	
		$this->template->content=array($content); 
	}//end action_add	

	 
	 
	 //РЕДАКТИРОВАНИЕ АВТОРА
	public function action_edit(){
	
		$id= (int) $this->request->param('id');   
		$categories=ORM::factory('Category',$id);
		$data=$categories->as_array();	

		if(isset($_POST['submit'])){// кнопка отправки данных нажата
			//Считываем данные из поля ввода 	
			$data=Arr::extract($_POST, array('category'));
			$categories->values($data);
			try {
				$categories->save(); 					 //Создаем запись в таблице categories 
				HTTP::redirect('admin/admincategories'); //Перенаправляем на страницу с общим списком категорий
			}
			catch (// Если валидация не пройдена, создаем массив ошибок
				ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
		     }
		}// End submit
		//Вывод в шаблон 
        $content = View::factory('admin/categories/v_edit_categories') 
		        ->bind('id', $id)
				->bind('errors', $errors)
				->bind('data',  $data);	
		$this->template->content= array($content);
	} //end action_edit	
 
	//УДВЛЕНИЕ АВТОРА
	 public function action_delete(){
		$id=(int)$this->request->param('id');
		$categories=ORM::factory('Category',$id)->delete();//удаляем в таблице categories  поля, соответствующие $id
	   HTTP::redirect('admin/admincategories');//Перенаправляем на страницу с общим списком книг
    }//end action_delete		
 }// End Admincategories