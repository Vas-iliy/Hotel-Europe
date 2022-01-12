<?php

namespace app\controllers;

class HomeController extends AppController
{
    public function indexAction() {
        $this->setMeta('Europa Hotel');
    }
}