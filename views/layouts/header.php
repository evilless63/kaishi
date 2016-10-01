<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/template/css/main.css">
    <link rel="stylesheet" href="/template/css/reset.css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="/template/css/button.css">
    <!--[if lt IE 9]>
        <script src="bower/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="bower/css3-mediaqueries-js/css3-mediaqueries.js"></script>
    <![endif]-->
    <script>
        if (screen.width <= 800) {
            window.location = "m/index.html";
         }
    </script>
    <title>sushi</title>
</head>
<body>
    <header>
        <div class="topMenuWrap">
            <div class="container row toSpaceBetween">
                <div class="topMenu">
                    <ul class="row toSpaceBetween">
                        <li><a href="/delivery">Доставка и оплата</a></li>
                        <li><a href="/shares">Акции</a></li>
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