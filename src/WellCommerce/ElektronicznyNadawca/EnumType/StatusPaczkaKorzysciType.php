<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusPaczkaKorzysciType EnumType
 * @subpackage Enumerations
 */
class StatusPaczkaKorzysciType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'NIEAKTYWNA'
     * @return string 'NIEAKTYWNA'
     */
    const VALUE_NIEAKTYWNA = 'NIEAKTYWNA';
    /**
     * Constant for value 'AKTYWNA'
     * @return string 'AKTYWNA'
     */
    const VALUE_AKTYWNA = 'AKTYWNA';
    /**
     * Constant for value 'PRZETERMINOWANA'
     * @return string 'PRZETERMINOWANA'
     */
    const VALUE_PRZETERMINOWANA = 'PRZETERMINOWANA';
    /**
     * Return allowed values
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_NIEAKTYWNA
     * @uses self::VALUE_AKTYWNA
     * @uses self::VALUE_PRZETERMINOWANA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ERROR,
            self::VALUE_NIEAKTYWNA,
            self::VALUE_AKTYWNA,
            self::VALUE_PRZETERMINOWANA,
        ];
    }
}
