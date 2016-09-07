<?php

namespace Unit\ConverterBundle\Model;

/**
 * Klas for calculate Volume
 *
 * @author rmroz
 */
class VolumeConverter implements ConverterInterface {
    
    /**
     * Supported units metric
     */
    const MILILITR = 'MILILITR';
    const CENTYLITR = 'CENTYLITR';
    const DECYLITR = 'DECYLITR';
    const LITR = 'LITR';
    const METR = 'METR';
    
    /**
     * Supported units imperial
     */
    const UNCJA = 'UNCJA';
    const PINTA = 'PINTA';
    const KWARTA = 'KWARTA';
    const GALON = 'GALON';
    const BUSZTEL = 'BUSZTEL';
    
    /**
     * Supported units to mililitr multiplier
     * @var array 
     */     
    private $mililitrMultiplier = [
        self::MILILITR => 1,
        self::CENTYLITR => 10,
        self::DECYLITR => 100,
        self::LITR => 1000,
        self::METR => 1000000,
        self::UNCJA => 28.4131,
        self::PINTA => 568.2613,
        self::KWARTA => 1136.5225,
        self::GALON => 4546.09,
        self::BUSZTEL => 36368.72,
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
        if (!array_key_exists($from, $this->mililitrMultiplier)) {
            throw new Exception('Invalid from unit');
        }
        
        if (!array_key_exists($to, $this->mililitrMultiplier)) {
            throw new Exception('Invalid to unit');
        }
        
        if (!is_int($value)) {
            throw new Exception('Invalid value please use integer');
        }
        
        $result = ( $value * $this->mililitrMultiplier[$from] ) / $this->mililitrMultiplier[$to];
                
        return round((float)$result,4);
        
    }
    
}
