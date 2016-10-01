<?php

class Thematic
{

    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getThematicList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, image, description FROM thematic ORDER BY id ASC');

        // Получение и возврат результатов
        $i = 0;
        $thematicList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['image'] = $row['image'];
            $categoryList[$i]['description'] = $row['description'];
            $i++;
        }
        return $thematicList;
    }
}    