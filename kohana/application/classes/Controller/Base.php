<?php defined('SYSPATH') or die('No direct script access.');
/*  Контроллер Base- базовый контроллер, который наследуют 
    контроллеры index- контроллер клиентской части, admin-контроллер административной части
*/

class Controller_Base extends Controller_Template {

  	public function before(){
	    parent::before();
	  /*
	    Передаем в базовый шаблон base переменные:
		site_name - имя сайта;
		site_description - описание сайта;
		title_page - название страницы.
	  */
	    //Переменные в шаблоне
	    $this->template->site_name=NULL;              //Имя сайта
		$this->template->title=NULL;                  //Заголовок сайта
	    $this->template->site_description=NULL;       //Описание сайта
		$this->template->title_page=NULL;			  //Заголовок страницы
		
		//Части шаблона
		$this->template->content=NULL;  		//Центральная часть сайта
		$this->template->left_sidebar=NULL;		//Левый сайтбар
		$this->template->right_sidebar=NULL;	//Правый сайтбар
		$this->template->header=NULL;           //Хэдер
		$this->template->footer=NULL;           //Футер
		 
		//Подключаем стили и скрипты 
	    $this->template->styles=array();
	    $this->template->scripts=array();
	}
} // End Base













