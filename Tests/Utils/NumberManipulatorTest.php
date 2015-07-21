<?php

namespace Kek\CTPaymentBundle\Tests\Utils;

use Kek\CTPaymentBundle\Utils\NumberManipulator;

class NumberManipulatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getFixAmountData
     */
    public function testFixAmount($amount)
    {
        $numberManipulator = new NumberManipulator();

        $result = $numberManipulator->fixAmount($amount);

        $this->assertEquals('00000010000', $result);
    }

    public function getFixAmountData()
    {
        return [
            [100],
            ['100'],
        ];
    }
}
