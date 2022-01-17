<?php


namespace app\controllers;

use app\models\ReservationModel;
use app\widgets\reservation\Reservation;

class ReservationController extends AppController
{
    public function indexAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $params = extractFields($_POST, ['to', 'from', 'adults', 'children', 'countRoom', 'price']);
            $r = new ReservationModel();
            if (!$r->validate($params) || (!empty($params['price']) && $params['price'] < Reservation::getPrice()[0]) || (!empty($params['price']) && $params['price'] > Reservation::getPrice()[1])) {
                $_SESSION['error'] = 'Такой номер недоступен';
                redirect($_SERVER['HTTP_REFERER']);
            }
            else {
                $_SESSION['params'] = $params;
                if (!ReservationModel::checkGuests($params)) {
                    $_SESSION['error'] = 'Такой номер недоступен';
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $rooms = ReservationModel::getRooms($params, ReservationModel::getStartRooms($params['price']));
                    $this->set(compact('rooms', 'pagination'));
                }
            }
        } else {
            $rooms = ReservationModel::getStartRooms();
            $this->set(compact('rooms', 'pagination'));
        }
        $this->setMeta('Reservation');
    }

}