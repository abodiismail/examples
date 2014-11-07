<?php defined('SYSPATH') or die('No direct script access.');

//Контроллер Main выводит содержимое главной страницы

class Controller_Index_Main extends Controller_Index {

   
	public function action_index() {
				
		// Вывод в шаблон
		$content=View::factory('index/main/v_main');
				
		$this->template->content=$content;
        $this->template->title = 'Главная';
        $this->template->page_title = 'О магазине';
    }
	
} // End Index
