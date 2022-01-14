<?php

namespace app\controllers;

use app\models\AboutModel;
use app\models\AppModel;
use app\models\ImageModel;

class AboutController extends AppController
{
    public function indexAction() {
        $about = \R::getAll('SELECT * FROM about');
        $about = ImageModel::withImg('about', 'image_about', $about, true, AppModel::getId($about));
        $us = AboutModel::getAboutUs();
        $awards = \R::getAll('SELECT * FROM awards ORDER BY id DESC LIMIT 6');
        $this->set(compact('about', 'count', 'us', 'awards'));
        $this->setMeta('About');
    }
}