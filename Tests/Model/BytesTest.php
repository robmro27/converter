<?php

use Unit\ConverterBundle\Model\BytesConverter;

/**
 * Test Bytes Converter
 *
 * @author rmroz
 */
class BytesTest extends \PHPUnit_Framework_TestCase {
    
    public function testCalculate()
    {
        $bytes = new \Unit\ConverterBundle\Model\BytesConverter();
        $resultsGigaByte = [
            350 => [
                BytesConverter::BIT => 3006477107200,
                BytesConverter::BAJT => 375809638400,
                BytesConverter::KILOBAJT => 367001600,
                BytesConverter::MEGABAJT => 358400,
                BytesConverter::GIGABAJT => 350,
                BytesConverter::TERABAJT => 0.3418,
                BytesConverter::PETA => 0.0003,
            ]
        ];
        
        foreach ( $resultsGigaByte as $value => $valueResults ) {
            foreach ( $valueResults as $to => $result ) {
                $this->assertEquals($result, $bytes->convert(BytesConverter::GIGABAJT, $to, $value));
            }
        }
        
    }
    
}
