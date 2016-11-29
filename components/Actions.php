<?php


class Actions {

    //Проверяет день недели и выставляет цену. Входящие данные - массив полученный из методов модели product.php

    public static function getActionPriceLite($day = 'Monday', $product) {

        if (date("l") == $day) {
            if ($product['price_action'] !== "") {
                $product['price'] = $product['price_action'];
                echo $product['price'];
                echo '<div class="thisIsAction"></div>';
            } else {
                $product['price'] = $product['price'];
                echo $product['price'];
            }
        } else {
            $product['price'] = $product['price'];
            echo $product['price'];
        };
    }

    // public static function getTotalPriceIfAction($day, $product)
    // {
    // 	if(date("l") == "Monday") {
    //            if(isset($product['price_action'])) {
    //                echo $product['price_action']*$productsInCart[$product['id']];     
    //            } else {
    //                echo $product['price']*$productsInCart[$product['id']];
    //            }
    //        } else {
    //            echo $product['price']*$productsInCart[$product['id']];
    //        }; 
    // }
}
