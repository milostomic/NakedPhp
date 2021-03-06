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
 * @category   Example
 * @package    Example_Test
 */

require_once 'AbstractTest.php';

class Example_IndexTest extends Example_AbstractTest
{
    public function testIndexIsLoaded()
    {
        $this->dispatch('/naked-php');
        $this->assertQueryContentContains('#nakedphp_services a', 'PlaceFactory');
    }
}
