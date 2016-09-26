<?php include ROOT . '/views/layouts/header.php'; ?>
<main>
        <div class="mainWrap mainWrapCart mainWrapAkcii container row toSpaceBetween">
            <div class="content">
                <h1 class="headerContent">Оформление заказа</h1>
                <div class="row">
                    <div class="cartProductsBlock">
                        <?php 
                        if(isset($_SESSION['products'])){
                           var_dump($_SESSION['products']); 
                        }
                        ?>
                        <?php if ($productsInCart): ?>
                            <?php foreach ($products as $product): ?>
                                <div class="row cartProductsBlockContent">
                                    <img class="cartProductsBlockImg" src="template/images/user/sushi/sushiImg.jpg" alt="">
                                    <div class="cartProductsBlockName"><?php echo $product['name'];?></div>
                                    <div class="cartProductsBlockCount row">
                                        <a href="/cart/minus/<?php echo $product['id'];?>" class="cartProductsBlockCountMinus">
                                            <img src="template/images/icons/misc__minus.svg" alt="">
                                        </a>
                                        <input type="text" class="cartProductsBlockInputcount" value="<?php echo $productsInCart[$product['id']];?>">
                                        <a href="/cart/plus/<?php echo $product['id'];?>" class="cartProductsBlockPlus">
                                            <img src="template/images/icons/misc__plus.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="cartProductsBlockCost"><?php echo $product['price'];?></div>
                                    <div class="cartProductsBlockDelete">
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <img src="template/images/icons/misc__delete.svg" alt="">
                                        </a> 
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="cartProductsBlockComment">
                                    <div class="addCommentButton">
                                        Добавить комментарий к заказу
                                    </div>
                                    <textarea rows="5" name="userComment" cols="60" class="addCommentField" placeholder="Комментарий к заказу..."></textarea>
                                </div>  
                                <div class="cartProductsBlockComment">
                                    <a class="cartProductsBlockCommentBacktomenu" href="/">Вернуться в меню</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <p>Корзина пуста</p>
                            
                            <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                        <?php endif; ?>

                    </div>
                    <div class="cartPaymentBlock">
                        <div class="cartPaymentBlockDesc">
                        <?php if ($productsInCart): ?>    
                            <span>Сумма заказа: <?php echo $totalPrice;?>р.</span>
                        <?php else: ?> 
                            <span>Нет товаров в корзине</span>   
                        <?php endif; ?>
                            <span>Стоимость доставки: бесплатно</span>
                            <span>номер скидочной карты</span>
                        </div>
                        <div class="cartPaymentBlockCartnumber">
                            <input type="text" id="cartPaymentBlockCartnumber1" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                            <input type="text" id="cartPaymentBlockCartnumber2" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                            <input type="text" id="cartPaymentBlockCartnumber3" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                            <input type="text" id="cartPaymentBlockCartnumber4" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                            <input type="text" id="cartPaymentBlockCartnumber5" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                            <input type="text" id="cartPaymentBlockCartnumber6" maxlength="1" class="cartPaymentBlockCartnumberInput" value="">
                   <!--          <div id="contenInput">GO</div> -->
                        </div>
                        <div class="cartPaymentBlockItogo">
                        <?php if ($productsInCart): ?>
                            Итого: <span class="orderSumm"><?php echo $totalPrice;?></span> р.
                        <?php else: ?> 
                            <span>Нет товаров в корзине</span>      
                        <?php endif; ?>    
                        </div>
                        <div class="cartPaymentBlockMisc">
                            <span>В ваш заказ добавлено 2 бесплатных набора для суши.</span>
                            <span class="question">Нужны дополнительные наборы?</span>
                            <div class="cartPaymentBlockMiscRow">
                                <img class="cartPaymentBlockMiscImg" src="template/images/user/sushi/sushi.png" alt="">
                                <div class="cartPaymentBlockMiscCost">
                                    39 р.
                                </div>
                                <div class="cartPaymentBlockMiscBuyButton">Купить</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="cartRow blackBackground">
                    <div class="cartPaymentRegistration">
                        <h2 class="headerContent">Оформление</h2>
                        <form id="cartRegistrationForm" class="cartRegistrationForm" action="">
                            <input type="text" class="registrationFormName" name="registrationFormName" placeholder="*Ваше имя" value="<?php echo $user['name'];?>" required>
                            <input type="text" class="registrationFormSurname" name="registrationFormSurname" placeholder="*Ваша Фамилия" value="<?php echo $user['surname'];?>"  required>
                            <input type="text" class="registrationFormPhone" name="registrationFormPhone" placeholder="*Телефон" value="<?php echo $user['phone'];?>" required>
                            <input type="text" class="registrationFormAdress" name="registrationFormAdress" placeholder="*Адрес" required>
                            <textarea name="registrationFormTextarea" id="registrationFormTextarea" cols="30" rows="3" placeholder="Добавить примечание к адресу"></textarea>
                        </form>
                    </div>
                    <div class="cartPaymentMethods">
                        <h2 class="headerContent">Способы оплаты</h2>
                            <div class="row">
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsCache">Наличными курьеру</div>
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsCart">Банковской картой</div>
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsYandex">Яндекс деньги</div>
                            </div>
                            <div class="row">
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsQiwi">Qiwi</div>
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsWebmoney">Webmoney</div>
                                <div class="cartPaymentMethodsBlock cartPaymentMethodsCourercart">Картой курьеру</div>
                            </div>
                            <div class="row">
                                <div class="cartPaymentMethodsBlockSdacha ">С какой суммы требуется сдача ?</div>
                                <div class="cartPaymentMethodsBlockSdacha "><input type="text" id="cartPaymentMethodsSdachaInput" /></div>
                                <div class="cartPaymentMethodsBlockSdacha "><label for="cartPaymentMethodsSdachaCheckbox">Без сдачи</label><input type="checkbox" id="cartPaymentMethodsSdachaCheckbox" /></div>
                            </div>
                            <div class="row to-right">
                                <div class="ContentDescPromoBlockTocart">
                                    <span>Заказать</span>
                                </div>
                            </div>
                    </div>
                </div>
                <h2 class="headerContent center">К вашему заказу предлагаем</h2>
                <div class="aditionallyWrap cartRow">
                    <img class="cartLeftArrow" src="template/images/icons/misc__leftArrow.svg">
                    <div class="aditionallyBlocks cartRow">
                        <div class="sushiBlock">
                            <img src="template/images/user/sushi/sushiImg.jpg" alt="Суши">
                            <h2 class="sushiBlockHeader">Суши кунсей</h2>
                            <div class="sushiBlockDesc">Рис, лосось х/к 35 г.</div>
                            <div class="sushiBlockGet">
                                <div class="sushiBlockGetCost">96 р.</div>
                                <div class="sushiBlockGetBusket">
                                    В корзину
                                </div>
                            </div>
                        </div>
                        <div class="sushiBlock">
                            <img src="template/images/user/sushi/sushiImg.jpg" alt="Суши">
                            <h2 class="sushiBlockHeader">Суши кунсей</h2>
                            <div class="sushiBlockDesc">Рис, лосось х/к 35 г.</div>
                            <div class="sushiBlockGet">
                                <div class="sushiBlockGetCost">96 р.</div>
                                <div class="sushiBlockGetBusket">
                                    В корзину
                                </div>
                            </div>
                        </div>
                        <div class="sushiBlock">
                            <img src="template/images/user/sushi/sushiImg.jpg" alt="Суши">
                            <h2 class="sushiBlockHeader">Суши кунсей</h2>
                            <div class="sushiBlockDesc">Рис, лосось х/к 35 г.</div>
                            <div class="sushiBlockGet">
                                <div class="sushiBlockGetCost">96 р.</div>
                                <div class="sushiBlockGetBusket">
                                    В корзину
                                </div>
                            </div>
                        </div>
                        <div class="sushiBlock">
                            <img src="template/images/user/sushi/sushiImg.jpg" alt="Суши">
                            <h2 class="sushiBlockHeader">Суши кунсей</h2>
                            <div class="sushiBlockDesc">Рис, лосось х/к 35 г.</div>
                            <div class="sushiBlockGet">
                                <div class="sushiBlockGetCost">96 р.</div>
                                <div class="sushiBlockGetBusket">
                                    В корзину
                                </div>
                            </div>
                        </div>
                        <div class="sushiBlock">
                            <img src="template/images/user/sushi/sushiImg.jpg" alt="Суши">
                            <h2 class="sushiBlockHeader">Суши кунсей</h2>
                            <div class="sushiBlockDesc">Рис, лосось х/к 35 г.</div>
                            <div class="sushiBlockGet">
                                <div class="sushiBlockGetCost">96 р.</div>
                                <div class="sushiBlockGetBusket">
                                    В корзину
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="cartRightArrow" src="template/images/icons/misc__rightArrow.svg">
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>