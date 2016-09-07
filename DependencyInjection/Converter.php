<?php

namespace Unit\ConverterBundle\DependencyInjection;

use Unit\ConverterBundle\Model\ConverterFactory;

/**
 * Converts units
 *
 * @author rmroz
 */
class Converter {
    
    
    /**
     * Convert
     * @param string $converterType []
     * @param string $fromUnit
     * @param string $toUnit
     * @param int $value
     * @return double
     */
    public function convert( $converterType, $fromUnit, $toUnit, $value )
    {
        $converter = (new ConverterFactory())->getConverter($converterType);
        return $converter->convert($fromUnit, $toUnit, $value);
    }
    
}
