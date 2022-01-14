<?php

namespace app\controllers;

use app\models\AboutModel;
use app\models\EnabledModel;
use app\models\ImageModel;

class RoomsController extends AppController
{
    public function indexAction() {
        $rooms = \R::getAll('SELECT * FROM rooms');
        $id_rooms = AboutModel::getId($rooms);
        $rooms = ImageModel::withImg('room', 'images', EnabledModel::roomsEnabled($rooms, $id_rooms), true, $id_rooms);
        $this->set(compact('rooms'));
        $this->setMeta('Rooms');
    }

}