<?php


namespace app\models;


class EnabledModel extends AppModel
{
    public static function roomsEnabled($rooms, $rooms_id) {
        $enabled = [];
        foreach ($rooms_id as $room_id) {
            $enabled[] = \R::getAll('SELECT * FROM enabled JOIN room_enabled ON enabled.id = enabled_id WHERE room_id = ?', [$room_id]);
        }
        if (!empty($enabled)) {
            foreach ($rooms as $k =>$room) {
                foreach ($enabled as $item) {
                    foreach ($item as $value) {
                        if ($room['id'] == $value['room_id']) {
                            $rooms[$k]['enabled'][] = $value;
                        }
                    }
                }
            }
        }
        return $rooms;
    }
}