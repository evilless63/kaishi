<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/css/main.css">
    <link rel="stylesheet" href="/template/css/reset.css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="/template/css/button.css">
    <link rel="stylesheet" href="/template/js/slick/slick.css">
    <link rel="stylesheet" href="/template/js/slick/slick-theme.css">
    <script src="/template/js/jquery.js"></script>
    <script src="/template/js/slick/slick.js"></script>
    <!--[if lt IE 9]>
        <script src="bower/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="bower/css3-mediaqueries-js/css3-mediaqueries.js"></script>
    <![endif]-->
    <script>
    $(document).ready(function(){
        if (screen.width <= 800) {
           $('header').remove();
           $('footer').remove();
           $('.mobileHeader').css('display', 'flex');
           $('.mobileFooter').css('display', 'block');
           $('.page-buffer').css('padding-bottom', '60px');
           if($('.indexMobile').length > 0){
                $('main').remove();
                $('.indexMobile').css('display', 'block'); 
                $('.special').css('display', 'flex');
                $('head').append('<link rel="stylesheet" href="/template/css/m__main.css" />');
           }
           else if($('.sushiProfailWrapperMobile').length > 0){
                $('.sushiProfailWrapperDesktop').remove();
                $('main').remove();
                $('.catalogMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__sushi.css" />');
           }
           else if($('.actionMobile').length > 0){
                $('main').remove();
                $('.actionMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__actions.css" />');
           }
           else if($('.actionMoreMobile').length > 0){
                $('main').remove();
                $('.actionMoreMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__actions.css" />');
           }
           else if($('.chooseProucts').length > 0){
                $('main').remove();
                $('.chooseProucts').css('display', 'block');
                $('.topAlert').css('display', 'flex');
                $('head').append('<link rel="stylesheet" href="/template/css/m__cart.css" />');
           }
           else if($('.deliveryMobile').length > 0){
                $('main').remove();
                $('.deliveryMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__actions.css" />');
           }
           else if($('.thematicMobile').length > 0){
                $('main').remove();
                $('.thematicMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__thematic.css" />');
           }
           else if($('.thematicMoreMobile').length > 0){
                $('main').remove();
                $('.thematicMoreMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__thematic.css" />');
           }
           else if($('.reviewsMobile').length > 0){
                $('main').remove();
                $('.reviewsMobile').css('display', 'block');
                $('head').append('<link rel="stylesheet" href="/template/css/m__reviews.css" />');
           }
         } else {
            $('.sushiProfailWrapperMobile').remove();
         }
    });
        
    </script>
    <title>sushi</title>
</head>
<body>
    <div class="sidebarPopUpWrapper"></div>
    <div class="sidebarPopUp">
            <div class="productMenu">
                <ul>
                    <?php 
                   
                    if(isset($categories)){
                        $arrayAclass = array('sushi', 'inari', 'rolls', 'hotrolls', 'set', 'gunkan', 'zakuski', 'pizza', 'drink');
                        $count = 0;
                        foreach ($categories as $categoryItem): ?>
                        <li>
                            <a class="<?php echo $arrayAclass[$count]; ?>" href="/category/<?php echo $categoryItem['id']; ?>"
                                class="<?php if($categoryId === $categoryItem['id']){echo 'catalogActive';} ?>">                                                                                    
                                <?php echo $categoryItem['name']; ?>
                            </a>
                        </li>
                        <?php 
                        $count++ ;   
                        endforeach; 
                        echo "<li><a class=\"set\" href=\"/thematic\">Тематический ужин</a></li>";   
                    }  ?>               
                </ul>
            </div>
        </div>
    <header>
        <div class="topMenuWrap">
            <div class="container row toSpaceBetween">
                           <div class="topMenu">
                    <ul class="row toSpaceBetween">
                        <li><a href="/delivery">Доставка и оплата</a></li>
                        <li><a href="/actions">Акции</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                        <li><a href="/reviews">Отзывы</a></li>
                        <li><a href="/news">Новости</a></li>
                    </ul>
                </div>
                <div class="registerAndSearch">
                    <?php if(isset($_SESSION['user'])): ?>
                    <ul class="row toSpaceBetween alignBaseline">
                        <li><a href="/cabinet/">Привет, <?php echo $user['name']; ?></a></li>
                        &nbsp;<span>/</span>&nbsp;
                        <li><a href="/user/logout/">Выйти</a></li>&nbsp;
                        <input type="text" placeholder="Поиск">
                    </ul>   
                    <?php else: ?>    
                    <ul class="row toSpaceBetween alignBaseline">
                        <li id="login"><a href="#login">Вход</a></li>
                        &nbsp;<span>/</span>&nbsp;
                        <li id="registration"><a href="#registration">Регистрация</a></li>&nbsp;
                        <input type="text" placeholder="Поиск">
                    </ul>
                    <?php endif; ?>
                </div>  
            </div>
        </div>
        <div class="informationTopPath container row toSpaceBetween alignCenter">
            <div class="workInfo">
                <div class="phone">(846) 2030-454</div>
                <div class="workHours">
                    Работаем <span>с 9:00</span> до <span>00.00</span><br>
                    БЕЗ ВЫХОДНЫХ !
                </div>
            </div>
            <div class="logo">
                <a href="/"><img src="/template/images/logo.png" alt="Каиши суши"></a>
                <div class="line"></div>
                <p>Доставка в Самаре бесплатно</p>
            </div>
            <div class="cart">
                ВАША КОРЗИНА:<br>
                <span id="cart-count"><?php echo Cart::countItems(); ?></span> товаров<br>
                <?php echo $totalPrice;?> руб.<br>
                <a href="/cart" class="cart_button_top">Оформить</a>
            </div>
        </div>
    </header>
    <div class="mobileHeader">
        <div class="headerMenuIcon">
            <div class="headerMenuBurger"></div>
            <div class="headerMenuBurger"></div>
            <div class="headerMenuBurger"></div>
        </div>
        
        
        
        <div class="logo">
            <a href="/"><img src="/template/images/logo.png" alt="Каиши суши"></a>
        </div>
        
    </div>
    <div class="special">
        <div class="specialDesc">
            <div class="specialDescHeader">270-2-762</div>
            <div class="specialDescText">СКИДКИ НА ЛЮБИМЫЕ БЛЮДА ДО 50%!</div>
        </div>
    </div>
    <div class="topAlert">
        <span>Мин.заказ: 500 руб.</span>
        <span>Доставка: Бесплатно</span>
    </div>