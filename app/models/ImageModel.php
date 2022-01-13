<?php


namespace app\models;


class ImageModel extends AppModel
{
    public static function roomsImg($rooms, $rooms_id) {
        $imgs = [];
        foreach ($rooms_id as $room_id) {
            $imgs[] = \R::getRow('SELECT * FROM images WHERE room_id = ?', [$room_id]);
        }
        foreach ($rooms as $k =>$room) {
            foreach ($imgs as $img) {
                if ($room['id'] == $img['room_id']) {
                    $rooms[$k]['img'] = $img;
                }
            }
        }
        return $rooms;
    }
}