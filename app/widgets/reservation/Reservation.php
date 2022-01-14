<?php


namespace app\widgets\reservation;


use europa\Cache;

class Reservation
{
    public $price;
    public $count;
    public $tpl;

    public function __construct()
    {
        $this->tpl = __DIR__ . '/tpl/reservation.php';
        $this->run();
    }

    public function run() {
        $cache = Cache::instance();
        $reservation = $cache->get('reservation');
        if (!$reservation) {
            $this->price = self::getPrice();
            $this->count = self::getCount();
            $reservation = $this->getHtml();
            $cache->set('reservation', $reservation, 3600*24);
        }
        echo $reservation;
    }

    public static function getPrice() {
        $max=  \R::getRow('SELECT MAX(price) as price FROM rooms');
        $min=  \R::getRow('SELECT MIN(price) as price FROM rooms');
        $factor = \R::getRow('SELECT MAX(factor) as factor FROM `count`');
        return [$min['price'], $max['price'] * $factor['factor']];
    }

    public static function getCount() {
        return \R::getRow('SELECT MAX(count) as count FROM count');
    }

    public function getHtml() {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }

}