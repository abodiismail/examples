<?
/*
functions.php - файл для хранения библиотеки функций

function search_text_in_file($search_text,$filename) - ищет текст $search_text в заданном файле $filename (functions.php).
	                                                      Возвращает:
 														    - число вхождений;
															- текст файла с выделенным $search_text,
															- имя файла в котором найден текст.
														  Если соответствие не найдено, возвращает сообщение
Переменные														  
  $search_text - текст, который нужно найти
   $filename   - имя файла, в котором ищем текст $searchtext
   $sear_t     - переменная, в которую заносим содержимое файла $filename;
   $result     - результат поиска текста $searchtext в файле $filename. число совпадений
   $text       - содержимое файла $filename с выделенным искомым $searchtext (если текст найден в файле)
 */
  
function search_text_in_file($search_text,$filename){ 
    $sear_t=file_get_contents($filename);                        //заносим содержимое файла в переменную                                      
	$result = preg_match_all('/\b'.$search_text.'\b/i',$sear_t,$found); //ищем текст  
	  if ($result!=0){                                          //если  текст найден, выводим результаты поиска                                              
                    echo "Matches: $result<br>";                         
                    $text = preg_replace('/\b'.$search_text.'\b/i', '<span style="background:yellow">'.$search_text.'</span>', $sear_t);
			        echo "File content: $text<br>";
					echo "File name: $filename<br>"; 
					echo "<br>";
														
		} else { 
               	//если текст не найден выводим сообщение
				 echo "$filename: Text not found"; 
				 echo "<br><br>";
		  }
} //end  search_text_in_file

/*
    function search_all($search_text=null,$search_file,$files) - ищет заданный файл $search_file в массиве файлов, соответствующих маске.
	                                                             Если задан текст $search_text, то ищет его в $search_file
    $search_file  - имя искомого файла
    $search_text  - искомый текст
    $res          - результат поиска файла в массиве $files. Если переменная существует - файл найден. не существует-файл не найден
    array $files  - массив найденных по маске файлов
*/
														
function search_all ($search_text=null,$search_file,$files){
		$res=preg_grep('/^'.$search_file.'\.txt/i', $files);  //найден ли файл?	
		    if (!empty($res)){ 
                //файл найден
                   if ($search_text!=null){
				       $search_file=$search_file.'.txt';
				       search_text_in_file($search_text,$search_file); 
				       }
				    else  echo 'A file'." ".$search_file.'.txt'." ".'is exist in current directory';
		       
		    } else	
       			//файл не найден	
			    echo 'A file'." ".$search_file.'.txt'." ".'is not found';

} //end  search_all														
													


?>