<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*������ ��� ����������� ������� ���� � ������� will_pickdate*/
function will_pickdate() 
     {
	 
		return '
	
		<link type="text/css" href="http://juliajune.esy.es/codeleo/plugins/will_pickdate/style.css" rel="stylesheet" />
		<script type="text/javascript" src="http://juliajune.esy.es/codeleo/plugins/will_pickdate/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="http://juliajune.esy.es/codeleo/plugins/will_pickdate/will_pickdate.js"></script> 
	
	<script type="text/javascript"> 
		
		$(document).ready(function(){
		      
			    //�������� �� ����� ������ ���������
				$("input#calendar").will_pickdate({  // ���������� � ������ �������� ��������� input, id="calendar"  
				timePicker: false,                   // ��������� ����� �������
				startDay: 1,                         // ������ ���� ������� - �����������. �� ��������� - �����������
				inputOutputFormat: "Y-m-d"           // ��� ����, ������� ������ �� ������ � ����� ���� ������� � �� MySql
				});
				
				 //�������� �� ����� ������ ��������� � �������
				$("input#datatime").will_pickdate({  // ���������� � ������ �������� ��������� input, id="datatime"
				timePicker: true,                    // �������� ����� �������
				militaryTime: true,                  // ��� ������� � 24-� �������
				format: "j F Y @ H:i:s",             // ��� ���� � �������, ������� ������ ������������ � input 
				inputOutputFormat: "Y-m-d H:i:s",    // ��� ���� � �������, ������� ������ �� ������ � ����� ���� ������� � �� MySql
				startDay: 1                          // ������ ���� ������� - �����������. �� ��������� - �����������
				});
				
				 //�������� �� ����� ������ �������
				$("input#time").will_pickdate({     // ���������� � ������ �������� ��������� input, id="time"
				timePickerOnly: true,               // ���������� ������ �����
				militaryTime: true,                 // ��� ������� � 24-� �������
				format:	"H:i:s",	                // ��� �������, ������� ������ ������������ � input 
				inputOutputFormat: "H:i:s"          // ��� �������, ������� ������ �� ������ � ����� ���� ������� � �� MySql 
				});
				
		});

	</script> 
	';		
}
/* End of file will_pickdate.php */
/* Location: ./system/helpers/editor_helper.php */