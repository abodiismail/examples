<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 ���������� ��� ������������ �������� ���������������� ������
*/
class Display_admin_lib {

  // ����������� ������� ��� ���������
	public function admin_page ($name,$data)
	{
	   $CI =& get_instance (); //��� ����������� ����������� ������� ������������
	   $CI->load->view('admin/templates/admin_header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('admin/templates/admin_footer_view');    
	
	}

	//����������� ������� � ������ ��������� - ������� ���� ��������� 
	public function admin_sidebar_page ($name,$data)
	{
	   $CI =& get_instance (); //��� ����������� ����������� ������� ������������
	   
	   $CI->load->view('admin/templates/admin_header_view',$data);
       $CI->load->view($name.'_view',$data);
       $CI->load->view('admin/templates/admin_sidebar_view',$data);
       $CI->load->view('admin/templates/admin_footer_view');    
	}







}
