<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamowanaPrzesylkaType StructType
 * @subpackage Structs
 */
class ReklamowanaPrzesylkaType extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji;
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dataNadania;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The powodReklamacjiOpis
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $powodReklamacjiOpis = null;
    /**
     * The odszkodowanie
     * @var int|null
     */
    protected ?int $odszkodowanie = null;
    /**
     * The oplata
     * @var int|null
     */
    protected ?int $oplata = null;
    /**
     * The oczekiwaneOdszkodowanie
     * @var int|null
     */
    protected ?int $oczekiwaneOdszkodowanie = null;
    /**
     * Constructor method for reklamowanaPrzesylkaType
     * @uses ReklamowanaPrzesylkaType::setPrzesylka()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacji()
     * @uses ReklamowanaPrzesylkaType::setDataNadania()
     * @uses ReklamowanaPrzesylkaType::setUrzadNadania()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacjiOpis()
     * @uses ReklamowanaPrzesylkaType::setOdszkodowanie()
     * @uses ReklamowanaPrzesylkaType::setOplata()
     * @uses ReklamowanaPrzesylkaType::setOczekiwaneOdszkodowanie()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     * @param string $dataNadania
     * @param int $urzadNadania
     * @param string $powodReklamacjiOpis
     * @param int $odszkodowanie
     * @param int $oplata
     * @param int $oczekiwaneOdszkodowanie
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka, \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji, string $dataNadania, ?int $urzadNadania = null, ?string $powodReklamacjiOpis = null, ?int $odszkodowanie = null, ?int $oplata = null, ?int $oczekiwaneOdszkodowanie = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setPowodReklamacji($powodReklamacji)
            ->setDataNadania($dataNadania)
            ->setUrzadNadania($urzadNadania)
            ->setPowodReklamacjiOpis($powodReklamacjiOpis)
            ->setOdszkodowanie($odszkodowanie)
            ->setOplata($oplata)
            ->setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie);
    }
    /**
     * Get przesylka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function getPrzesylka(): \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPrzesylka(\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Get powodReklamacji value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function getPowodReklamacji(): \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType
    {
        return $this->powodReklamacji;
    }
    /**
     * Set powodReklamacji value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacji(\WellCommerce\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji): self
    {
        $this->powodReklamacji = $powodReklamacji;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string
     */
    public function getDataNadania(): string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setDataNadania(string $dataNadania): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get powodReklamacjiOpis value
     * @return string|null
     */
    public function getPowodReklamacjiOpis(): ?string
    {
        return $this->powodReklamacjiOpis;
    }
    /**
     * Set powodReklamacjiOpis value
     * @param string $powodReklamacjiOpis
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis(?string $powodReklamacjiOpis = null): self
    {
        // validation for constraint: string
        if (!is_null($powodReklamacjiOpis) && !is_string($powodReklamacjiOpis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodReklamacjiOpis, true), gettype($powodReklamacjiOpis)), __LINE__);
        }
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;
        
        return $this;
    }
    /**
     * Get odszkodowanie value
     * @return int|null
     */
    public function getOdszkodowanie(): ?int
    {
        return $this->odszkodowanie;
    }
    /**
     * Set odszkodowanie value
     * @param int $odszkodowanie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOdszkodowanie(?int $odszkodowanie = null): self
    {
        // validation for constraint: int
        if (!is_null($odszkodowanie) && !(is_int($odszkodowanie) || ctype_digit($odszkodowanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odszkodowanie, true), gettype($odszkodowanie)), __LINE__);
        }
        $this->odszkodowanie = $odszkodowanie;
        
        return $this;
    }
    /**
     * Get oplata value
     * @return int|null
     */
    public function getOplata(): ?int
    {
        return $this->oplata;
    }
    /**
     * Set oplata value
     * @param int $oplata
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOplata(?int $oplata = null): self
    {
        // validation for constraint: int
        if (!is_null($oplata) && !(is_int($oplata) || ctype_digit($oplata))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oplata, true), gettype($oplata)), __LINE__);
        }
        $this->oplata = $oplata;
        
        return $this;
    }
    /**
     * Get oczekiwaneOdszkodowanie value
     * @return int|null
     */
    public function getOczekiwaneOdszkodowanie(): ?int
    {
        return $this->oczekiwaneOdszkodowanie;
    }
    /**
     * Set oczekiwaneOdszkodowanie value
     * @param int $oczekiwaneOdszkodowanie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOczekiwaneOdszkodowanie(?int $oczekiwaneOdszkodowanie = null): self
    {
        // validation for constraint: int
        if (!is_null($oczekiwaneOdszkodowanie) && !(is_int($oczekiwaneOdszkodowanie) || ctype_digit($oczekiwaneOdszkodowanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oczekiwaneOdszkodowanie, true), gettype($oczekiwaneOdszkodowanie)), __LINE__);
        }
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
        
        return $this;
    }
}
