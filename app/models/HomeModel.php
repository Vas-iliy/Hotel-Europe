<?php

namespace app\models;

class HomeModel extends AppModel
{
    public static function getRoomsId($rooms) {
        $id = [];
        foreach ($rooms as $room) {
            $id[] = $room['id'];
        }
        return $id;
    }
}