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

	// $('.rating').each(function(){
	// 	if ($(this).text() == "1"){
	// 		$(this).empty();
	// 		$(this).append('<span class="colored">★</span><span>★</span><span>★</span><span>★</span><span>★</span>');	
	// 	} else if ($(this).text() == "2"){
	// 		$(this).empty();
	// 		$(this).append('<span class="colored">★</span class="colored"><span>★</span><span>★</span><span>★</span><span>★</span>');
	// 	} else if ($(this).text() == "3") {
	// 		$(this).empty();
	// 		$(this).append('<span class="colored">★</span><span class="colored">★</span><span class="colored">★</span><span>★</span><span>★</span>');	
	// 	} else if ($(this).text() == "4") {
	// 		$(this).empty();
	// 		$(this).append('<span class="colored">★</span><span class="colored">★</span><span class="colored">★</span><span class="colored">★</span><span>★</span>');
	// 	} else if ($(this).text() == "5") {
	// 		$(this).empty();
	// 		$(this).append('<span class="colored">★</span><span class="colored">★</span><span class="colored">★</span><span class="colored">★</span><span class="colored">★</span>');	
	// 	}
	// });



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

	$( ".sushiopenProfail, .sushiBlockImage" ).click(
		function(){
			var productId = $(this).attr('data-id');
			$.ajax({
			    url: "/product/" + productId,
			    type: "post",
			    success: function(response){
			    	var data = JSON.parse(response);
			    	if(data.product_type == 'roll') {
			    		if (getDayName() == "Monday") {
			    			if(data.price_action.length > 0) {
			    				data.price = data.price_action;	
			    			} 	
			    		}
			    		$('.tabs__contentBuyBlock').html(' <img src="/template/images/icons/mainMenu__rolls.svg" alt="">'+
                        '<span>*</span>'+
                        '<span>8</span>'+
                        '<span>=</span>'+
                        '<span class="productPrice">'+data.price+'<span class="min"> р</span></span>');
			    	} else {
			    		$('.tabs__contentBuyBlock').html('<span class="productPrice">'+data.price+'<span class="min"> р</span></span>');
			    	}
			        $('.sushiProfailArea').children('h3').html(data.name);
			        $('.productDescription').html(data.description);
			        $(".productModalImage").attr('src', '/upload/images/products/' + data.id + '.jpg');
			        $('.sushiBlockGetBusketProfail').each(function(){
			           $(this).attr('data-id', data.id); 
			        });
			    },
			    // dataType: "json"
			});

			$( ".sushiProfailWrapper" ).css( "display", "block" );	
		});

function getDayName(){
	var d = new Date();
	var weekday = new Array(7);
	weekday[0]=  "Sunday";
	weekday[1] = "Monday";
	weekday[2] = "Tuesday";
	weekday[3] = "Wednesday";
	weekday[4] = "Thursday";
	weekday[5] = "Friday";
	weekday[6] = "Saturday";

	var day = weekday[d.getDay()];
	return day;
}

//Открываем профайл товара	

		$( ".rowProductPaymentTocart" ).click(
		function(){
			$( ".sushiProfailWrapper" ).css( "display", "block" );	
		});
		
	$( ".closeModal" ).click(
		function(){
			$( ".sushiProfailWrapper" ).css( "display", "none" );
		});	
	
	$( ".sushiBlockToCatalog" ).click(
		function(){
			$( ".sushiProfailWrapper" ).css( "display", "none" );
		});		
	
	// $(".add-to-cart").click(
	// 	function(){
	// 		alert("Товар добавлен в корзину !");
	// 		$( ".sushiProfailWrapper" ).css( "display", "none" );
	// 	});	

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

//Повторить заказ из кабинета пользователя
$('.zakazRowScheduleDesc').click(function(){
	var id = [];
	var i = 0;

	$(this).parent('.zakazRowSpoilerDesc').siblings('.zakazRowSpoilerWrap').each(function(){
		id.push($(this).children('.add-to-cart').attr('data-id'));
	});

	for(i; i < id.length; i++) {
		$.post("/cart/addAjax/"+id[i], {}, function (data) {
	        $("#cart-count").html(data);
	    });
	}
	
	alert("Товары успешно добавлены в корзину, вы будете перенаправлены в оформление заказа.");
	window.location.href = "/cart";
});

//Заказ тематического набора
$('.ContentDescPromoBlockTocartThematic').click(function(){
	var id = [];
	var i = 0;

	$('.ContentDescPromoBlock').each(function(){
		id.push($(this).attr('data-id'));
	});

	for(i; i < id.length; i++) {
		$.post("/cart/addAjax/"+id[i], {}, function (data) {
	        $("#cart-count").html(data);
	    });
	}
	
	alert("Тематический набор успешно добавлен в корзину, вы будете перенаправлены в оформление заказа.");
	window.location.href = "/cart";
});

