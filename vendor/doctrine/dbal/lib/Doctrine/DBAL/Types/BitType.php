<?php
    namespace Doctrine\DBAL\Types;

    use Doctrine\DBAL\Platforms\AbstractPlatform;

    /**
     * Type that maps an SQL boolean to a PHP boolean.
     *
     * @since 2.0
     */
    class BitType extends Type
    {
        public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
        {
            return $platform->getBooleanTypeDeclarationSQL($fieldDeclaration);
        }

        public function convertToDatabaseValue($value, AbstractPlatform $platform)
        {
            return $platform->convertBooleans($value);
        }

        public function convertToPHPValue($value, AbstractPlatform $platform)
        {
            return (null === $value) ? null : (bool) $value;
        }

        public function getName()
        {
            return Type::BIT;
        }

        public function getBindingType()
        {
            return \PDO::PARAM_BOOL;
        }
    }
