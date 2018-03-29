<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 20:28
 */

namespace Src\Summator;


class StringToStringSummator
{

    /**
     * StringToStringSummator constructor.
     */
    public function __construct()
    {
    }

    public function sum($int, $string): string
    {
        return "$int$string";
    }


}