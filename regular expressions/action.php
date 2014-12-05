<?php
/*
action.php - ����-���������� ������� �����


����������
	$search_file  - ��� �������� �����
    $search_text  - ������� �����
	$search_check - ��������� �������� 'search text
	array $files  - ������ ��������� �� ����� ������
	$mask         - ����� ��� ������ ����� 			

�������
    function search_text_in_file($search_text,$filename) - ���� ����� $search_text � �������� ����� $filename (functions.php).
	                                                      ����������:
 														    - ����� ���������;
															- ����� ����� � ���������� $search_text,
															- ��� ����� � ������� ������ �����.
														  ���� ������������ �� �������, ���������� ���������
														  
   	search_all($search_text=null,$search_file,$files) - ���� �������� ���� $search_file � ������� ������, ��������������� �����.
	                                                    ���� ����� ����� $search_text, �� ���� ��� � $search_file
*/

include ('functions.php');// ����������� ���������� �������

//��������, �������� �������������
$search_file=$_POST['search_file'];    
$search_text=$_POST['search_text'];   	
$search_check=$_POST['search_check']; 	

$mask = "*.txt"; // ����� ��� ������ ����� � ������� ����������
 
 $files=array();
 //��������� ������ $files �������, ���������������� ����� 
 foreach (glob($mask) as $filename) { 
                   $files[]=$filename;
		       }

//������� �� �������. ����� �� ����� ��������
if(empty($search_check)){  
	if(!empty($search_file)){  //������������ ���� ��� ����� ��� ������                                   
			search_all(null,$search_file,$files);    //�����  ��������� ����� $search_file ����� ������, ��������������� ����� $files
	}else  	//������������ �� ���� ��� �����
		    echo 'The field "Search file" must be filled!';
} 	else 	{ 
//������� �������. ����� ����� ������
			if (!empty($search_text)) { //������������ ���� ����� ��� ������
                    					 
					if (!empty($search_file)){  //������������ ���� ��� ����� ��� ������.���� ����� � �������� �����
					    search_all ($search_text,$search_file,$files);   //���� �������� ����� $search_text � �������� ����� $search_file, ���� ���� ������ ����� ������ $files, �������������� �����
					}	else { 
                            //������������ �� ���� ��� ����� ��� ������. ���� ����� �� ���� ������ ������� ����������   					
							//���� ����� � ������, ��������������� �����.	
							foreach ($files as $f){
							   search_text_in_file($search_text,$f);
							}
						 }  
		    } else 
			    //������������ �� ���� ����� ��� ������
			    echo 'enter text for search!';
    }
?>