<?php

namespace Unit\ConverterBundle\Model;

/**
 * Factory of converters
 *
 * @author rmroz
 */
class ConverterFactory {
    
    /**
     * Available converters
     */
    const BYTES = 'BYTES';
    const LENGTH = 'LENGTH';
    const TEMP = 'TEMP';
    const VOLUME = 'VOLUME';
    const WEIGHT = 'WEIGHT';
    
    /**
     * Available converters
     * @var array 
     */
    private $converterTypesArr = [
        self::BYTES,
        self::LENGTH,
        self::TEMP,
        self::VOLUME,
        self::WEIGHT,
    ];
    
    /**
     * Return concrete converter
     * @param string $converterType
     * @return \Unit\ConverterBundle\Model\ConverterInterface
     * @throws \Exception
     */
    public function getConverter( $converterType )
    {
        if (!in_array($converterType,$this->converterTypesArr)) {
            throw new \Exception( 'Invalid converter type' );
        }
        
        switch ( $converterType ) {
            case self::BYTES: 
                return new \Unit\ConverterBundle\Model\BytesConverter();
                break;
            case self::LENGTH: 
                return new \Unit\ConverterBundle\Model\LengthConverter();
                break;
            case self::TEMP: 
                return new \Unit\ConverterBundle\Model\TempConverter();
                break;
            case self::VOLUME: 
                return new \Unit\ConverterBundle\Model\VolumeConverter();
                break;
            case self::WEIGHT: 
                return new \Unit\ConverterBundle\Model\WeightConverter();
                break;
        }
    }
    
}
