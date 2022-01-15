<?php


namespace app\controllers;


use app\models\AppModel;
use app\models\EnabledModel;
use app\models\ImageModel;
use app\models\ReservationModel;

class ReservationController extends AppController
{
    public function indexAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $params = extractFields($_POST, ['to', 'from', 'adults', 'children', 'countRoom', 'price']);
            if (($params['countRoom'] === 0 || $params['adults'] === 0) || ($params['countRoom'] === 0 && $params['adults'] === 0)) {
                $_SESSION['error'] = 'Такой номер недоступен';
                redirect();
            } else {
                $_SESSION['params'] = $params;
                if (!ReservationModel::checkGuests($params)) {
                    $_SESSION['error'] = 'Такой номер недоступен';
                    redirect();
                } else {
                    $rooms = \R::getAll('SELECT rooms.*, count.count, count.factor FROM rooms JOIN room_count 
    ON rooms.id = room_id JOIN count ON count_id = count.id');
                    $rooms_id = AppModel::getId($rooms);
                    $searches = ReservationModel::getRooms($params, EnabledModel::roomsEnabled(ImageModel::withImg('room', 'images',$rooms, true, $rooms_id), $rooms_id));
                }
                $this->set(compact('params'));
            }
        } else {

        }
        $this->setMeta('Reservation');
    }

}