<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaZagranicznaType StructType
 * @subpackage Structs
 */
class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adres = null;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - documentation: Element określający zawartość przesyłki. Aktualnie dopuszczalne wartości: KORESPONDENCJA DOKUMENTY_PONIZEJ_250G DOKUMENTY_POWYZEJ_250G TOWARY
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zawartosc = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
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
     * The ekspres
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ekspres = null;
    /**
     * The kraj
     * @var string|null
     */
    protected ?string $kraj = null;
    /**
     * Constructor method for przesylkaZagranicznaType
     * @uses PrzesylkaZagranicznaType::setAdres()
     * @uses PrzesylkaZagranicznaType::setNadawca()
     * @uses PrzesylkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaZagranicznaType::setZawartosc()
     * @uses PrzesylkaZagranicznaType::setPosteRestante()
     * @uses PrzesylkaZagranicznaType::setKategoria()
     * @uses PrzesylkaZagranicznaType::setMasa()
     * @uses PrzesylkaZagranicznaType::setEkspres()
     * @uses PrzesylkaZagranicznaType::setKraj()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $adres
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $zawartosc
     * @param bool $posteRestante
     * @param string $kategoria
     * @param int $masa
     * @param bool $ekspres
     * @param string $kraj
     */
    public function __construct(?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adres = null, ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $zawartosc = null, ?bool $posteRestante = false, ?string $kategoria = null, ?int $masa = null, ?bool $ekspres = false, ?string $kraj = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setZawartosc($zawartosc)
            ->setPosteRestante($posteRestante)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setEkspres($ekspres)
            ->setKraj($kraj);
    }
    /**
     * Get adres value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdres(): ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $adres
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setAdres(?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get nadawca value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca(): ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->nadawca;
    }
    /**
     * Set nadawca value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setNadawca(?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
    /**
     * Get deklaracjaCelna2 value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }
    /**
     * Set deklaracjaCelna2 value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setDeklaracjaCelna2(?\WellCommerce\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * Get ekspres value
     * @return bool|null
     */
    public function getEkspres(): ?bool
    {
        return $this->ekspres;
    }
    /**
     * Set ekspres value
     * @param bool $ekspres
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setEkspres(?bool $ekspres = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ekspres) && !is_bool($ekspres)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ekspres, true), gettype($ekspres)), __LINE__);
        }
        $this->ekspres = $ekspres;
        
        return $this;
    }
    /**
     * Get kraj value
     * @return string|null
     */
    public function getKraj(): ?string
    {
        return $this->kraj;
    }
    /**
     * Set kraj value
     * @param string $kraj
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setKraj(?string $kraj = null): self
    {
        // validation for constraint: string
        if (!is_null($kraj) && !is_string($kraj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kraj, true), gettype($kraj)), __LINE__);
        }
        $this->kraj = $kraj;
        
        return $this;
    }
}
