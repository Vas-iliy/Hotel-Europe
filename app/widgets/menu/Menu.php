<?php

namespace app\widgets\menu;

use europa\App;
use europa\Cache;

class Menu
{
    public $tpl;
    public $data;

    public function __construct(){
        $this->tpl = __DIR__ . '/tpl/menu.php';
        $this->run();
    }

    protected function run() {
        $cache = Cache::instance();
        $menu = $cache->get('menuHtml');
        if (!$menu) {
            $this->data = $cache->get('menu');
            $menu = $this->getHtml();
            $cache->set('menuHtml', $menu);
        }
        echo $menu;
    }

    protected function getHtml() {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }
}