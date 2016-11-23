<?php

/**
 * Контроллер UserController
 */
class UserController
{   

    // private $number;
    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        // Переменные для формы
        $login = false;
        $name = false;
        $surname = false;
        $phone = false;
        $email = false;
        $password = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['goRegister']) && isset($_POST['polzSogl'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $login = $_POST['login'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            $result = User::register($login, $name, $surname, $phone, $email, $password);


        }
     
        return true;
    }
    
    /**
     * Action для страницы "Вход на сайт"
     */
    public function actionLogin()
    {

            // Если форма отправлена 
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if(isset($userId)) {
              // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);  
                $info = "Вы успешно вошли !";
            } else {
                $info = 'Не правильно указан e-mail и(или) пароль !';
            }

        echo $info;
        return true;

    }

    public function actionLoginbyphone() 
    {
    
          $phone = $_POST['phone'];

          // Флаг ошибок
            $errors = false;

            $userIdphone = User::checkUserDataByPhone($phone); 
            $number = rand(100000, 999999);

            if(isset($userIdphone)) {
                $info = SMS::send("api.smsfeedback.ru", 80, "kaishi", "Totv12ka", 
                $phone, $number, "TEST-SMS"); 
            } else {
                $info = "Нет пользователя с таким номером телефона";
                
            }  
        echo $info;
        return true;
    }
    

    public function actionSmsverify() 
    {
            $phone = $_POST['phone'];
            $smsNumber = $_POST['smsNumber'];

            if($number = $smsNumber) {
                $userId = User::checkUserDataByPhone($phone); 
                User::auth($userId);  
                $info = "Вы успешно вошли !".$number."<br>".$smsNumber;   
            } else {
                $info = "Неверно указан проверочный код";
            }

            echo $info;    
            return true;
    }



    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        // Стартуем сессию
        // session_start();
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"], $_SESSION['products']);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
        return true;
    }

}
