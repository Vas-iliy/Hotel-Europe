<?php

namespace app\models;

use europa\base\Model;

class AppModel extends Model
{
    public static function getId($articles) {
        $id = [];
        foreach ($articles as $article) {
            $id[] = $article['id'];
        }
        return $id;
    }
}