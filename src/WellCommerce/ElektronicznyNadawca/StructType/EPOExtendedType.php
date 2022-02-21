<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOExtendedType StructType
 * Meta information extracted from the WSDL
 * - documentation: atrybut zasadySpecjalne zostanie usunięty z EPOExtendedType do końca 2016 roku
 * @subpackage Structs
 */
class EPOExtendedType extends EPOType
{
    /**
     * The zasadySpecjalne
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
    /**
     * Constructor method for EPOExtendedType
     * @uses EPOExtendedType::setZasadySpecjalne()
     * @param string $zasadySpecjalne
     */
    public function __construct(?string $zasadySpecjalne = null)
    {
        $this
            ->setZasadySpecjalne($zasadySpecjalne);
    }
    /**
     * Get zasadySpecjalne value
     * @return string|null
     */
    public function getZasadySpecjalne(): ?string
    {
        return $this->zasadySpecjalne;
    }
    /**
     * Set zasadySpecjalne value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zasadySpecjalne
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPOExtendedType
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;
        
        return $this;
    }
}
