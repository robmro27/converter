<?php

use Unit\ConverterBundle\Model\LengthConverter;

/**
 * Test Length
 *
 * @author rmroz
 */
class LengthTest extends \PHPUnit_Framework_TestCase {
    
    public function testConversion()
    {
        $length = new LengthConverter;
        
        $resultsDecymetr = [
            12 => [
                LengthConverter::MILIMETR => '1200',
                LengthConverter::CENTYMETR => '120',
                LengthConverter::DECYMETR => '12',
                LengthConverter::METR => '1.2',
                LengthConverter::KILOMETR => '0.0012',
                LengthConverter::CAL => '47.245',
                LengthConverter::STOPA => '3.9371',
                LengthConverter::JARD => '1.3124',
                LengthConverter::MILA => '0.0007',
            ]
        ];
        
        foreach ( $resultsDecymetr as $value => $valueResults ) {
            foreach ( $valueResults as $to => $result ) {
                $this->assertEquals($result, $length->convert(LengthConverter::DECYMETR, $to, $value));
            }
        }
    }
    
}
