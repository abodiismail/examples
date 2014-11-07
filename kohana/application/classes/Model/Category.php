<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {
    
    protected $_table_name = 'categories';

    protected $_primary_key = 'id';

    protected $_db_group = 'default';

    protected $_has_many = array(
			
        'books' => array(
            'model' => 'Book', // Модель c которой связываемся - "Книги"
	'foreign_key' => 'category_id',		
            'through' => 'books_categories', // промежуточная таблица "книги-категории" по которой связаны книги и категории
            'far_key' => 'book_id', 
			
	  ),
    ); 

	//Правила валидации
	public function rules() {
        return array(
		    'category' => array(
                array('not_empty'), //Поле "Категория" не должно быть пустым
 	     array('min_length', array(':value', 2)),	           //Запись в поле "Название" не должно быть меньше 2
                array('max_length', array(':value', 50)),	//Запись в поле "Название" не должно быть больше 50

            ),
		);
    }
	
	//Перевод полей
	public function labels(){
        return array(
            'category' => 'Категория',
              );
    }
} //Model_Category