<?php defined('SYSPATH') or die('No direct script access.');
/*
 Контроллер Index отвечает за вывод клиентской части
 На 26.01.2014 он не доработан. Клиентская часть в разработке
*/
class Controller_Index extends Controller_Base {

    public $template='index/v_base'; 
	
	public function before() {
		parent::before();
		
		//Подключаем стили и скрипты 
		$this->template->styles[] = 'media/bootstrap/css/bootstrap.css';
		$this->template->scripts[]='ckeditor/ckeditor.js';
		}
 }// End Index
