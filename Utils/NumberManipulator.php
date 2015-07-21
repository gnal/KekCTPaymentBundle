<?php

namespace Kek\CTPaymentBundle\Utils;

use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("kek_ctpayment.utils.number_manipulator")
 */
class NumberManipulator
{
    public function fixAmount($amount)
    {
        $amount = strval(number_format($amount, 2, '', ''));
        $nb0 = 11 - strlen($amount);
        $tmp = "";
        for($i=0; $i<$nb0; $i++){
            $tmp .= "0";
        }
        $amount = $tmp.$amount;

        return $amount;
    }
}
