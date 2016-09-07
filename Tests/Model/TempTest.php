<?php

use Unit\ConverterBundle\Model\TempConverter;

/**
 * Description of TempTest
 *
 * @author rmroz
 */
class TempTest extends \PHPUnit_Framework_TestCase {
    
    public function testFarenheit2Celsius() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::FARENHEIT, TempConverter::CELSIUS, 13),-10.56);
    }
    
    public function testFarenheit2Kelvin() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::FARENHEIT, TempConverter::KELVIN, 13),262.59);
    } 
    
    public function testCelsius2Farenheit() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::CELSIUS,  TempConverter::FARENHEIT,13),55.4);
    }
    
    public function testCelsius2Kelvin() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::CELSIUS,  TempConverter::KELVIN,13),286.15);
    }
    
    public function testKelvin2Farenheit() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::KELVIN,  TempConverter::FARENHEIT,13),-436.27);
    }
    
    public function testKelvin2Celsius() {
        $temp = new TempConverter;
        $this->assertEquals($temp->convert(TempConverter::KELVIN,  TempConverter::CELSIUS,13),-260.15);
    }
    
}
