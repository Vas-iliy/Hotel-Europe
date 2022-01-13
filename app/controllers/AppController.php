<?php

namespace app\controllers;

use app\models\AppModel;
use europa\base\Controller;
use europa\Cache;

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
        self::cacheMenu();
    }

    public static function cacheMenu() {
        $cache = Cache::instance();
        $menu = $cache->get('menu');
        if (!$menu) {
            $menu = \R::getAssoc('SELECT * FROM menu ');
            $cache->set('menu', $menu);
        }
    }

    public function getPage() {
        return \R::getRow('SELECT id FROM menu WHERE alias = ?', [str_replace('Controller', '', $this->controller)])['id'];
    }
}