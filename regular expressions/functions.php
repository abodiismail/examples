<?
/*
functions.php - ���� ��� �������� ���������� �������

function search_text_in_file($search_text,$filename) - ���� ����� $search_text � �������� ����� $filename (functions.php).
	                                                      ����������:
 														    - ����� ���������;
															- ����� ����� � ���������� $search_text,
															- ��� ����� � ������� ������ �����.
														  ���� ������������ �� �������, ���������� ���������
����������														  
  $search_text - �����, ������� ����� �����
   $filename   - ��� �����, � ������� ���� ����� $searchtext
   $sear_t     - ����������, � ������� ������� ���������� ����� $filename;
   $result     - ��������� ������ ������ $searchtext � ����� $filename. ����� ����������
   $text       - ���������� ����� $filename � ���������� ������� $searchtext (���� ����� ������ � �����)
 */
  
function search_text_in_file($search_text,$filename){ 
    $sear_t=file_get_contents($filename);                        //������� ���������� ����� � ����������                                      
	$result = preg_match_all('/\b'.$search_text.'\b/i',$sear_t,$found); //���� �����  
	  if ($result!=0){                                          //����  ����� ������, ������� ���������� ������                                              
                    echo "Matches: $result<br>";                         
                    $text = preg_replace('/\b'.$search_text.'\b/i', '<span style="background:yellow">'.$search_text.'</span>', $sear_t);
			        echo "File content: $text<br>";
					echo "File name: $filename<br>"; 
					echo "<br>";
														
		} else { 
               	//���� ����� �� ������ ������� ���������
				 echo "$filename: Text not found"; 
				 echo "<br><br>";
		  }
} //end  search_text_in_file

/*
    function search_all($search_text=null,$search_file,$files) - ���� �������� ���� $search_file � ������� ������, ��������������� �����.
	                                                             ���� ����� ����� $search_text, �� ���� ��� � $search_file
    $search_file  - ��� �������� �����
    $search_text  - ������� �����
    $res          - ��������� ������ ����� � ������� $files. ���� ���������� ���������� - ���� ������. �� ����������-���� �� ������
    array $files  - ������ ��������� �� ����� ������
*/
														
function search_all ($search_text=null,$search_file,$files){
		$res=preg_grep('/^'.$search_file.'\.txt/i', $files);  //������ �� ����?	
		    if (!empty($res)){ 
                //���� ������
                   if ($search_text!=null){
				       $search_file=$search_file.'.txt';
				       search_text_in_file($search_text,$search_file); 
				       }
				    else  echo 'A file'." ".$search_file.'.txt'." ".'is exist in current directory';
		       
		    } else	
       			//���� �� ������	
			    echo 'A file'." ".$search_file.'.txt'." ".'is not found';

} //end  search_all														
													


?>