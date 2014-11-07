<?php defined('SYSPATH') or die('No direct script access.');
/*
 Контроллер Admin отвечает за вывод админской части
*/
class Controller_Admin extends Controller_Base {
     
	public $template='admin/v_base';

	
   	public function  before() {
        parent::before();
		
		//Подгружаем виджеты
		$menu_admin=Request::factory('widgets/menuadmin')->execute();     //Меню администратора в хэдере
		$footer_admin=Request::factory('widgets/footeradmin')->execute(); //Футер
		
		//Части шаблона
		$this->template->header=array($menu_admin);    //Хэдер
		$this->template->footer=array($footer_admin);  //Футер
		
		//Подключаем стили и скрипты 
        $this->template->styles = array('media/css/bootstrap.css','media/css/user_css.css');
		$this->template->scripts[]='ckeditor/ckeditor.js';
		
    }
}// End Admin
