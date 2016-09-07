<?php

use Unit\ConverterBundle\Model\VolumeConverter;

/**
 * Description of VolumeTest
 *
 * @author rmroz
 */
class VolumeTest extends \PHPUnit_Framework_TestCase {
    
    public function testConversion()
    {
        $volume = new VolumeConverter;
        $resultsDecylitr = [
            8 => [
                VolumeConverter::MILILITR => 800,
                VolumeConverter::CENTYLITR => 80,
                VolumeConverter::DECYLITR => 8,
                VolumeConverter::LITR => 0.8,
                VolumeConverter::METR => 0.0008,
                VolumeConverter::UNCJA => 28.1560,
                VolumeConverter::PINTA => 1.4078,
                VolumeConverter::KWARTA => 0.7039,
                VolumeConverter::GALON => 0.176,
                VolumeConverter::BUSZTEL => 0.022,
            ]
        ];
        
        foreach ( $resultsDecylitr as $value => $valueResults ) {
            foreach ( $valueResults as $to => $result ) {
                $this->assertEquals($result, $volume->convert(VolumeConverter::DECYLITR, $to, $value));
            }
        }
    }
    
}
