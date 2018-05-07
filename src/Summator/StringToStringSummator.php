<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 20:28
 */

namespace MyProject\Src\Summator;

class StringToStringSummator
{
    public function sum($int, $string): string
    {
        return "$int$string";
    }
}