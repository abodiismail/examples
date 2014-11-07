<?php defined('SYSPATH') or die('No direct script access.');
/*
  Контроллер Adminbooks отвечает за вывод информации о книгах в админской части
*/
class Controller_Admin_Adminbooks extends Controller_Admin {
	
	//ВЫВОД ИНФОРМАЦИИ О ВСЕХ КНИГАХ	
	public function action_index(){
	
		//Параметры для подключения модуля пагинации
		$count=ORM::factory('Book')->count_all();//Подсчитываем общее число записей в таблице books
		$pagination = Pagination::factory(array(
			'total_items' => $count,// общее число записей 
			'items_per_page' => 10,  // число записей на странице
			))
				->route_params(array(
				'controller' => Request::current()->controller(),
				'action' => Request::current()->action(),
				));
		$books=ORM::factory('Book')
			->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by('title', 'ASC') // сортировка записей на странице по алфавиту
			->find_all();              // выбираем все записи
	
		//Вывод в шаблон информации о всех книгах
		$c=View::factory('admin/books/v_books_index',
						array('books'=>$books,
							  'count'=>$count,
							  'pagination'=>$pagination));
		$this->template->content=array($c);
	} // End	action_index
		
		
     //ДОБАВЛЕНИЕ КНИГИ		
	public function action_add(){
		
	//Формируем option для select, отвечающего за вывод списка категорий в виде. Начало
		$categories=ORM::factory('Category')->find_all()->as_array(); //выбираем данные из таблицы categories
		/*создаем новый массив $cats,
		в котором key - id категории (таблица categories), 
		value - title категории (таблица categories)*/   
		$cats=array();
			foreach ($categories as $cat){
				$cats[$cat->id]=$cat->category;
			}
		$content = View::factory('admin/books/v_add_books')->bind('cats',$cats); //формируем select в шаблоне
	//Формируем option для select, отвечающего за вывод списка категорий. Конец
		
	
	//Формируем option для select, отвечающего за вывод списка авторов в виде. Начало	
		$authors=ORM::factory('Author')->find_all()->as_array();//выбираем данные из таблицы authors
		//создаем новый массив $cats, в котором key - id автора (таблица authors), value - title категории (таблица authors),
		$autr=array();
			foreach ($authors as $author){
				$autr[$author->id]=$author->author;
			}
		$content = View::factory('admin/books/v_add_books')->bind('autr',$autr);//формируем select в шаблоне         
	//Формируем option для select, отвечающего за вывод списка авторов в виде. Конец				
		
		
		if(isset($_POST['submit']))	{ // кнопка отправки данных нажата
		    
			//Считываем данные из полей ввода 
			$data=Arr::extract($_POST, array('title','editor1', 'cat', 'author'));
			$books=ORM::factory('Book');
			$books->values($data); 
		
		 
			try{ // Если валидация прошла успешно(Правила валидации описаны в моделях), то
				$books->save(); //Создаем запись в таблице books  
				$books->add('categories',$data['cat']); //Создаем запись в таблице categories 
				$books->add('authors',$data['author']); //Сохраняем запись в таблице authors
				HTTP::redirect('admin/adminbooks'); //Перенаправляем на страницу с общим списком книг
			}
				  
			catch ( // Если валидация не пройдена, создаем массив ошибок
		        ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
		      }
		 } // End submit
		
		//Вывод в шаблон 
			$content = View::factory('admin/books/v_add_books')
                ->bind('errors', $errors)
				->bind('cats',$cats)
				->bind('autr',$autr)	
				->bind('data', $data);	
				
			$this->template->content=array($content); 
	}// End	action_add

	 
	 //РЕДАКТИРОВАНИЕ КНИГИ 
	public function action_edit(){
	
		$id= (int) $this->request->param('id');   
	    $books=ORM::factory('Book',$id);//выбираем в таблице $books поля, соответствующие $id
		
		if(!$books->loaded()) {
            HTTP::redirect('admin/adminbooks'); 
				
			
        }
		
		
		//Формируем option для select, отвечающего за вывод списка категорий в виде. 
		$categories=ORM::factory('Category')->find_all()->as_array();
		$cats=array();
			foreach ($categories as $cat){
				$cats[$cat->id]=$cat->category;
			}
		$content = View::factory('admin/books/v_edit_books')->bind('cats',$cats); 
		
		
		//Формируем option для select, отвечающего за вывод списка авторов в виде.
		$authors=ORM::factory('Author')->find_all()->as_array();
		$autr=array();
			foreach ($authors as $author){
				$autr[$author->id]=$author->author;
			}
		$content = View::factory('admin/books/v_edit_books')->bind('autr',$autr);	
		
		
		
		$data=$books->as_array();
		$data['cat']=$books->categories->find_all()->as_array();
		$data['author']=$books->authors->find_all()->as_array();
		
				
		if(isset($_POST['submit'])){
				
			$data=Arr::extract($_POST, array('title','editor1', 'cat', 'author'));
			$books->values($data);
		
		try {// Если валидация прошла успешно(Правила валидации описаны в моделях), то
		
		    $books->save();                //Обновляем запись в таблице books 
			$books->remove('categories');   //Удаляем запись в таблице categories 
			$books->remove('authors');	    //Удаляем  запись в таблице authors
		    $books->add('categories',$data['cat']); //Создаем новую запись в таблице categories 
		    $books->add('authors',$data['author']); //Создаем новую запись в таблице authors
			HTTP::redirect('admin/adminbooks'); //Перенаправляем на страницу с общим списком книг
		}
		 catch ( // Если валидация не пройдена, создаем массив ошибок
				ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
		        }
	}// End submit
	
		//Вывод в шаблон 
        $content = View::factory('admin/books/v_edit_books')
		       ->bind('cats',$cats)
			   ->bind('autr',$autr)
               ->bind('id', $id)
			   ->bind('errors', $errors)
			   ->bind('data', $data);	
		$this->template->content= array($content);
		
     }// End action_edit	
 
 
	//УДВЛЕНИЕ КНИГИ 
 	 public function action_delete(){
		  $id=(int) $this->request->param('id');
		  $books=ORM::factory('Book',$id)->delete();//удаляем в таблице $books поля, соответствующие $id
	      HTTP::redirect('admin/adminbooks');//Перенаправляем на страницу с общим списком книг
     	
     }	//End action_delete
	 
} // End Adminbooks