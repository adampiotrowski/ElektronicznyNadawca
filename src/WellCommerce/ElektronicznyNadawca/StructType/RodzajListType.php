<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rodzajListType StructType
 * @subpackage Structs
 */
class RodzajListType extends AbstractStructBase
{
    /**
     * The polecony
     * @var bool|null
     */
    protected ?bool $polecony = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * Constructor method for rodzajListType
     * @uses RodzajListType::setPolecony()
     * @uses RodzajListType::setKategoria()
     * @param bool $polecony
     * @param string $kategoria
     */
    public function __construct(?bool $polecony = null, ?string $kategoria = null)
    {
        $this
            ->setPolecony($polecony)
            ->setKategoria($kategoria);
    }
    /**
     * Get polecony value
     * @return bool|null
     */
    public function getPolecony(): ?bool
    {
        return $this->polecony;
    }
    /**
     * Set polecony value
     * @param bool $polecony
     * @return \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setPolecony(?bool $polecony = null): self
    {
        // validation for constraint: boolean
        if (!is_null($polecony) && !is_bool($polecony)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($polecony, true), gettype($polecony)), __LINE__);
        }
        $this->polecony = $polecony;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kategoria
     * @return \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;
        
        return $this;
    }
}
