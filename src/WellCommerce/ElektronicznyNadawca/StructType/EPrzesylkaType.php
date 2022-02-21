<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ePrzesylkaType StructType
 * @subpackage Structs
 */
class EPrzesylkaType extends PrzesylkaRejestrowanaType
{
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PobranieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The eSposobPowiadomieniaAdresata
     * @var string|null
     */
    protected ?string $eSposobPowiadomieniaAdresata = null;
    /**
     * The eSposobPowiadomieniaNadawcy
     * @var string|null
     */
    protected ?string $eSposobPowiadomieniaNadawcy = null;
    /**
     * The eKontaktAdresata
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * @var string|null
     */
    protected ?string $eKontaktAdresata = null;
    /**
     * The eKontaktNadawcy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * @var string|null
     */
    protected ?string $eKontaktNadawcy = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $wartosc = null;
    /**
     * Constructor method for ePrzesylkaType
     * @uses EPrzesylkaType::setUrzadWydaniaEPrzesylki()
     * @uses EPrzesylkaType::setPobranie()
     * @uses EPrzesylkaType::setMasa()
     * @uses EPrzesylkaType::setESposobPowiadomieniaAdresata()
     * @uses EPrzesylkaType::setESposobPowiadomieniaNadawcy()
     * @uses EPrzesylkaType::setEKontaktAdresata()
     * @uses EPrzesylkaType::setEKontaktNadawcy()
     * @uses EPrzesylkaType::setOstroznie()
     * @uses EPrzesylkaType::setWartosc()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param int $masa
     * @param string $eSposobPowiadomieniaAdresata
     * @param string $eSposobPowiadomieniaNadawcy
     * @param string $eKontaktAdresata
     * @param string $eKontaktNadawcy
     * @param bool $ostroznie
     * @param int $wartosc
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki, ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?int $masa = null, ?string $eSposobPowiadomieniaAdresata = null, ?string $eSposobPowiadomieniaNadawcy = null, ?string $eKontaktAdresata = null, ?string $eKontaktNadawcy = null, ?bool $ostroznie = null, ?int $wartosc = null)
    {
        $this
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPobranie($pobranie)
            ->setMasa($masa)
            ->setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
            ->setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy)
            ->setEKontaktAdresata($eKontaktAdresata)
            ->setEKontaktNadawcy($eKontaktNadawcy)
            ->setOstroznie($ostroznie)
            ->setWartosc($wartosc);
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki(): \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setUrzadWydaniaEPrzesylki(\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki): self
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Get pobranie value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie(): ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setPobranie(?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setMasa(?int $masa = null): self
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get eSposobPowiadomieniaAdresata value
     * @return string|null
     */
    public function getESposobPowiadomieniaAdresata(): ?string
    {
        return $this->eSposobPowiadomieniaAdresata;
    }
    /**
     * Set eSposobPowiadomieniaAdresata value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eSposobPowiadomieniaAdresata
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setESposobPowiadomieniaAdresata(?string $eSposobPowiadomieniaAdresata = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaAdresata)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaAdresata) ? implode(', ', $eSposobPowiadomieniaAdresata) : var_export($eSposobPowiadomieniaAdresata, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
        
        return $this;
    }
    /**
     * Get eSposobPowiadomieniaNadawcy value
     * @return string|null
     */
    public function getESposobPowiadomieniaNadawcy(): ?string
    {
        return $this->eSposobPowiadomieniaNadawcy;
    }
    /**
     * Set eSposobPowiadomieniaNadawcy value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eSposobPowiadomieniaNadawcy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setESposobPowiadomieniaNadawcy(?string $eSposobPowiadomieniaNadawcy = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaNadawcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaNadawcy) ? implode(', ', $eSposobPowiadomieniaNadawcy) : var_export($eSposobPowiadomieniaNadawcy, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;
        
        return $this;
    }
    /**
     * Get eKontaktAdresata value
     * @return string|null
     */
    public function getEKontaktAdresata(): ?string
    {
        return $this->eKontaktAdresata;
    }
    /**
     * Set eKontaktAdresata value
     * @param string $eKontaktAdresata
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setEKontaktAdresata(?string $eKontaktAdresata = null): self
    {
        // validation for constraint: string
        if (!is_null($eKontaktAdresata) && !is_string($eKontaktAdresata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktAdresata, true), gettype($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktAdresata) && mb_strlen((string) $eKontaktAdresata) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktAdresata) && mb_strlen((string) $eKontaktAdresata) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $eKontaktAdresata)), __LINE__);
        }
        $this->eKontaktAdresata = $eKontaktAdresata;
        
        return $this;
    }
    /**
     * Get eKontaktNadawcy value
     * @return string|null
     */
    public function getEKontaktNadawcy(): ?string
    {
        return $this->eKontaktNadawcy;
    }
    /**
     * Set eKontaktNadawcy value
     * @param string $eKontaktNadawcy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setEKontaktNadawcy(?string $eKontaktNadawcy = null): self
    {
        // validation for constraint: string
        if (!is_null($eKontaktNadawcy) && !is_string($eKontaktNadawcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktNadawcy, true), gettype($eKontaktNadawcy)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktNadawcy) && mb_strlen((string) $eKontaktNadawcy) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $eKontaktNadawcy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktNadawcy) && mb_strlen((string) $eKontaktNadawcy) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $eKontaktNadawcy)), __LINE__);
        }
        $this->eKontaktNadawcy = $eKontaktNadawcy;
        
        return $this;
    }
    /**
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }
    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;
        
        return $this;
    }
}
