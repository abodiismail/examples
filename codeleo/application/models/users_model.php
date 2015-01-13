<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends Crud {

public $table = 'users'; //Имя таблицы

//Правила для валидации формы авторизации
public $search = array(
	array
	   (
		'field' => 'username',
		'label' => 'Логин',
		'rules' => 'trim|required|min_length[5]|max_length[12]|xss_clean'
		),
	array
	   (
		'field' => 'password',
		'label' => 'Пароль',
		'rules' => 'trim|required'
		),
);

//Правила для валидации формы регистрации
public $create = array(
	array
	   (
		'field' => 'username',
		'label' => 'Логин',
		'rules' => 'trim|required|min_length[5]|max_length[12]|xss_clean'
		),
		
	array
	   (
		'field' => 'email',
		'label' => 'e-mail',
		'rules' => 'trim|required|valid_email'
		),	
	array
	   (
		'field' => 'password',
		'label' => 'Пароль',
		'rules' => 'trim|required|matches[confirm_password]'
		),
	
	array
	   (
		'field' => 'confirm_password',
		'label' => 'Повторите пароль',
		'rules' => 'trim|required'
		),	
		
);	
	

	//Поиск в БД данных, введенных пользователем с формы авторизации
	public function search_user($username,$password){
	  
	  //Устанавливаем правила для валидации
	    $this->form_validation->set_rules($this->search);
		    //Если валидация прошла успешно, делаем запрос к БД
			if ($this->form_validation->run()==true) {
								
				$this->db->select('*');
				$this->db->from($this->table);
				$res=$this->db->where(array('username' => $username, 'password' => md5($password)));
				
				if  ($res->count_all_results()==1){

					if ($this->is_admin($username,$password)==true){
						return 'admin'; 
					} else{
						return 'user'; //Успех. Есть такой пользователь
					}
					
				} else {
					return 'nobody'; //Ошибка. Нет такого пользователя
				};
				
			} else {
				return 'valid_error';	//Ошибка валидации	
			}
			
	}//end function search_user
	
	
	public function is_admin ($username,$password){
		
				$this->db->select('*');
				$this->db->from($this->table);
				$role="admin";
				$res=$this->db->where(array('username' => $username, 'password' => md5($password), 'role'=>$role));
				
				if  ($res->count_all_results()==1){
					return true; //Успех. Есть такой пользователь
				} else {
					return false; //Ошибка. Нет такого пользователя
				};
		
	}
	

	//Регистрация пользователя
	public function create_user($username,$email,$password,$confirm_password){
	  
	  //Устанавливаем правила для валидации
	    $this->form_validation->set_rules($this->create);
		
		    //Если валидация прошла успешно, делаем запрос к БД
			if ($this->form_validation->run()==true) {
				
				
				//проверяем, есть ли пользователь с такими  $username и $email в БД
				$uniq=$this->uniq_user($username,$email);
				
				//Пользователя не существует
                if ($uniq==1){
					            
								//создаем пользователя в БД 								
								 $data = array(
												'username'=>$username,
								                'email'=>$email,
								                'password'=>md5($password),
												'role'=>'user',
								 );
								 
								$this->db->insert($this->table, $data);	 
								return 1; //Успех. Пользователь создан
                                  
				}	else{		
				                return 0; //Ошибка. Пользователь уже существует 
						
					}
			}else{
				return 2; //Ошибка валидации	
			}				
	}//end create_user()
	
	
	
	//Проверяем логин и e-mail пользователя на уникальность
    public function uniq_user($username,$email){
	    
		//Ищем в БД пользователя с $username, $email
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->or_where('email',$email);
		
		if ($this->db->count_all_results()==0){
			return 1; //Нет пользователя с такими данными
		} else {
			return 0; //Есть пользователь с такими данными
		}
	}//end function uniq_user()

	
	
}		
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */