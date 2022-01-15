<?php


namespace app\models;


class ReservationModel extends AppModel
{
    public static function getRooms($params, $rooms) {
        if (self::checkGuests($params)) {
            $bron = self::getBronRooms($params);
            if (!empty($bron)) {
                foreach ($rooms as $key => $room) {
                    foreach ($bron as $item) {
                        if ($room['alias'] === $item['room'] && $room['count'] === $item['count_room']){
                            unset($rooms[$key]);
                        }
                    }
                }
            }
            return $rooms;
        }
    }

    protected static function getBronRooms($params) {
        if (self::checkGuests($params)) {
            $time = ''; $from = ''; $to = ''; $price = '';
            if ($params['from'] && $params['to']) {
                $f = $params['from'];
                $t = $params['to'];
                $time = "AND (dt_from <= $t OR dt_to >= $f)";
            } else {
                if ($params['from']) {
                    $item = $params['from'];
                    $from = "AND (dt_from <= $item)";
                }
                if ($params['to']) {
                    $item = $params['to'];
                    $to = "AND (dt_too >= $item)";
                }
            }
            if ($params['price']) {
                $item = $params['price'];
                $price = "AND price = $item";
            }

            $count = $params['countRoom'];
            return \R::getAll("SELECT * FROM bron WHERE (status != '2' OR status != '3') AND count_room = $count $time $from $to $price");
        }
    }

    public static function checkGuests($params) {
        if (empty($params['adults'])) return false;
        if (empty($params['children'])) {
            if ($params['adults'] > $params['countRoom']*2) return false;
        } else {
            for ($i = 1; $i < $params['adults'] + 1; $i++) {
                for ($j = 1; $j < $params['children'] + 1; $j++) {
                    if ($i == 1 && $j > 1 && $params['countRoom'] < 2) return false;
                    if ($i == 1 && $j > 3 && $params['countRoom'] < 3) return false;
                    if ($i == 2 && $j > 1 && $params['countRoom'] < 2) return false;
                    if ($i == 2 && $j > 2 && $params['countRoom'] < 3) return false;
                    if ($i == 3 && isset($j) && $params['countRoom'] < 2) return false;
                    if ($i == 3 && $j > 1 && $params['countRoom'] < 3) return false;
                    if ($i == 3 && $j > 3 && $params['countRoom'] != 4) return false;
                    if ($i == 4 && $j >= 1 && $params['countRoom'] < 3) return false;
                    if ($i == 4 && $j > 2 && $params['countRoom'] != 4) return false;
                }
            }
        }
        return true;
    }

    public static function getStartRooms() {
        $rooms = \R::getAll('SELECT * FROM rooms');
        $rooms_id = AppModel::getId($rooms);
        $rooms = EnabledModel::roomsEnabled(ImageModel::withImg('room', 'images',$rooms, true, $rooms_id), $rooms_id);
        $countRooms = \R::getAll('SELECT * FROM count JOIN room_count ON count.id = count_id');
        foreach ($countRooms as $key => $count) {
            foreach ($rooms as $k => $room) {
                if ($count['room_id'] === $room['id']) {
                    $countRooms[$key] = array_merge($rooms[$k], ['count' => $count['count'], 'factor' => $count['factor']]);
                }
            }
        }
        return $countRooms;
    }
}
