<?php


namespace app\models;


class CountModel
{
    public static function roomsCount($rooms, $rooms_id) {
        $count= [];
        foreach ($rooms_id as $room_id) {
            $count[] = \R::getAll('SELECT * FROM count JOIN room_count ON count.id = count_id WHERE room_id = ?', [$room_id]);
        }
        if (!empty($count)) {
            foreach ($rooms as $k =>$room) {
                foreach ($count as $item) {
                    foreach ($item as $value) {
                        if ($room['id'] == $value['room_id']) {
                            $rooms[$k]['count'][] = $value;
                        }
                    }
                }
            }
        }
        return $rooms;
    }
}