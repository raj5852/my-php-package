<?php
namespace Mypack\Image;

class Getimg{
    public static function generate(){
        $num = rand(1,2000);
        $url = "https://picsum.photos/".$num;
        return $url;
    }
}

