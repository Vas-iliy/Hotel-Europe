<?php


namespace app\models;


class ImageModel extends AppModel
{
    public static function withImg($table, $then, $articles, $imgMoney = false, $id = []) {
        $imgs = [];
        $table = $table . '_id';
        if (!empty($id)) {
            foreach ($id as $value) {
                $imgs[] = \R::getAll("SELECT * FROM {$then} WHERE {$table} = ?", [$value]);
            }
            if (!empty($imgs)) {
                foreach ($articles as $k => $article) {
                    foreach ($imgs as $img) {
                        if (!$imgMoney) {
                            if ($article['id'] == $img[0][$table]) {
                                $articles[$k]['img'] = $img[0];
                            }
                        } else {
                            foreach ($img as $item) {
                                if ($article['id'] == $item[$table]) {
                                    $articles[$k]['img'][] = $item;
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $imgs[] = \R::getAll("SELECT * FROM {$then} WHERE {$table} = ?", [$articles['id']]);
            if (!empty($imgs)) {
                foreach ($imgs as $img) {
                    if (!$imgMoney) {
                        if ($articles['id'] == $img[0][$table]) {
                            $articles['img'] = $img[0];
                        }
                    } else {
                        foreach ($img as $item) {
                            if ($articles['id'] == $item[$table]) {
                                $articles['img'][] = $item;
                            }
                        }
                    }
                }
            }
        }

        return $articles;
    }
}