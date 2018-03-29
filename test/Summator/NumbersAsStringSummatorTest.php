<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 16:55
 */

namespace Test\Summator;

use Src\Summator\NumberSummator;

class NumbersAsStringSummatorTest extends AbstractSummatorTest
{
    public function testSummator()
    {
        $summator = new NumberSummator();
        $this->assertEquals("1a", $summator->sumAsString(1,"a"));
    }

}
