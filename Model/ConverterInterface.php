<?php

namespace Unit\ConverterBundle\Model;

/**
 * Interface for converters
 * @author rmroz
 */
interface ConverterInterface {
    
    /**
     * 
     * @param String $from
     * @param String $to
     * @param int $value
     */
    public function convert( $from, $to, $value );
    
}
