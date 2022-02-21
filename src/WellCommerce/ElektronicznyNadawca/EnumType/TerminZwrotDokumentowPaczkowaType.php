<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminZwrotDokumentowPaczkowaType EnumType
 * @subpackage Enumerations
 */
class TerminZwrotDokumentowPaczkowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PACZKA_24'
     * @return string 'PACZKA_24'
     */
    const VALUE_PACZKA_24 = 'PACZKA_24';
    /**
     * Constant for value 'PACZKA_48'
     * @return string 'PACZKA_48'
     */
    const VALUE_PACZKA_48 = 'PACZKA_48';
    /**
     * Return allowed values
     * @uses self::VALUE_PACZKA_24
     * @uses self::VALUE_PACZKA_48
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PACZKA_24,
            self::VALUE_PACZKA_48,
        ];
    }
}
