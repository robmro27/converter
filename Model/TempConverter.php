<?php

namespace Unit\ConverterBundle\Model;

/**
 * 
 * Klas for calculate Temp
 *
 * @author rmroz
 */
class TempConverter implements ConverterInterface {
   
    
    /**
     * Unit names for create function name to call
     */
    const FARENHEIT = 'Farenheit';
    const CELSIUS = 'Celsius';
    const KELVIN = 'Kelvin';
    
    /**
     *
     * @var array 
     */
    private $unitsArr = [
        self::FARENHEIT, self::CELSIUS, self::KELVIN
    ];
    
    /**
     * 
     * @param String $from
     * @param String $to
     * @param int $value
     * @return type
     */
    public function convert($from, $to, $value) {
        
        if (!is_int($value)) {
            throw new Exception('Invalid value please use integer');
        }
        
        return $this->{$from.'2'.$to}($value);
    }
    
    private function Farenheit2Celsius( $value ) {
        return $this->pareseResult(( $value - 32 ) * 5/9);
    }
    
    private function Farenheit2Kelvin( $value ) {
        return $this->pareseResult(( $value - 32 ) * 5/9 + 273.15);
    } 
    
    private function Celsius2Farenheit( $value ) {
        return $this->pareseResult(( $value * 9/5 ) + 32);
    }
    
    private function Celsius2Kelvin( $value ) {
        return $this->pareseResult($value + 273.15);
    }
    
    private function Kelvin2Farenheit( $value ) {
        return $this->pareseResult(($value - 273.15) * 9/5 + 32);
    }
    
    private function Kelvin2Celsius( $value ) {
        return $this->pareseResult($value - 273.15);
    }
    
    private function pareseResult($result) 
    {
        return round((float)$result,2);
    }
    
}
