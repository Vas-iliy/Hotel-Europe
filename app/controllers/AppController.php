<?php

namespace app\controllers;

use app\models\AppModel;
use luxury\base\Controller;

class AppController extends Controller
{
    public $url;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->uri = $_SERVER['REQUEST_URI'];
        new AppModel();
        if (checkUri($this->uri) || $this->uri !== trimUri($this->uri)) {
            throw new \Exception('Страница не найдена', 404);
        }
    }
}