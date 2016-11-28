<?php

class Adress {

    public static function addNewAdress($user_id, $adressString) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user_adress (user_id, adress) VALUES (:user_id, :adressString)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':adressString', $adressString, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getAlladress($user_id) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user_adress '
                . 'WHERE user_id = :user_id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_INT);


        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $adressList = array();
        while ($row = $result->fetch()) {
            $adressList[$i]['id'] = $row['id'];
            $adressList[$i]['user_id'] = $row['user_id'];
            $adressList[$i]['adress'] = $row['adress'];
            $adressList[$i]['is_active'] = $row['is_active'];
            $adressList[$i]['type'] = $row['type'];
            $i++;
        }
        return $adressList;
    }
    
    public static function deleteAdress($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM user_adress WHERE user_adress.id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);


        // Выполнение коменды
        return $result->execute();
    }  
    
    public static function addActive($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $sqlUnsetAll = 'UPDATE user_adress SET is_active = 0';
        // Текст запроса к БД
        $sql = 'UPDATE user_adress SET is_active = 1 WHERE id = :id';
        
        $resultUnset = $db->prepare($sqlUnsetAll);
        $resultUnset->execute();
        
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        

        // Выполнение коменды
        return $result->execute();
    } 
    
    public static function getAdressActive($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user_adress WHERE user_id = :id AND is_active = 1';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

}
