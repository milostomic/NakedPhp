<?php
/**
 * Naked Php is a framework that implements the Naked Objects pattern.
 * @copyright Copyright (C) 2009  Giorgio Sironi
 * @license http://www.gnu.org/licenses/lgpl-2.1.txt 
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * @category   NakedPhp
 * @package    NakedPhp_ProgModel
 */

namespace NakedPhp\ProgModel\Facet\Property;
use NakedPhp\MetaModel\Facet\Property\Validate;
use NakedPhp\MetaModel\NakedObject;

class ValidateMethod implements Validate
{
    /**
     * @var string method name
     * @example 'validateMyField'
     */
    private $_methodName;
    
    /**
     * @param string
     */
    public function __construct($methodName)
    {
        $this->_methodName = $methodName;
    }

    /**
     * @param NakedObject $no
     * @param mixed $proposedValue
     * @return string   reason of non valid result, or a bool to indicate
     *                  validation without messages
     */
    public function invalidReason(NakedObject $no, $proposedValue)
    {
        $methodName = $this->_methodName;
        return $no->$methodName($proposedValue);
    }

    /**
     * {@inheritdoc}
     */
    public function facetType()
    {
        return 'Property\Validate';
    }
}
