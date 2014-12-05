<?php
/*
action.php - Файл-обработчик событий формы


Переменные
	$search_file  - имя искомого файла
    $search_text  - искомый текст
	$search_check - состояние чекбокса 'search text
	array $files  - массив найденных по маске файлов
	$mask         - маска для поиска файла 			

Функции
    function search_text_in_file($search_text,$filename) - ищет текст $search_text в заданном файле $filename (functions.php).
	                                                      Возвращает:
 														    - число вхождений;
															- текст файла с выделенным $search_text,
															- имя файла в котором найден текст.
														  Если соответствие не найдено, возвращает сообщение
														  
   	search_all($search_text=null,$search_file,$files) - ищет заданный файл $search_file в массиве файлов, соответствующих маске.
	                                                    Если задан текст $search_text, то ищет его в $search_file
*/

include ('functions.php');// подключение библиотеки функций

//Значения, вводимые пользователем
$search_file=$_POST['search_file'];    
$search_text=$_POST['search_text'];   	
$search_check=$_POST['search_check']; 	

$mask = "*.txt"; // маска для поиска файла в текущей директории
 
 $files=array();
 //Заполняем массив $files файлами, соответствующими маске 
 foreach (glob($mask) as $filename) { 
                   $files[]=$filename;
		       }

//Чекбокс не отмечен. Текст не будет искаться
if(empty($search_check)){  
	if(!empty($search_file)){  //пользователь ввел имя файла для поиска                                   
			search_all(null,$search_file,$files);    //поиск  заданного файла $search_file среди файлов, соответствующих маске $files
	}else  	//пользователь не ввел имя файла
		    echo 'The field "Search file" must be filled!';
} 	else 	{ 
//Чекбокс отмечен. Текст будем искать
			if (!empty($search_text)) { //пользователь ввел текст для поиска
                    					 
					if (!empty($search_file)){  //пользователь ввел имя файла для поиска.ищем текст в заданном файле
					    search_all ($search_text,$search_file,$files);   //ищем заданный текст $search_text в заданном файле $search_file, если файл найден среди файлов $files, соответсвующих маске
					}	else { 
                            //пользователь не ввел имя файла для поиска. ищем текст во всех файлах текущей директории   					
							//ищем текст в файлах, соответствующих маске.	
							foreach ($files as $f){
							   search_text_in_file($search_text,$f);
							}
						 }  
		    } else 
			    //пользователь не ввел текст для поиска
			    echo 'enter text for search!';
    }
?>