<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  ���������� ��� ������������ �������� ���������� �����
*/

class Display_index_lib {


  // ����������� ������� ��� ���������
	public function index_page ($name,$data)
	{
	   $CI =& get_instance (); //��� ����������� ����������� ������� ������������
	   $CI->load->view('index/templates/header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('index/templates/footer_view');    
	
	}

	//����������� ������� � ������ ��������� - ������� ���� ��������� 
	public function index_sidebar_page ($name,$data)
	{
	   $CI =& get_instance (); //��� ����������� ����������� ������� ������������
	   
	   $CI->load->view('index/templates/header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('index/templates/sidebar_view',$data);
       $CI->load->view('index/templates/footer_view');    
	}







}
