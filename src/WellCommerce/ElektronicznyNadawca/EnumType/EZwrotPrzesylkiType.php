<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eZwrotPrzesylkiType EnumType
 * @subpackage Enumerations
 */
class EZwrotPrzesylkiType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ZWROTPACZKA48'
     * @return string 'ZWROTPACZKA48'
     */
    const VALUE_ZWROTPACZKA_48 = 'ZWROTPACZKA48';
    /**
     * Constant for value 'ZWROTKURIEREKSPRES24'
     * @return string 'ZWROTKURIEREKSPRES24'
     */
    const VALUE_ZWROTKURIEREKSPRES_24 = 'ZWROTKURIEREKSPRES24';
    /**
     * Return allowed values
     * @uses self::VALUE_ZWROTPACZKA_48
     * @uses self::VALUE_ZWROTKURIEREKSPRES_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ZWROTPACZKA_48,
            self::VALUE_ZWROTKURIEREKSPRES_24,
        ];
    }
}
