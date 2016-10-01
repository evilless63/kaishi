window.moffConfig = {
	// Website CSS breakpoints.
	// Default values from Twitter Bootstrap.
	// No need to set xs, because of Mobile first approach.
	breakpoints: {
		sm: 640,
		md: 992,
		lg: 1200
	},
	loadOnHover: true,
	cacheLiveTime: 2000
};

$(document).ready(function(){
	$( ".themeSetsBlockImageCover" ).hover(
	  function() {
	    $( this ).children("span").css( "display", "block" );
	  }, function() {
	    $( this ).children("span").css( "display", "none" );
	  }
	);

	$( "#login" ).click(
		function(){
			$( ".loginWrapper" ).css( "display", "block" );	
		});
	
	$(".closeModalLogin").click(
		function(){
			$(".loginWrapper").css("display", "none");
		});	
	
	$( ".closeModalRegistration" ).click(
		function(){
			$( ".registrationWrapper" ).css( "display", "none" );
		});
	
	$( "#registration" ).click(
		function(){
			$( ".registrationWrapper" ).css( "display", "block" );	
		});

	$( ".registrationLink").click(
		function(){
			$(".loginWrapper").css("display", "none");
			$( ".registrationWrapper" ).css( "display", "block" );
		});

//Открываем профайл товара	

	$( ".sushiopenProfail" ).click(
		function(){
			var productId = $(this).attr('data-id');
			$.ajax({
			    url: "/product/" + productId,
			    type: "get",
			    data: {},
			    success: function(response){
			    	var data = JSON.parse(response);
			        $('.sushiProfailArea').children('h3').html(data.name);
			        $('.productPrice').html(data.price);
			        $('.productDescription').html(data.description);
			        $(".productModalImage").attr('src', '/upload/images/products/' + data.id + '.jpg');
			    },
			    // dataType: "json"
			});

			$( ".sushiProfailWrapper" ).css( "display", "block" );	
		});

//Открываем профайл товара	

		// $( ".rowProductPaymentTocart" ).click(
		// function(){
		// 	$( ".sushiProfailWrapper" ).css( "display", "block" );	
		// });
		
	$( ".closeModal" ).click(
		function(){
			$( ".sushiProfailWrapper" ).css( "display", "none" );
		});	
	
	$( ".sushiBlockToCatalog" ).click(
		function(){
			$( ".sushiProfailWrapper" ).css( "display", "none" );
		});		
	
	$(".add-to-cart").click(
		function(){
			alert("Товар добавлен в корзину !");
			$( ".sushiProfailWrapper" ).css( "display", "none" );
		});	

	// $(".addCommentButton").click(
	// 	function(){
	// 		if($(".addCommentField").hasClass("hidden")){
	// 			$(this).removeClass("hidden").addClass("block");
	// 		} else {
	// 			$(this).removeClass("block").addClass("hidden");
	// 		}
	// 	});

	$(".addCommentButton").click(function(){
		$(".addCommentField").css("display", "block");
	});	


	$('.cartPaymentMethodsBlock').click(function(){

		$('.cartPaymentMethodsBlock').removeClass('actionBuySposob');
		$(this).addClass('actionBuySposob');

	});


	//cart page input value

	// $(".cartProductsBlockCountMinus").click(function(){
	// 	var inputValue = $(this).parent("cartProductsBlockCount").find("cartProductsBlockInputcount").val();
	// 	if(inputValue > "1") {
	// 		inputValue = inputValue --;
	// 	} else {
	// 		alert ("Выбрано минимальное количество товара !");
	// 	}
	// })


$('.ContentDescPromoBlockTocart').children('span').click(function(){

	var userName = $('.registrationFormName').val();
	var userSurname = $('.registrationFormSurname').val();
	var userAdress = $('.registrationFormAdress').val();
	var userPhone = $('.registrationFormPhone').val();
	var userComment = $('.addCommentField').val();
	var userAdressDop = $('#registrationFormTextarea').val();
	var userPayMethod = $('.actionBuySposob').html();
	var orderSumm = $('.orderSumm').html();

	if (userName !=="" && userSurname !== "" && userAdress !=="" && userPhone !== "" && userPayMethod !== "" ) {

		$.post(
		  "/cart/Addproducts",
		  {
		  	goOrder: 1,
		    userName: userName,
		    userSurname: userSurname,
		    userAdress: userAdress,
		    userPhone: userPhone,
		    userComment: userComment,
		    userAdressDop: userAdressDop,
		    userPayMethod: userPayMethod,
		    orderSumm: orderSumm
		  },
		  onAjaxSuccess
		);

	} else {

		alert("Заполните поля !")

	}

	 
	function onAjaxSuccess(data)
	{
	  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
	  alert("Заказ успешно создан, вам на телефон отправлен номер заказа и контрольная информация");
	  // Возвращаем пользователя в корзину
      location.reload();
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
		  "user/register",
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


//Вход пользователя


$('.loginFormSpan').click(function(){

	var email = $('.loginFormEmail').val();
	var password = $('.loginFormPass').val();

	$.post(
	  "user/login",
	  {
	  	gologin: 1,
	    email: email,
	    password: password
	  },
	  function(data){
	  	alert("Вы успешно вошли");
	  	document.location.href='/';
	  }
	);

});


$('#contenInput').click(function(){

	var cartPaymentBlockCartnumber1 = $('#cartPaymentBlockCartnumber1').val();
	var cartPaymentBlockCartnumber2 = $('#cartPaymentBlockCartnumber2').val();
	var cartPaymentBlockCartnumber3 = $('#cartPaymentBlockCartnumber3').val();
	var cartPaymentBlockCartnumber4 = $('#cartPaymentBlockCartnumber4').val();
	var cartPaymentBlockCartnumber5 = $('#cartPaymentBlockCartnumber5').val();
	var cartPaymentBlockCartnumber6 = $('#cartPaymentBlockCartnumber6').val();

	$.post(
	  "/cart/Getcashcard",
	  {
	  	getCashCard: 1,
	    cartPaymentBlockCartnumber1: cartPaymentBlockCartnumber1,
	    cartPaymentBlockCartnumber2: cartPaymentBlockCartnumber2,
	    cartPaymentBlockCartnumber3: cartPaymentBlockCartnumber3,
	    cartPaymentBlockCartnumber4: cartPaymentBlockCartnumber4,
	    cartPaymentBlockCartnumber5: cartPaymentBlockCartnumber5,
	    cartPaymentBlockCartnumber6: cartPaymentBlockCartnumber6
	  },
	  function (data){
	  	alert(data);
	  }
	);

});

//Обработка ввода номера скидочной карточки

// $( "#cartPaymentBlockCartnumber1" ).change(function(){
//   var cartPaymentBlockCartnumber1 = $('#cartPaymentBlockCartnumber1').val();
// });

// $( "#cartPaymentBlockCartnumber2" ).change(function(){
//   var cartPaymentBlockCartnumber2 = $('#cartPaymentBlockCartnumber2').val();
// });

// $( "#cartPaymentBlockCartnumber3" ).change(function(){
//   var cartPaymentBlockCartnumber3 = $('#cartPaymentBlockCartnumber3').val();
// });

// $( "#cartPaymentBlockCartnumber4" ).change(function(){
//   var cartPaymentBlockCartnumber4 = $('#cartPaymentBlockCartnumber4').val();
// });

// $( "#cartPaymentBlockCartnumber5" ).change(function(){
//   var cartPaymentBlockCartnumber5 = $('#cartPaymentBlockCartnumber5').val();
// });

// $( "#cartPaymentBlockCartnumber6" ).change(function(){
//   var cartPaymentBlockCartnumber6 = $('#cartPaymentBlockCartnumber6').val();



// 		$.post(
// 		  "/cart/Getcashcard",
// 		  {
// 		  	getCashCard: 1,
// 		    cartPaymentBlockCartnumber1: cartPaymentBlockCartnumber1,
// 		    cartPaymentBlockCartnumber2: cartPaymentBlockCartnumber2,
// 		    cartPaymentBlockCartnumber3: cartPaymentBlockCartnumber3,
// 		    cartPaymentBlockCartnumber4: cartPaymentBlockCartnumber4,
// 		    cartPaymentBlockCartnumber5: cartPaymentBlockCartnumber5,
// 		    cartPaymentBlockCartnumber6: cartPaymentBlockCartnumber6
// 		  },
// 		  function (data){
// 		  	alert("ALL OK");
// 		  }
// 		);

		
// });





});

(function($) {
$(function() {

  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });

});
})(jQuery);


//MOBILE


$(document).ready(function(){
	$( ".formActionCartNext").click(
		function(){
			$(".chooseProucts").css("display", "none");
			$(".topAlert").css("display", "none");
			
			$( ".choosePayment" ).css( "display", "block" );
		});
	
	$( ".formActionCartZakaz").click(
		function(){
			alert("Товар успешно заказан !");
		});	
});	







