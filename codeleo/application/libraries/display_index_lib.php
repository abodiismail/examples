<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  Библиотека для формирования шаблонов клиентской части
*/

class Display_index_lib {


  // Подключение шаблона без сайтбрара
	public function index_page ($name,$data)
	{
	   $CI =& get_instance (); //Для подключения стандартных методов контроллеров
	   $CI->load->view('index/templates/header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('index/templates/footer_view');    
	
	}

	//Подключение шаблона с правым сайтбаром - списком всех категорий 
	public function index_sidebar_page ($name,$data)
	{
	   $CI =& get_instance (); //Для подключения стандартных методов контроллеров
	   
	   $CI->load->view('index/templates/header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('index/templates/sidebar_view',$data);
       $CI->load->view('index/templates/footer_view');    
	}







}
