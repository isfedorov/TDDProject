<?php
/**
 * Created by PhpStorm.
 * User: susanin
 * Date: 3/29/18
 * Time: 10:22 PM
 */

namespace MyProject\UnitTests\Summator;

use MyProject\Src\Summator\NumberMathSummator;

class NumberToNumerSummatorTest extends AbstractSummatorTest
{
    public function testSummator()
    {
        $summator = new NumberMathSummator();
        $this->assertEquals(3, $summator->sum(1,2));
    }

}
