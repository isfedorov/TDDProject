<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 16:58
 */

namespace MyProject\Src\Summator;

class NumberSummator implements ICombinable
{
    public function sum($int, $string): string
    {
        return "$int$string";
    }

}