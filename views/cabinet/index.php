<?php include ROOT . '/views/layouts/header.php'; ?>
<main>
        <div class="mainWrapLC container row toSpaceBetween">
            <div class="content lcContent">
                <h1 class="lcContentHeader">Личный кабинет</h1>
                <div class="lcContentRow">
                    <div class="lcContentBlock">
                        <img src="/template/images/icons/feedback__default.svg" alt="">
                        <div class="lcContentBlockDesc"><?php echo $user['name'];?></div>
                    </div>
                    <div class="lcContentBlock">
                        <img src="/template/images/icons/contacts__phone.svg" alt="">
                        <div class="lcContentBlockDesc"><?php echo $user['phone'];?></div>
                    </div>
                    <div class="lcContentBlock">
                        <img class="lcContentBlockImg" src="/template/images/icons/lc__countZakaz.png" alt="">
                        <div class="lcContentBlockDesc">кол-во заказов : 2</div>
                    </div>
                </div>
                <div class="lcContentTabs tabs">
                    <ul class="tabs__caption">
                        <li class="active">Мои заказы</li>
                        <li>Адреса и контакты</li>
                        <li>Настройки</li>
                    </ul>
                    <div class="tabs__content zakaz active">
                        <div class="zakazRow">
                            <div class="zakazRowNumber">Заказ # 12938738 от 12.07.2016</div>
                            <div class="zakazRowSpoiler spoiler" data-spoiler-link="1">
                                <img src="/template/images/icons/lc__arrowBottom.png" alt="">
                            </div>
                            <div class="zakazRowStatus">Завершен</div>
                            <div class="zakazRowSchedule">Оставить отзыв</div>
                        </div>
                        <div class="zakazRow">
                            <div class="zakazRowNumber">Заказ # 12938738 от 12.07.2016</div>
                            <div class="zakazRowSpoiler spoiler" data-spoiler-link="2">
                                <img src="/template/images/icons/lc__arrowBottom.png" alt="">
                            </div>
                            <div class="zakazRowStatus">Завершен</div>
                            <div class="zakazRowSchedule">Оставить отзыв</div>
                        </div>
                        <div class="spoilerContent spoiler-content" data-spoiler-link="1">
                            <div class="zakazRowSpoilerWrap">
                                <img src="/template/images/user/sushi/sushi.png" alt="">
                                <div class="zakazRowSpoilerWrapName">
                                </div>
                                <div class="zakazRowSpoilerWrapWeight">
                                    Веса нет
                                </div>
                                <div class="zakazRowSpoilerWrapCount">
                                    2 шт
                                </div>
                                <div class="zakazRowSpoilerWrapCost">
                                    460 р.
                                </div>
                                <div class="zakazRowSpoilerWrapCart">
                                    В корзину
                                </div>
                            </div>
                            <div class="zakazRowSpoilerWrap">
                                <img src="/template/images/user/sushi/sushi.png" alt="">
                                <div class="zakazRowSpoilerWrapName">
                                    Канада
                                </div>
                                <div class="zakazRowSpoilerWrapWeight">
                                    450 гр
                                </div>
                                <div class="zakazRowSpoilerWrapCount">
                                    2 шт
                                </div>
                                <div class="zakazRowSpoilerWrapCost">
                                    460 р.
                                </div>
                                <div class="zakazRowSpoilerWrapCart">
                                    В корзину
                                </div>
                            </div>
                            <div class="zakazRowSpoilerDesc">
                                <div class="zakazRowScheduleDesc">Повторить заказ</div>
                                <span>Количество персон: 3</span>
                                <span>АДРЕС ДОСТАВКИ: г. Самара, Авроры ул, д. 72, кв. 97, подъезд № 1, этаж. 7 1 подъезд   
                                домофон 97</span>
                                <span>Номер телеона: +7 9170373664</span>
                                <span>Оплата наличными курьеру<br>  
                                Начислено 22 бонусов<br>
                                Списано 0 бонусов<br>    </span>
                                <span>ОБЩАЯ СТОИМОСТЬ ЗАКАЗА: 560 руб.</span>
                            </div>
                        </div>
                        <div class="spoilerContent spoiler-content" data-spoiler-link="2">
                            <div class="zakazRowSpoilerWrap">
                                <img src="/template/images/user/sushi/sushi.png" alt="">
                                <div class="zakazRowSpoilerWrapName">
                                    Канада
                                </div>
                                <div class="zakazRowSpoilerWrapWeight">
                                    450 гр
                                </div>
                                <div class="zakazRowSpoilerWrapCount">
                                    2 шт
                                </div>
                                <div class="zakazRowSpoilerWrapCost">
                                    460 р.
                                </div>
                                <div class="zakazRowSpoilerWrapCart">
                                    В корзину
                                </div>
                            </div>
                            <div class="zakazRowSpoilerWrap">
                                <img src="/template/images/user/sushi/sushi.png" alt="">
                                <div class="zakazRowSpoilerWrapName">
                                    Канада
                                </div>
                                <div class="zakazRowSpoilerWrapWeight">
                                    450 гр
                                </div>
                                <div class="zakazRowSpoilerWrapCount">
                                    2 шт
                                </div>
                                <div class="zakazRowSpoilerWrapCost">
                                    460 р.
                                </div>
                                <div class="zakazRowSpoilerWrapCart">
                                    В корзину
                                </div>
                            </div>
                            <div class="zakazRowSpoilerDesc">
                                <div class="zakazRowScheduleDesc">Повторить заказ</div>
                                <span>Количество персон: 3</span>
                                <span>АДРЕС ДОСТАВКИ: г. Самара, Авроры ул, д. 72, кв. 97, подъезд № 1, этаж. 7 1 подъезд   
                                домофон 97</span>
                                <span>Номер телеона: +7 9170373664</span>
                                <span>Оплата наличными курьеру<br>  
                                Начислено 22 бонусов<br>
                                Списано 0 бонусов<br>    </span>
                                <span>ОБЩАЯ СТОИМОСТЬ ЗАКАЗА: 560 руб.</span>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__content zakaz">
                        <div class="adressRow">
                            <span>АДРЕС ДОСТАВКИ: г. Самара, Авроры ул, д. 72, кв. 97, подъезд № 1, этаж. 7 1 подъезд  
                             домофон 97</span>
                             <div class="adressRowEdit">
                                <img src="/template/images/icons/lc__addresEdit.png" alt="">
                             </div>
                             <div class="adressRowDelete">
                                <img src="/template/images/icons/misc__delete.svg" alt="">
                             </div>
                        </div>
                        <div class="row">
                            <div class="adressAdd">Добавить адрес</div>
                        </div>
                    </div>
                    <div class="tabs__content zakaz">
                        <div class="settingsRow name">
                            <div class="settingsName">Имя</div>
                            <input type="text" value="<?php echo $user['name'];?>" id="settingsNameInput" name="settingsNameInput">
                        </div>
                        <div class="settingsRow surname">
                            <div class="settingsSurname">Фамилия</div>
                            <input type="text" value="<?php echo $user['surname'];?>" id="settingsSurnameInput" name="settingsSurnameInput">
                        </div>
                        <div class="settingsRow bday">
                            <div class="settingsBday">День рождения</div>
                            <input type="text" value="" id="settingsBdayInput" name="settingsBdayInput">
                        </div>
                        <div class="settingsRow sms">
                            <div class="settingsSms">Принимать SMS рассылки</div>
                            <input type="checkbox" value="checked" id="settingsSmsInput" name="settingsSmsInput">
                        </div>
                        <div class="settingsRow mail">
                            <div class="settingsMail">Email адрес</div>
                            <input type="text" value="<?php echo $user['email'];?>" id="settingsMailInput" name="settingsMailInput">
                        </div>
                        <div class="settingsRow mailRassylka">
                            <div class="settingsMailRassylka">Получать Email рассылку</div>
                            <input type="checkbox" value="checked" id="settingsMailRassylkaInput" name="settingsMailRassylkaInput">
                        </div>
                        <div class="row">
                            <div class="passwordEdit"><a href="/cabinet/edit">Сменить пароль</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>