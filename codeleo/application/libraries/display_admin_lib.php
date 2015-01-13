<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 Библиотека для формирования шаблонов административной панели
*/
class Display_admin_lib {

  // Подключение шаблона без сайтбрара
	public function admin_page ($name,$data)
	{
	   $CI =& get_instance (); //Для подключения стандартных методов контроллеров
	   $CI->load->view('admin/templates/admin_header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('admin/templates/admin_footer_view');    
	
	}

	//Подключение шаблона с правым сайтбаром - списком всех категорий 
	public function admin_sidebar_page ($name,$data)
	{
	   $CI =& get_instance (); //Для подключения стандартных методов контроллеров
	   
	   $CI->load->view('admin/templates/admin_header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('admin/templates/admin_sidebar_view',$data);
       $CI->load->view('admin/templates/admin_footer_view');    
	}







}
