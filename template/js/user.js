$(document).ready(function(){

//Вход пользователя
$('.loginFormSpan').click(function(){

	var email = $('.loginFormEmail').val();
	var password = $('.loginFormPass').val();
	var phone = $('.loginFormPhone').val();
	if(phone == "") {
		$.post(
		  "/user/login",
		  {
		    email: email,
		    password: password
		  },
		  function(data){
		  	alert(data);
		  	// document.location.href='/';
		  }
		);
	} else {
		$.post(
		  "user/loginbyphone",
		  {
		    phone: phone
		  },
		  function(data){
		  	alert(data);
		  	$('#loginForm').append('<input type="text" class="loginFormSMS" id="loginFormSMS" placeholder="Введите код подтверждения">')
		  	$('#loginForm').append('<div class="loginFormButton"><span class="loginFormSMSbutton">Вход</span></div>')
		  	$('#loginForm').append('<div class="loginFormButton"><span class="loginSmsInfo">Не уходите и не перезагружайте страницу, в противном случае, вход придется повторить снова</span></div>')
		  	$('.loginFormSMSbutton').click(function(){
		  		var smsNumber = $('.loginFormSMS').val();
		  		var phone = $('.loginFormPhone').val();
		  		if(smsNumber != "") {
		  			$.post(
		  			"/user/smsverify",
					  {
					    phone: phone,
					    smsNumber: smsNumber
					  },
					  function(data){
					  	alert(data);
					  	// document.location.href='/';
					  }
		  			);	
		  		} else {
		  			alert("Укажите код, полученый по СМС");
		  		}
		  	});
		  }
		);
	}
	

});

//Регистрация нового пользователя
$('.registrationFormSubmit').click(function(){

	var login = $('.registrationFormLogin').val();
	var name = $('.registrationFormName').val();
	var surname = $('.registrationFormSurname').val();
	var phone = $('.registrationFormPhone').val();
	var email = $('.registrationFormEmail').val();
	var password = $('.registrationFormPassword').val();
	var polzSogl = $('#polzSogl').val();

	if (login !=="" && name !== "" && surname !=="" && phone !== "" && email !== "" && password !=="" && polzSogl !== "") {

		$.post(
		  "/user/register",
		  {
		  	goRegister: 1,
		    login: login,
		    name: name,
		    surname: surname,
		    phone: phone,
		    email: email,
		    password: password,
		    polzSogl: polzSogl
		  },
		  onAjaxSuccess
		);

	} else {

		alert("Заполните поля !")

	}

	 
	function onAjaxSuccess(data)
	{
	  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
	  alert("Вы успешно зарегистрировались и сейчас можете войти используя логин и пароль");
	  // Возвращаем пользователя в личный кабинет
       document.location.href='/';
	}

	

});


});