<?php


namespace app\controllers;

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
                    $searches = ReservationModel::getRooms($params, ReservationModel::getStartRooms());
                    $this->set(compact('searches'));
                }
            }
        } else {
            $searches = ReservationModel::getStartRooms();
            $this->set(compact('searches'));
        }
        $this->setMeta('Reservation');
    }

}