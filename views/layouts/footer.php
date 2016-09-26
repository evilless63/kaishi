    <div class="page-buffer"></div>
</div>

<footer>
        <div class="footerContainer container">
            <div class="footerMenu">
                <div class="footerMenuFood footerMenuBlock">
                    <div class="footerMenuBlockHeader">
                        Меню
                    </div>
                    <div class="footerMenuBlockContent">
                        <ul>
                            <li><a href="">Суши</a></li>
                            <li><a href="">Инари суши</a></li>
                            <li><a href="">Горячие роллы</a></li>
                            <li><a href="">Сеты</a></li>
                            <li><a href="">Гунканы</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Закуски</a></li>
                            <li><a href="">Пицца</a></li>
                            <li><a href="">Напитки</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footerMenuSupport footerMenuBlock">
                    <div class="footerMenuBlockHeader">
                        Поддержка
                    </div>
                    <div class="footerMenuBlockContent">
                        <ul>
                            <li><a href="akcii.html">Акции</a></li>
                            <li><a href="otzyvy.html">Отзывы</a></li>
                            <li><a href="kontakty.html">Контакты</a></li>
                            <li><a href="vakansii.html">Вакансии</a></li>
                            <li><a href="dostavka.html">Доставка и вакансии</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footerMenuPartners footerMenuBlock">
                    <div class="footerMenuBlockHeader">
                        Партнерам
                    </div>
                    <div class="footerMenuBlockContent">
                        <ul>
                            <li><a href="">Распространение рекламных материалов</a></li>
                            <li><a href="">Партнерская программа</a></li>
                            <li><a href="">Франчайзинг</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footerSocial">
                <span>(917) 2030 454</span>
                <div class="socialLinksContainer">
                    <a href="" class="socialLinks"><img src="/template/images/icons/social__instagram.svg" alt="social__instagram" title="Наша группа в Инстаграм"></a>
                    <a href="" class="socialLinks"><img src="/template/images/icons/social__vk.svg" alt="social__vk" title="Наша группа в Вконтакте"></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="loginWrapper">
        <div class="loginArea">
            <div class="closeModalLogin">
                <img src="/template/images/icons/close.png" alt="Закрыть окно">
            </div>
            <form action="" id="loginForm" class="loginForm">
                <h3 class="loginFormHeader">Вход</h3>
                <input type="text" class="loginFormEmail" name="loginFormEmail" id="loginFormEmail" placeholder="E-mail" required>
                <input type="text" class="loginFormPass" id="loginFormPass" placeholder="Пароль" required>
                <span>Или через мобильный телефон</span>
                <input type="text" class="loginFormPhone" id="loginFormPhone" placeholder="Номер телефона">
                <div class="loginFormMisc">
                    <span>Забыли пароль ?</span>
                    <div class="loginFormButton">
                        <span class="loginFormSpan">Вход</span>
                    </div>
                </div>
                <div class="loginFormAnother">
                    <span>Нет аккаунта ? </span><span class="registrationLink">Зарегистрируйтесь !</span>
                </div>
            </form>
            <div class="loginSocial">
                <span>Войти через Ваш аккаунт</span>
                <span>в социальной сети</span>
                <div class="loginSocialVk">Вконтакте</div>
                <div class="loginSocialOdn">Одноклассники</div>
                <div class="loginSocialFb">Facebook</div>
            </div>
        </div>
    </div>
    <div class="registrationWrapper">
        <div class="registrationArea">
            <div class="closeModalRegistration">
                <img src="/template/images/icons/close.png" alt="Закрыть окно">
            </div>
            <form id="registrationForm" class="registrationForm" action="">
                <h3 class="registrationFormHeader">
                    Регистрация
                </h3>
                <input type="text" class="registrationFormLogin" name="registrationFormLogin" placeholder="*Логин" required>
                <input type="text" class="registrationFormName" name="registrationFormName" placeholder="*Ваше имя" required>
                <input type="text" class="registrationFormSurname" name="registrationFormSurname" placeholder="*Ваша Фамилия" required>
                <input type="text" class="registrationFormPhone" name="registrationFormPhone" placeholder="*Телефон" required>
                <input type="text" class="registrationFormEmail" name="registrationFormEmail" placeholder="*E-mail" required>
                <input type="text" class="registrationFormPassword" name="registrationFormPassword" placeholder="*Пароль" required>
                <div class="polzSoglWrapper">
                    <input type="checkbox" name="polzSogl" id="polzSogl" class="polzSogl"><label for="polzSogl">Я принимаю</label>
                </div>
                <a href="#" class="polzSoglLink">Условия пользовательского соглашения</a>
                <div class="registrationFormSubmit">
                <span class="registrationFormSubmitButton">Регистрация</span></div>
            </form>
            <div class="loginSocial">
                <span>Войти через Ваш аккаунт</span>
                <span>в социальной сети</span>
                <div class="loginSocialVk">Вконтакте</div>
                <div class="loginSocialOdn">Одноклассники</div>
                <div class="loginSocialFb">Facebook</div>
            </div>
        </div>
    </div>
    <script src="/template/js/jquery.js"></script>
    <script src="/template/js/jquery.cycle2.min.js"></script>
    <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/jquery.scrollUp.min.js"></script>
    <script src="/template/js/price-range.js"></script>
    <script src="/template/js/jquery.prettyPhoto.js"></script>
    <script src="/template/js/jquery-spoiler-1.3.0/jquery.spoiler.min.js"></script>
    <script src="/template/js/main.js"></script>
    <script src="/template/js/app.js"></script>
    <script>
        $(document).ready(function(){
            $(".add-to-cart").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/"+id, {}, function (data) {
                    $("#cart-count").html(data);
                    location.reload();
                });
                return false;
            });
        });
    </script>
    <script>
        $(".spoiler").spoiler({includePadding: false});
    </script>

</body>
</html>