<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for rodzajUbezpieczeniaType EnumType
 * @subpackage Enumerations
 */
class RodzajUbezpieczeniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Constant for value 'PRECJOZA'
     * @return string 'PRECJOZA'
     */
    const VALUE_PRECJOZA = 'PRECJOZA';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_PRECJOZA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD,
            self::VALUE_PRECJOZA,
        ];
    }
}
