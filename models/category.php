<?php
class category extends Db
{
    public function getallcates()
    {
        $sql = self::$connection->prepare("SELECT* FROM `categories`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;

    }
}