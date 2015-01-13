<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	
	function __construct() {
        parent::__construct();
		
		$this->load->library('display_index_lib');
		$this->load->model('users_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
	}
    
    //Форма авторизации
	public function login()
	{
		$data='';
		$name = 'index/pages/login';
        $this->display_index_lib->index_page($name,$data);
	} //end  function login()
	
	//Обработка данных пользователя, пришедших с формы авторизации
	public function login_ajax()
	{
		//Если запрос пришел не по Ajax, завершаем работу.
		if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest'){ 
			die("не Ajax!");
		}else{
		//Если запрос пришел по Ajax
		
            //Читаем данные, введенные пользователем		
			 $username=$this->input->post('username');
			 $password=$this->input->post('password');
			 
			 //Проверяем, существует ли в БД пользователь с такими логином и паролем
			 $users=$this->users_model->search_user($username,$password);
			 					
				switch($users){
					
					//пользователь в БД не найден
					case 'nobody':
					             //Выводим сообщение  
								$message='<div class="error">Ошибка! неверные логин или пароль или такого пользователя не существует!</div>';
								echo json_encode(array('error' => '1', 'message' => $message));
								break;					
					
					//пользователь в БД найден			
					case 'user':		
					            
								//Создаем сессию с данными пользователя.
								$newdata = array(
													'username'  =>$username,
													'logged_in' => TRUE
												);
								$this->session->set_userdata($newdata);
								
					            //Выводим сообщение
								$message='<div class="success">Авторизация прошла успешно!</div>';
								$redirect=base_url();
								echo json_encode(array('success' => '0', 'message' => $message, 'redirect'=>$redirect));
								break;

					//ошибка валидации формы авторизации	
					case 'admin': 
								//Создаем сессию с данными админа.
								$newdata = array(
													'adminname'  =>$username,
													'logged_in' => TRUE
												);
								$this->session->set_userdata($newdata);
					
								$message='<div class="success">Привет, админ!</div>';
								$redirect=base_url()."admin";
								echo json_encode(array('success' => '0', 'message' => $message, 'redirect'=>$redirect));
								break;					
													
					//ошибка валидации формы авторизации	
					case 'valid_error': 
								$message=validation_errors('<div class="error"><strong>Ошибка!</strong> ', '</div>');
								echo json_encode(array('error' => '1', 'message' => $message));
								break;
								
						
										
				}
		} 
    }//end  function login_ajax()
	
	
	//Форма регистрации
	public function register()
	{
		$data='';
		$name = 'index/pages/register';
        $this->display_index_lib->index_page($name,$data);
	}
	
	
	//Обработка данных пользователя, пришедших с формы регистрации
	public function register_ajax()
	{
		if($this->input->server('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest'){ 
			die("не Ajax!");
		}else{
			
			//Читаем данные, введенные пользователем
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$confirm_password=$this->input->post('confirm_password');
			
			//Создаем пользователя
			$create=$this->users_model->create_user($username,$email,$password,$confirm_password);
			
			switch($create){
									
					//Ошибка. Такой пользователь уже существует
					case 0:
								$message='<div class="error">Такой пользователь уже существует!</div>';
								echo json_encode(array('error' => '1', 'message' => $message));
								break;
					
					//регистрация прошла успешно			
					case 1:		
								
                        		//Отсылаем на email пользователя сообщение об успешной регистрации
								$theme='Регистрация на сайте SmartStart';
								$text='
								        Ваши данные:
											 логин: '.$username.'
											пароль: '.$password.'
			                            Авторизируйтесь
										http://juliajune.net/portfolio/codeleo/login
								';
								$this->email->from('admin@email.com','SmartStart');//от кого
								$this->email->to($email); 		 //e-mail получателя
								$this->email->subject($theme);   //тема письма
								$this->email->message($text);	 //содержимое письма 
								$this->email->send(); 			 //отправить письмо
								
								
								//Сообщение на сайте об успешной регистрации
								$message='<div class="success">Регистрация прошла успешно!</div>';
								$redirect=base_url()."login";
								echo json_encode(array('success' => '0', 'message' => $message, 'redirect'=>$redirect));
								break;
													
					//ошибка валидации 
					case 2: 
								$message=validation_errors('<div class="error"><strong>Ошибка!</strong> ', '</div>');
								echo json_encode(array('error' => '1', 'message' => $message));
								break;
				} 
		}
	}//end  function register_ajax()
	
	
	//Выход
	public function logout()
	{    
	    //уничтожаем данные текущей сессии
		$this->session->sess_destroy();
		
		//перенаправляем на главную страницу
		redirect(base_url());
	}//end  function logout()
		
}		
/* End of file users.php */
/* Location: ./application/controllers/users.php */