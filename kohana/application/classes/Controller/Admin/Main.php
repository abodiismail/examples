<?php defined('SYSPATH') or die('No direct script access.');

// Выводит содежимое главной страницы Административной панели
class Controller_Admin_Main extends Controller_Admin {

   public function action_index() {
		
		$count=ORM::factory('Book')->count_all();//Подсчитываем общее число записей в базе
		
		// Вывод в шаблон
		$c=View::factory('admin/main/v_main', array('count'=>$count));
		$this->template->content=array($c);
    }
  }
