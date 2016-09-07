<?php

namespace Unit\ConverterBundle\Model;

/**
 * Klas for calculate Bytes
 *
 * @author rmroz
 */
class BytesConverter implements ConverterInterface {
    
    const BIT = 'BIT';
    const BAJT = 'BAJT';
    const KILOBAJT = 'KILOBAJT';
    const MEGABAJT = 'MEGABAJT';
    const GIGABAJT = 'GIGABAJT';
    const TERABAJT = 'TERABAJT';
    const PETA = 'PETA';
    
    /**
     * Supported units to bit multiplier
     * @var array 
     */     
    private $bitMultiplier = [
        self::BIT => 1,
        self::BAJT => 8,
        self::KILOBAJT => 8192,
        self::MEGABAJT => 8388608,
        self::GIGABAJT => 8589934592,
        self::TERABAJT => 8796093022208,
        self::PETA => 9007199254740992,
    ];
    
    /**
     * Calculate
     * @param string $from
     * @param string $to
     * @param int $value
     * @return double
     * @throws Exception
     */
    public function convert( $from, $to, $value )
    {
        if (!array_key_exists($from, $this->bitMultiplier )) {
            throw new Exception('Invalid from unit');
        }
        
        if (!array_key_exists($to, $this->bitMultiplier )) {
            throw new Exception('Invalid to unit');
        }
        
        if (!is_int($value)) {
            throw new Exception('Invalid value please use integer');
        }
        
        $result = ( $value * $this->bitMultiplier[$from] ) / $this->bitMultiplier[$to];
                
        return round((float)$result,4);
    }
}