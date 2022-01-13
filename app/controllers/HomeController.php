<?php

namespace app\controllers;


use app\models\EnabledModel;
use app\models\HomeModel;
use app\models\ImageModel;

class HomeController extends AppController
{
    public function indexAction() {
        $menu_id = $this->getPage();
        $descr = \R::findOne('description', 'menu_id = ?', [$menu_id]);
        $topRooms = \R::getAll('SELECT * FROM rooms WHERE hit = "1" LIMIT 2');
        $rooms_id = HomeModel::getRoomsId($topRooms);
        $topRooms = EnabledModel::roomsEnabled(ImageModel::withImg('room', 'images',$topRooms, false, $rooms_id), $rooms_id);
        $comments = \R::getAll('SELECT comments.*, users.img, `name`, `surname` FROM comments JOIN users ON comments.user_id = users.id
    JOIN guests ON users.id = guests.user_id WHERE comments.rating = "5" OR comments.rating = "4" LIMIT 2');
        $about = \R::getRow('SELECT * FROM about');
        $about = ImageModel::withImg('about', 'image_about', $about, true);
        $this->set(compact('descr', 'topRooms', 'comments', 'about'));
        $this->setMeta('Europa Hotel');
    }
}