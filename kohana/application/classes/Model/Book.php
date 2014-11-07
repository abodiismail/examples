<?php defined('SYSPATH') or die('No direct script access.');

class Model_Book extends ORM {
   
    protected $_table_name = 'books';

    protected $_primary_key = 'id';

    protected $_db_group = 'default';

    protected $_has_many = array(
		      'categories' => array(
					'model' => 'Category', // Модель c которой связываемся - "Категория"
					'foreign_key' => 'book_id',					
					'through' => 'books_categories', // промежуточная таблица "книги-категории" по которой связаны книги и категории
					'far_key' => 'category_id', 
				),
			  'authors' => array(
					'model' => 'Author',// Модель c которой связываемся - "Авторы"
					'foreign_key' => 'book_id',			
                    'through' => 'books_authors', // промежуточная таблица "книги-авторы" по которой связаны книги и категории
					'far_key' => 'author_id', 
			   ),
    );

   //Правила валидации
   public function rules(){
        return array(
		  
            'title' => array(
                array('not_empty'),							//Поле "Название"  не должно быть пустым 
                array('min_length', array(':value', 2)),	//Запись в поле "Название" не должно быть меньше 2
                array('max_length', array(':value', 50)),	//Запись в поле "Название" не должно быть больше 50
            ),
	/*				
            'cat[]'=> array(
				array('not_empty'),		//Поле "Категория"  не должно быть пустым 
			),
			
			'author[]'=>array(
				array('not_empty'),	
			 ),
  */
					
		   	'editor1' => array(
                array('not_empty'),							//Поле "Описание"  не должно быть пустым 
                array('min_length', array(':value', 2)),	//Запись в поле "Описание"  не должно быть меньше 2
                array('max_length', array(':value', 500)),	//Запись в поле "Описание"  не должно быть больше 500
            ),
		);
    }

	//Перевод полей
    public function labels(){
        return array(
            'title' => ' "Название"  ',
            'editor1' => ' "Описание" ',
			'cat[]'=> ' "Категория" ',
			'author[]'=> ' "Автор" ',
			
			
		);
    }

    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'title' => array(
                array('strip_tags'),
            ),
			
			 'editor1' => array(
                array('strip_tags'),
            ),
            
        );
    }

} //End Model_Book