<?php


namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Type that maps an SQL TIME to a PHP DateTime object.
 *
 * @since 2.0
 */
class TimestampType extends Type
{
    public function getName()
    {
        return Type::TIMESTAMP;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getTimestampTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return ($value !== null)
            ? $value->format($platform->getTimestampFormatString()) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
         return null;
       if ($value === null) {
            return null;
        }

        $val = \DateTime::createFromFormat($platform->getTimestampFormatString(), $value);
     
        if (!$val) {
            throw ConversionException::conversionFailedFormat($value, $this->getName(), $platform->getTimestampFormatString());
        }
        return $val;
    }
}