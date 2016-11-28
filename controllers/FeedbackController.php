<?php

class FeedbackController {

    // Отправка отзыва клиента со страницы личного кабинета

    public function actionAddfeedback() {

        $user_id = $_SESSION['user'];
        $date = date("y.m.d H:i:s");
        $text = $_POST['text'];
        $mark = $_POST['mark'];

        $result = User::addFeedback($user_id, $date, $text, $mark);

        if ($result == true) {
            $info = "Отзыв успешно опубликован";
        } else {
            $info = "Отзыв не удалось опубликовать";
        }
        echo $info;
        return true;
    }

}
