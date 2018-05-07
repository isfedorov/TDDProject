<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 16:55
 */

namespace MyProject\UnitTests\Summator;


use MyProject\Src\Summator\NumberSummator;

class NumbersAsStringSummatorTest extends AbstractSummatorTest
{
    public function testSummator()
    {
        $summator = new NumberSummator();
        $this->assertEquals("1a", $summator->sum(1,"a"));
    }

}
