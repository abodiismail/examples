<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню админа"
 */
class Controller_Widgets_Menuadmin extends Controller_Widgets {

    public $template = 'widgets/w_menuadmin';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Главная' => array('Main'),
            'Книги' => array('Adminbooks'),
            'Авторы' => array('Adminauthors'),
            'Категории' => array('Admincategories'),
            'Настройки' => array('Settings'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}