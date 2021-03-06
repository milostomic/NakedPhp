<?php

namespace Doctrine\DBAL\Types;

/**
 * Type that maps an SQL INT to a PHP integer.
 * 
 * @author Roman Borschel <roman@code-factory.org>
 * @since 2.0
 */
class IntegerType extends Type
{
    public function getName()
    {
        return 'Integer';
    }

    public function getSqlDeclaration(array $fieldDeclaration, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        return $platform->getIntegerTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToPHPValue($value, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        return (int) $value;
    }
    
    public function getTypeCode()
    {
    	return self::CODE_INT;
    }
}