<?php

namespace Unit\ConverterBundle\Model; 

/**
 * Klas for calculate Weight
 * 
 * @author rmroz
 */
class WeightConverter implements ConverterInterface {
    
    /**
     * Supported units metric
     */
    const TON = 'TON';
    const KILOGRAM = 'KILOGRAM';
    const DEKAGRAM = 'DEKAGRAM';
    const GRAM = 'GRAM';
    const MILIGRAM = 'MILIGRAM';
    
    /**
     * Supported units imperial
     */
    const FUNT = 'FUNT';
    const UNCJA = 'UNCJA';
    
    /**
     * Supported units to miligram multiplier
     * @var array 
     */     
    private $miligramMultiplier = [
        self::TON => 1000000000,
        self::KILOGRAM => 1000000,
        self::DEKAGRAM => 10000,
        self::GRAM => 1000,
        self::MILIGRAM => 1,
        self::FUNT => 453590,
        self::UNCJA => 28349.523,
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
        if (!array_key_exists($from, $this->miligramMultiplier)) {
            throw new Exception('Invalid from unit');
        }
        
        if (!array_key_exists($to, $this->miligramMultiplier)) {
            throw new Exception('Invalid to unit');
        }
        
        if (!is_int($value)) {
            throw new Exception('Invalid value please use integer');
        }
        
        $result = ( $value * $this->miligramMultiplier[$from] ) / $this->miligramMultiplier[$to];
                
        return round((float)$result,4);
        
    }
    
    
}
