<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczenieType StructType
 * @subpackage Structs
 */
class UbezpieczenieType extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $rodzaj;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - use: required
     * @var float
     */
    protected float $kwota;
    /**
     * The akceptacjaOWU
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $akceptacjaOWU = null;
    /**
     * Constructor method for ubezpieczenieType
     * @uses UbezpieczenieType::setRodzaj()
     * @uses UbezpieczenieType::setKwota()
     * @uses UbezpieczenieType::setAkceptacjaOWU()
     * @param string $rodzaj
     * @param float $kwota
     * @param bool $akceptacjaOWU
     */
    public function __construct(string $rodzaj, float $kwota, ?bool $akceptacjaOWU = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setKwota($kwota)
            ->setAkceptacjaOWU($akceptacjaOWU);
    }
    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzaj
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setRodzaj(string $rodzaj): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::valueIsValid($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get kwota value
     * @return float
     */
    public function getKwota(): float
    {
        return $this->kwota;
    }
    /**
     * Set kwota value
     * @param float $kwota
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setKwota(float $kwota): self
    {
        // validation for constraint: float
        if (!is_null($kwota) && !(is_float($kwota) || is_numeric($kwota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;
        
        return $this;
    }
    /**
     * Get akceptacjaOWU value
     * @return bool|null
     */
    public function getAkceptacjaOWU(): ?bool
    {
        return $this->akceptacjaOWU;
    }
    /**
     * Set akceptacjaOWU value
     * @param bool $akceptacjaOWU
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setAkceptacjaOWU(?bool $akceptacjaOWU = null): self
    {
        // validation for constraint: boolean
        if (!is_null($akceptacjaOWU) && !is_bool($akceptacjaOWU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($akceptacjaOWU, true), gettype($akceptacjaOWU)), __LINE__);
        }
        $this->akceptacjaOWU = $akceptacjaOWU;
        
        return $this;
    }
}
