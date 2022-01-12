<?php

namespace europa;

trait Curr
{
    public static function Curr() {
        return App::$app->getProperty('currency');
    }
}