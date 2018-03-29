<?php
/**
 * Created by PhpStorm.
 * User: susanin
 * Date: 3/29/18
 * Time: 10:26 PM
 */

namespace Src\Summator;


class NumberMathSummator implements ICombinable
{

    /**
     * NumberMathSummator constructor.
     */
    public function __construct()
    {
    }

    public function sum($int, $int1): int
    {
        return $int+$int1;
    }
}