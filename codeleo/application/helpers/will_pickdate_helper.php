<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*Хэлпер для подключения плагина даты и времени will_pickdate*/
function will_pickdate() 
     {
	 
		return '
	
		<link type="text/css" href="http://juliajune.esy.es/codeleo/plugins/will_pickdate/style.css" rel="stylesheet" />
		<script type="text/javascript" src="http://juliajune.esy.es/codeleo/plugins/will_pickdate/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="http://juliajune.esy.es/codeleo/plugins/will_pickdate/will_pickdate.js"></script> 
	
	<script type="text/javascript"> 
		
		$(document).ready(function(){
		      
			    //Отвечает за вывод только календаря
				$("input#calendar").will_pickdate({  // определяем к какому элементу относится input, id="calendar"  
				timePicker: false,                   // Отключаем выбор времени
				startDay: 1,                         // Первый день нендели - понедельник. По умолчанию - воскресенье
				inputOutputFormat: "Y-m-d"           // Вид даты, который придет на сервер и может быть передан в БД MySql
				});
				
				 //Отвечает за вывод только календаря и времени
				$("input#datatime").will_pickdate({  // определяем к какому элементу относится input, id="datatime"
				timePicker: true,                    // Включаем выбор времени
				militaryTime: true,                  // Вид времени в 24-м формате
				format: "j F Y @ H:i:s",             // Вид даты и времени, который увидит пользователь в input 
				inputOutputFormat: "Y-m-d H:i:s",    // Вид даты и времени, который придет на сервер и может быть передан в БД MySql
				startDay: 1                          // Первый день нендели - понедельник. По умолчанию - воскресенье
				});
				
				 //Отвечает за вывод только времени
				$("input#time").will_pickdate({     // определяем к какому элементу относится input, id="time"
				timePickerOnly: true,               // выводиться только время
				militaryTime: true,                 // Вид времени в 24-м формате
				format:	"H:i:s",	                // Вид времени, который увидит пользователь в input 
				inputOutputFormat: "H:i:s"          // Вид времени, который придет на сервер и может быть передан в БД MySql 
				});
				
		});

	</script> 
	';		
}
/* End of file will_pickdate.php */
/* Location: ./system/helpers/editor_helper.php */