<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список тематических блюд для левого меню
        $thematicCategories = Thematic::getThematicList();

        // Список последних товаров
        // $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для страницы "Контакты"
     */
    public function actionContacts()
    {

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);

        // Подключаем вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для страницы "О магазине"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

    /**
     * Action для страницы "Новости"
     */
    public function actionNews()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список тематических блюд для левого меню
        $thematicCategories = Thematic::getThematicList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);
        // Подключаем вид
        require_once(ROOT . '/views/site/news.php');
        return true;
    }

    /**
     * Action для страницы "Отзывы"
     */
    public function actionReviews()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список тематических блюд для левого меню
        $thematicCategories = Thematic::getThematicList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        $userReviews = User::getAllFeedBacks();
        $userReviewsWithMarks = array();

        foreach ($userReviews as $userReview) {
            if($userReview['mark'] == "5"){
                $userReview['mark'] = "<div class=\"rating\"><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span></div>"; 
            } elseif ($userReview['mark'] == "4"){
                $userReview['mark'] = "<div class=\"rating\"><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span><span>☆</span></div>"; 
            } elseif ($userReview['mark'] == "3"){
                $userReview['mark'] = "<div class=\"rating\"><span class=\"m\">☆</span><span class=\"m\">☆</span><span class=\"m\">☆</span><span>☆</span><span>☆</span></div>"; 
            } elseif ($userReview['mark'] == "2"){
                $userReview['mark'] = "<div class=\"rating\"><span class=\"m\">☆</span><span class=\"m\">☆</span><span>☆</span><span>☆</span><span>☆</span></div>"; 
            } else {
                $userReview['mark'] = "<div class=\"rating\"><span class=\"m\">☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div>";
            }

            array_push($userReviewsWithMarks, $userReview);
        }

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);
        // Подключаем вид
        require_once(ROOT . '/views/site/reviews.php');
        return true;
    }

    /**
     * Action для страницы "Доставка и оплата"
     */
    public function actionDelivery()
    {

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);

        // Подключаем вид
        require_once(ROOT . '/views/site/delivery.php');
        return true;
    }

    /**
     * Action для страницы "Новости"
     */
    public function actionVacancies()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список тематических блюд для левого меню
        $thematicCategories = Thematic::getThematicList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

         // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }


        // Получаем информацию о пользователе из БД
        $userId = User::getUser();
        $user = User::getUserById($userId);
        // Подключаем вид
        require_once(ROOT . '/views/site/vacancies.php');
        return true;
    }

}
