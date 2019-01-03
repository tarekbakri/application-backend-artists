<?php
/**
 * Created by PhpStorm.
 * User: tarek
 * Date: 02.01.19
 * Time: 18:54
 */

namespace App\Service;


class TimeConvertor
{
    const TIME = '0';
    public function MinToSec($time) {
        $array = explode(':', $time);
        $min = intval($array[0]);
        $sec = intval($array[1]);

        return ($min * 60) + $sec;
    }

}