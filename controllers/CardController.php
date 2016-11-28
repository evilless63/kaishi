<?php

class CardController extends CartController {

    public function actionCardcheck() {

        // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();
        
        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        } else {
            $totalPrice = "0";
        }
        
        if (isset($_SESSION['user'])) {
            $card = $_POST['card'];
            $user = $_SESSION['user'];

            $cardData = User::getSaleCard($user, $card);

            if ($cardData == false) {
                $info = false;
            } else {
                $info = $totalPrice - $totalPrice / 100 * $cardData['sale_count'];
                $info = strval($info);
            }
        } else {
            $info = "Сначала необходимо войти на сайт под своими учетными данными или зарегестрироваться";
        }
        
        
        echo $info;
        return true;
    }

}
