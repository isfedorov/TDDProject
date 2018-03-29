<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 16:58
 */

namespace Src\Summator;


class NumberSummator implements ICombinable
{

    /**
     * NumberSummator constructor.
     */
    public function __construct()
    {
    }

    public function sum($int, $string): string
    {
        return "$int$string";
    }

}