<?php
$config = array(
//Правила валидвции формы обратной связи
'contact_rules' => array(
array
	(
		'field' => 'name',
		'label' => 'Имя',
		'rules' => 'trim|htmlspecialchars|required|xss_clean|max_length[70]'
	),

array
	  (
		'field' => 'email',
		'label' => 'Е-mail',
		'rules' => 'trim|htmlspecialchars|required|valid_email|xss_clean|max_length[70]'
		),
		
array
	 (
		'field' => 'subject',
		'label' => 'Тема',
		'rules' => 'trim|htmlspecialchars|xss_clean|max_length[70]'
	  ),		

array
       (
         'field' => 'message',
         'label' => 'Текст сообщения',
         'rules' => 'trim|htmlspecialchars|required|xss_clean|max_length[5000]'
       ),

array
		(
		'field' => 'captcha',
		'label' => 'Цифры с картинки',
		'rules' => 'trim|htmlspecialchars|required|numeric|exact_length[5]'
		)     
),

//Правила валидации формы настроек в админской части 
'settings_rules' => array(

array
	  (
		'field' => 'admin_email',
		'label' => 'email админа',
		'rules' => 'trim|htmlspecialchars|required|valid_email|xss_clean|max_length[70]'
		),
		
array
	 (
		'field' => 'kol_posts_user',
		'label' => 'Записей блога на страницу в пользовательской части',
		'rules' => 'trim|htmlspecialchars|is_natural|is_natural_no_zero|required|xss_clean|numeric|integer|max_length[4]'
	  ),

array
	 (
		'field' => 'kol_posts_admin',
		'label' => 'Записей блога на страницу в администраторской части',
		'rules' => 'trim|htmlspecialchars|is_natural|is_natural_no_zero|required|xss_clean|numeric|integer|max_length[4]'
	  ),	  
  
  )
);  
  /*
'add_rules' => array(

array
	   (
		'field' => 'title',
		'label' => 'Название',
		'rules' => 'trim|htmlspecialchars|required|xss_clean|max_length[70]'
		),

array
	 (
		'field' => 'date',
		'label' => 'Дата добавления',
		'rules' => 'trim|htmlspecialchars|required|max_length[20]'
	  ),
	  
array
	 (
		'field' => 'swich',
		'label' => 'Статус',
		'rules' => 'required'
	  ),

array
	 (
		'field' => 'category_id',
		'label' => 'Категория',
		'rules' => 'required'
	  ),

array
       (
         'field' => 'file',
         'label' => 'Краткое описание',
         'rules' => 'trim|htmlspecialchars|xss_clean|max_length[300]'
       ),	 

	  
array
       (
         'field' => 'short_text',
         'label' => 'Краткое описание',
         'rules' => 'trim|htmlspecialchars|xss_clean|max_length[300]'
       ),	  

array
       (
         'field' => 'main_text',
         'label' => 'Полный текст',
         'rules' => 'trim|htmlspecialchars|required|xss_clean'
       ),	 
	   
array
       (
         'field' => 'desc',
         'label' => 'Мета-описание записи блога:',
         'rules' => 'trim|htmlspecialchars|xss_clean|max_length[300]'
       ),		   
	   
  
array
       (
         'field' => 'keywords',
         'label' => 'Ключевые слова',
         'rules' => 'trim|htmlspecialchars|xss_clean|max_length[300]'
       ),
)	   
   
);  
*/  
  
  