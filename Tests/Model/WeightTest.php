<?php

use Unit\ConverterBundle\Model\WeightConverter;

/**
 * Test Weight  
 *
 * @author rmroz
 */
class WeightTest extends \PHPUnit_Framework_TestCase {
    
    public function testConversion()
    {
        $weight = new WeightConverter;
        $resultsDekagram = [
            2 => [
                WeightConverter::TON => '0.00',
                WeightConverter::KILOGRAM => '0.02',
                WeightConverter::DEKAGRAM => '2.00',
                WeightConverter::GRAM => '20.00',
                WeightConverter::MILIGRAM => '20000',
                WeightConverter::FUNT => '0.0441',
                WeightConverter::UNCJA => '0.7055',
            ]
        ];
        
        foreach ( $resultsDekagram as $value => $valueResults ) {
            foreach ( $valueResults as $to => $result ) {
                $this->assertEquals($result, $weight->convert(WeightConverter::DEKAGRAM, $to, $value));
            }
        }
        
    }
    
}
