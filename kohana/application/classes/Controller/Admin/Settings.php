<?php defined('SYSPATH') or die('No direct script access.');

// Выводит содежимое главной страницы Административной панели
class Controller_Admin_Settings extends Controller_Admin {

   public function action_index() {
				
		// Вывод в шаблон
		$content=View::factory('admin/settings/v_settings');
		$this->template->content=array($content);
    }
  }
