<?php
/**
 * Created by PhpStorm.
 * User: ifedorov
 * Date: 29/03/2018
 * Time: 20:26
 */

namespace MyProject\UnitTests\Summator;

use MyProject\Src\Summator\StringToStringSummator;

class StringToStringSummatorTest extends AbstractSummatorTest
{
    public function testSummator()
    {
        $summator = new StringToStringSummator();
        $this->assertEquals("ab", $summator->sum("a","b"));
    }

}
