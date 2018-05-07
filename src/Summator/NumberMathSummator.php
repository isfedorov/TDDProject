<?php
/**
 * Created by PhpStorm.
 * User: susanin
 * Date: 3/29/18
 * Time: 10:26 PM
 */

namespace MyProject\Src\Summator;

class NumberMathSummator implements ICombinable
{
    public function sum($int, $int1): int
    {
        return $int+$int1;
    }
}