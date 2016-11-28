<?php

class AdressController {

    public function actionAddadress() {

        $adressString = $_POST['adress'];
        /* @var $_SESSION type */
        $user_id = ($_SESSION['user']);
        $result = Adress::addNewAdress($user_id, $adressString);

        if ($result === true) {
            $info = "Адрес успешно добавлен";
        } else {
            $info = "Во время сохранения адреса произошла ошибка";
        }
        echo $info;
    }
    
    public function actionDeleteadress() {

        $id = $_POST['id'];
        $result = Adress::deleteAdress($id);

        if ($result === true) {
            $info = "Адрес успешно удален";
        } else {
            $info = "Во время удаления адреса произошла ошибка";
        }
        echo $info;
    }
    
    public function actionSetactiveadress() {

        $id = $_POST['id'];
        $result = Adress::addActive($id);

        if ($result === true) {
            $info = "Установлен активный адрес";
        } else {
            $info = "Произошла ошибка во время назначения адреса";
        }
        echo $info;
    }

}
