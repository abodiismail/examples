

	$(document).ready(function(){
		//При нажатиии на кнопку "Отправить", скрипт перенаправляется на выполнение функции registerUser
		$('#registerModalform').submit(registerUser);
	});

	//функция, перехватывающая процесс
	function registerUser(event)
	{
		//Отменяем стандартную отправку submit
		event.preventDefault();

		//Заносим пользовательские данные с формы в переменную form_data
		var form_data = $('#registerModalform').serialize(); 

    //Аякс
    $.ajax({
            url: url, //url - переменная содежит url, где находиться серверный скрипт. Определена в файле вида соответствующей формы
            type: "POST",      
            data: form_data,
            dataType: "json",
            cache: false,
           
			success: function (json) {              
                if (json.error==1) //ошибка есть
                { 
			        //выводим сообщение об ошибке
                    $('#registerModalerror').html(json.message).show();
                    
                } else { //ошибки нет
				
				   //выводим сообщение об успехе
                   $('#registerModalerror').html(json.message).show();
				   
				   
				   /*
					делаем редирект с задержкой на 1 секунду.
					Переменная redirect содержит url, на который перенаправляем.
					Определена в файле вида соответствующей формы
				   */
				   setTimeout (function(){
									$(location).attr('href',json.redirect);	
								}, 1000); 
				   
				   
                }              
            }
			
			
			
			
        });
}
