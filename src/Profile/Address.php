<?php
namespace Mypack\Profile;

class Address{
    public static function generate(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($ch);
        return json_decode($res,true);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

    }
    public static function male(){
        $ran = rand(1,99);
        return 'https://randomuser.me/api/portraits/men/'.$ran.'.jpg';
        

    }
    public static function female(){
        $ran = rand(1,99);
        return 'https://randomuser.me/api/portraits/women/'.$ran.'.jpg';

    }
    public static function man(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($ch);
        $code = json_decode($res,true);
       return $code['results'][0]['picture']['large'];

        

    }
}