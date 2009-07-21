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
 * @package    NakedPhp_Metadata
 */

namespace NakedPhp\Metadata;

/**
 * Wraps info about a method or constructor param.
 */
final class NakedParam
{
    /**
     * @var string
     */
    private $_type;

    /**
     * @var string
     */
    private $_name;

    /**
     * @var boolean  whether the parameter has a default or has to be specified
     */
    private $_default;

    public function __construct($type, $name, $default = false)
    {
        $this->_type = $type;
        $this->_name = $name;
        $this->_default = $default;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getDefault()
    {
        return $this->_default;
    }
}