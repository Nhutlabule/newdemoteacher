<?php
class Item extends Db{
    public function getALLCate(){
        $sql = self::$connection->prepare("SELECT * FROM `items`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
}