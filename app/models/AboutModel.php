<?php


namespace app\models;


class AboutModel extends AppModel
{
    public static function getAboutUs() {
        $about = [];
        $count = \R::count('rooms');
        if (!empty($count)) $about['count'] = $count;
        $minPrice = \R::getRow('SELECT MIN(price) as price FROM rooms');
        if (!empty($minPrice)) $about['price'] = $minPrice['price'];
        $guests = \R::count('guests');
        if (!empty($guests) && preg_match('/\d(\d{3,})/', $guests)) $guests = preg_replace('/000\d*/', 'K', round($guests, -3));
        if (!empty($guests)) $about['guests'] = $guests;
        return $about;
    }
}