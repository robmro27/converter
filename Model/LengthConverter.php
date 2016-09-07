<?php

namespace Unit\ConverterBundle\Model;

/**
 * Klas for calculate Length
 *
 * @author rmroz
 */
class LengthConverter implements ConverterInterface {
    
    /**
     * Supported units metric
     */
    const MILIMETR = 'MILIMETR';
    const CENTYMETR = 'CENTYMETR';
    const DECYMETR = 'DECYMETR';
    const METR = 'METR';
    const KILOMETR =' KILOMETR';
    
    /**
     * Supported units imperial
     */
    const CAL = 'CAL';
    const STOPA = 'STOPA';
    const JARD = 'JARD';
    const MILA = 'MILA';
    
    /**
     * Supported units to miligram multiplier
     * @var array 
     */     
    private $milimetrMultiplier = [
        self::MILIMETR => 1,
        self::CENTYMETR => 10,
        self::DECYMETR => 100,
        self::METR => 1000,
        self::KILOMETR => 1000000,
        self::CAL => 25.3995,
        self::STOPA => 304.794,
        self::JARD => 914.382,
        self::MILA => 1609300,
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
        if (!array_key_exists($from, $this->milimetrMultiplier)) {
            throw new Exception('Invalid from unit');
        }
        
        if (!array_key_exists($to, $this->milimetrMultiplier)) {
            throw new Exception('Invalid to unit');
        }
        
        if (!is_int($value)) {
            throw new Exception('Invalid value please use integer');
        }
        
        $result = ( $value * $this->milimetrMultiplier[$from] ) / $this->milimetrMultiplier[$to];
                
        return $this->pareseResult($result);
        
    }
    
    private function pareseResult($result) 
    {
        return round((float)$result,4);
    }
}
