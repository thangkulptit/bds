<?php

class Util {
    protected $category;
    public function __contructor(Util $category) {
        $this->category = $category;
    }

    public static function getPathArrayImg($arrayPath){
        $stringPath = '';
        foreach ($arrayPath as $path) {
            $stringPath = $stringPath . '/images/account/'.$path . '|';
        }
        //tru di phan tu cuoi'
        return substr("$stringPath",0, strlen($stringPath)-1);
    }
}