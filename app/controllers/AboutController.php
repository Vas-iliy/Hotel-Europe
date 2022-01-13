<?php

namespace app\controllers;

use app\models\AppModel;
use app\models\ImageModel;

class AboutController extends AppController
{
    public function indexAction() {
        $about = \R::getAll('SELECT * FROM about');
        $about = ImageModel::withImg('about', 'image_about', $about, true, AppModel::getId($about));
        $this->set(compact('about'));
        $this->setMeta('About');
    }
}