//Оставить отзыв из личного кабинета

    $('.zakazRowSchedule').click(function () {

        $('.feedbackLCcontent').css('display', 'flex');
        var heightR = $(document).height();// высота экрана
        var widthR = $(window).width();// ширина экрана

        $('.feedbackLCwrapper').css({'display': 'block', 'width': widthR, 'height': heightR});

        $('.feedbackLCcontent').css({
            position: 'absolute',
            left: ($(document).width() - $('.feedbackLCcontent').outerWidth()) / 2,
            top: ($(document).height() - $('.feedbackLCcontent').outerHeight()) / 2
        });

        $('.feedbackLCsend').click(function () {
            var text = $('.feedbackLCtext').val();
            var mark = $('.feedbackLCmark').val();

            if (text.length > 0 && mark.length > 0) {

                $.post(
                        "/feedback/addfeedback",
                        {
                            text: text,
                            mark: mark
                        },
                        function onAjaxSuccess(data)
                        {
                            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
                            alert(data);
                            // Возвращаем пользователя в корзину
                            // location.reload();
                        }
                );

            } else {

                alert("Заполните поля !");

            }
        });

    });

$(document).mouseup(function(e){ // событие клика по веб-документу
	var div = $(".feedbackLCcontent"); // тут указываем ID элемента
	if (!div.is(e.target) // если клик был не по нашему блоку
	    && div.has(e.target).length === 0) { // и не по его дочерним элементам
		div.hide(); // скрываем его
		$('.feedbackLCwrapper').css('display', 'none');
	}
});


    
// Обработка ввода адреса в кабинете пользователя
    $('.adressAdd').click(function () {
        var adress = $('.addAdressField').val();
        if (adress.length > 0) {
            var data = {adress: adress};
            $.ajax({
                url: '/adress/addadress/',
                type: 'post',
                data: data,
                success: function (data) {
                    alert(data);
                    window.location.href = "/cabinet";
                }
            });
        }

    });

// Обработка удаления адреса в кабинете пользователя
    $('.adressRowDelete').click(function () {
        var id = $(this).attr('id');
        var data = {id: id};
        $.ajax({
            url: '/adress/deleteadress/',
            type: 'post',
            data: data,
            success: function (data) {
                alert(data);
                window.location.href = "/cabinet";
            }
        });
    });

    $('.adressActive').click(function () {
        var id = $('input:checked').attr('id');
        var data = {id: id};
        $.ajax({
            url: '/adress/setactiveadress/',
            type: 'post',
            data: data,
            success: function (data) {
                alert(data);
                window.location.href = "/cabinet";
            }
        });
    });
//Дополнительные товары в виде карусели на страниы корзины 
$('.aditionallyBlocks').slick({
  arrows: true,
  // infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1
}); 


//Обработка ввода номера скидочной карточки

    $('#cartPaymentBlockCartnumber6').change(function () {

        if ($('.orderSumm').length = 0) {
            alert("В корзине нет товаров !")

        } else {
            var CardNum1 = $('#cartPaymentBlockCartnumber1').val();
            var CardNum2 = $('#cartPaymentBlockCartnumber2').val();
            var CardNum3 = $('#cartPaymentBlockCartnumber3').val();
            var CardNum4 = $('#cartPaymentBlockCartnumber4').val();
            var CardNum5 = $('#cartPaymentBlockCartnumber5').val();
            var CardNum6 = $('#cartPaymentBlockCartnumber6').val();

            var card = CardNum1 + CardNum2 + CardNum3 + CardNum4 + CardNum5 + CardNum6;
            var data = {card: card};

            $.ajax({
                url: "/card/cardcheck",
                type: "post",
                data: data,
                success: function(data) {
                    if (data == false) {
                        alert('Карта указана неверно, уточните у администратора сайта');
                    } else {
                        $('.cartPaymentBlockItogo').prepend('<span>Скидка с учетом карточки:</span>');
                        $('.orderSumm').empty();
                        $('.orderSumm').text(data);
                    }
                }
            });
        }
    });

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
			$(".choosePayment").css( "display", "block" );
		});

	$( ".formActionCartPrev").click(
		function(){
			$(".chooseProucts").css("display", "block");
			$(".topAlert").css("display", "flex");
			$(".choosePayment").css( "display", "none" );
		});

	$('.headerMenuIcon').click(
		function(){
			$('.sidebarPopUp').toggle();	
			$('.sidebarPopUpWrapper').toggle();
		});	
});	







