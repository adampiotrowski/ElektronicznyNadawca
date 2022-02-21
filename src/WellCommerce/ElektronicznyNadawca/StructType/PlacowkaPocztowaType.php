<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placowkaPocztowaType StructType
 * @subpackage Structs
 */
class PlacowkaPocztowaType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $id;
    /**
     * The lokalizacjaGeograficzna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null;
    /**
     * The deliveryPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null;
    /**
     * The prefixNazwy
     * @var string|null
     */
    protected ?string $prefixNazwy = null;
    /**
     * The nazwa
     * @var string|null
     */
    protected ?string $nazwa = null;
    /**
     * The wojewodztwo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $wojewodztwo = null;
    /**
     * The powiat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $powiat = null;
    /**
     * The miejsce
     * @var string|null
     */
    protected ?string $miejsce = null;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 5
     * @var string|null
     */
    protected ?string $kodPocztowy = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 0
     * @var string|null
     */
    protected ?string $miejscowosc = null;
    /**
     * The ulica
     * @var string|null
     */
    protected ?string $ulica = null;
    /**
     * The numerDomu
     * @var string|null
     */
    protected ?string $numerDomu = null;
    /**
     * The numerLokalu
     * @var string|null
     */
    protected ?string $numerLokalu = null;
    /**
     * The nazwaWydruk
     * Meta information extracted from the WSDL
     * - documentation: Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     * @var string|null
     */
    protected ?string $nazwaWydruk = null;
    /**
     * The punktWydaniaEPrzesylki
     * @var bool|null
     */
    protected ?bool $punktWydaniaEPrzesylki = null;
    /**
     * The powiadomienieSMS
     * @var bool|null
     */
    protected ?bool $powiadomienieSMS = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowejPlus
     * @var bool|null
     */
    protected ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowej
     * @var bool|null
     */
    protected ?bool $punktWydaniaPrzesylkiBiznesowej = null;
    /**
     * The siecPlacowek
     * @var string|null
     */
    protected ?string $siecPlacowek = null;
    /**
     * The idZPO
     * @var string|null
     */
    protected ?string $idZPO = null;
    /**
     * Constructor method for placowkaPocztowaType
     * @uses PlacowkaPocztowaType::setId()
     * @uses PlacowkaPocztowaType::setLokalizacjaGeograficzna()
     * @uses PlacowkaPocztowaType::setDeliveryPath()
     * @uses PlacowkaPocztowaType::setPrefixNazwy()
     * @uses PlacowkaPocztowaType::setNazwa()
     * @uses PlacowkaPocztowaType::setWojewodztwo()
     * @uses PlacowkaPocztowaType::setPowiat()
     * @uses PlacowkaPocztowaType::setMiejsce()
     * @uses PlacowkaPocztowaType::setKodPocztowy()
     * @uses PlacowkaPocztowaType::setMiejscowosc()
     * @uses PlacowkaPocztowaType::setUlica()
     * @uses PlacowkaPocztowaType::setNumerDomu()
     * @uses PlacowkaPocztowaType::setNumerLokalu()
     * @uses PlacowkaPocztowaType::setNazwaWydruk()
     * @uses PlacowkaPocztowaType::setPunktWydaniaEPrzesylki()
     * @uses PlacowkaPocztowaType::setPowiadomienieSMS()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowejPlus()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowej()
     * @uses PlacowkaPocztowaType::setSiecPlacowek()
     * @uses PlacowkaPocztowaType::setIdZPO()
     * @param int $id
     * @param \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param string $kodPocztowy
     * @param string $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param bool $punktWydaniaEPrzesylki
     * @param bool $powiadomienieSMS
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @param string $siecPlacowek
     * @param string $idZPO
     */
    public function __construct(int $id, ?\WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null, ?string $prefixNazwy = null, ?string $nazwa = null, ?string $wojewodztwo = null, ?string $powiat = null, ?string $miejsce = null, ?string $kodPocztowy = null, ?string $miejscowosc = null, ?string $ulica = null, ?string $numerDomu = null, ?string $numerLokalu = null, ?string $nazwaWydruk = null, ?bool $punktWydaniaEPrzesylki = null, ?bool $powiadomienieSMS = null, ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null, ?bool $punktWydaniaPrzesylkiBiznesowej = null, ?string $siecPlacowek = null, ?string $idZPO = null)
    {
        $this
            ->setId($id)
            ->setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
            ->setDeliveryPath($deliveryPath)
            ->setPrefixNazwy($prefixNazwy)
            ->setNazwa($nazwa)
            ->setWojewodztwo($wojewodztwo)
            ->setPowiat($powiat)
            ->setMiejsce($miejsce)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setNazwaWydruk($nazwaWydruk)
            ->setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
            ->setPowiadomienieSMS($powiadomienieSMS)
            ->setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
            ->setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
            ->setSiecPlacowek($siecPlacowek)
            ->setIdZPO($idZPO);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get lokalizacjaGeograficzna value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType|null
     */
    public function getLokalizacjaGeograficzna(): ?\WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
    {
        return $this->lokalizacjaGeograficzna;
    }
    /**
     * Set lokalizacjaGeograficzna value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna(?\WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null): self
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
        
        return $this;
    }
    /**
     * Get deliveryPath value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType|null
     */
    public function getDeliveryPath(): ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType
    {
        return $this->deliveryPath;
    }
    /**
     * Set deliveryPath value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setDeliveryPath(?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null): self
    {
        $this->deliveryPath = $deliveryPath;
        
        return $this;
    }
    /**
     * Get prefixNazwy value
     * @return string|null
     */
    public function getPrefixNazwy(): ?string
    {
        return $this->prefixNazwy;
    }
    /**
     * Set prefixNazwy value
     * @param string $prefixNazwy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPrefixNazwy(?string $prefixNazwy = null): self
    {
        // validation for constraint: string
        if (!is_null($prefixNazwy) && !is_string($prefixNazwy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixNazwy, true), gettype($prefixNazwy)), __LINE__);
        }
        $this->prefixNazwy = $prefixNazwy;
        
        return $this;
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get wojewodztwo value
     * @return string|null
     */
    public function getWojewodztwo(): ?string
    {
        return $this->wojewodztwo;
    }
    /**
     * Set wojewodztwo value
     * @param string $wojewodztwo
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setWojewodztwo(?string $wojewodztwo = null): self
    {
        // validation for constraint: string
        if (!is_null($wojewodztwo) && !is_string($wojewodztwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wojewodztwo, true), gettype($wojewodztwo)), __LINE__);
        }
        $this->wojewodztwo = $wojewodztwo;
        
        return $this;
    }
    /**
     * Get powiat value
     * @return string|null
     */
    public function getPowiat(): ?string
    {
        return $this->powiat;
    }
    /**
     * Set powiat value
     * @param string $powiat
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiat(?string $powiat = null): self
    {
        // validation for constraint: string
        if (!is_null($powiat) && !is_string($powiat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiat, true), gettype($powiat)), __LINE__);
        }
        $this->powiat = $powiat;
        
        return $this;
    }
    /**
     * Get miejsce value
     * @return string|null
     */
    public function getMiejsce(): ?string
    {
        return $this->miejsce;
    }
    /**
     * Set miejsce value
     * @param string $miejsce
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejsce(?string $miejsce = null): self
    {
        // validation for constraint: string
        if (!is_null($miejsce) && !is_string($miejsce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejsce, true), gettype($miejsce)), __LINE__);
        }
        $this->miejsce = $miejsce;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: length(5)
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) !== 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 5', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setUlica(?string $ulica = null): self
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
        }
        $this->numerDomu = $numerDomu;
        
        return $this;
    }
    /**
     * Get numerLokalu value
     * @return string|null
     */
    public function getNumerLokalu(): ?string
    {
        return $this->numerLokalu;
    }
    /**
     * Set numerLokalu value
     * @param string $numerLokalu
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerLokalu) && !is_string($numerLokalu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerLokalu, true), gettype($numerLokalu)), __LINE__);
        }
        $this->numerLokalu = $numerLokalu;
        
        return $this;
    }
    /**
     * Get nazwaWydruk value
     * @return string|null
     */
    public function getNazwaWydruk(): ?string
    {
        return $this->nazwaWydruk;
    }
    /**
     * Set nazwaWydruk value
     * @param string $nazwaWydruk
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwaWydruk(?string $nazwaWydruk = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaWydruk) && !is_string($nazwaWydruk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaWydruk, true), gettype($nazwaWydruk)), __LINE__);
        }
        $this->nazwaWydruk = $nazwaWydruk;
        
        return $this;
    }
    /**
     * Get punktWydaniaEPrzesylki value
     * @return bool|null
     */
    public function getPunktWydaniaEPrzesylki(): ?bool
    {
        return $this->punktWydaniaEPrzesylki;
    }
    /**
     * Set punktWydaniaEPrzesylki value
     * @param bool $punktWydaniaEPrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki(?bool $punktWydaniaEPrzesylki = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaEPrzesylki) && !is_bool($punktWydaniaEPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaEPrzesylki, true), gettype($punktWydaniaEPrzesylki)), __LINE__);
        }
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Get powiadomienieSMS value
     * @return bool|null
     */
    public function getPowiadomienieSMS(): ?bool
    {
        return $this->powiadomienieSMS;
    }
    /**
     * Set powiadomienieSMS value
     * @param bool $powiadomienieSMS
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiadomienieSMS(?bool $powiadomienieSMS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($powiadomienieSMS) && !is_bool($powiadomienieSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($powiadomienieSMS, true), gettype($powiadomienieSMS)), __LINE__);
        }
        $this->powiadomienieSMS = $powiadomienieSMS;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowejPlus value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowejPlus value
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus(?bool $punktWydaniaPrzesylkiBiznesowejPlus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowejPlus) && !is_bool($punktWydaniaPrzesylkiBiznesowejPlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowejPlus, true), gettype($punktWydaniaPrzesylkiBiznesowejPlus)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowej value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowej(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowej value
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej(?bool $punktWydaniaPrzesylkiBiznesowej = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowej) && !is_bool($punktWydaniaPrzesylkiBiznesowej)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowej, true), gettype($punktWydaniaPrzesylkiBiznesowej)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
        
        return $this;
    }
    /**
     * Get siecPlacowek value
     * @return string|null
     */
    public function getSiecPlacowek(): ?string
    {
        return $this->siecPlacowek;
    }
    /**
     * Set siecPlacowek value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $siecPlacowek
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setSiecPlacowek(?string $siecPlacowek = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::valueIsValid($siecPlacowek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\SiecPlacowekEnum', is_array($siecPlacowek) ? implode(', ', $siecPlacowek) : var_export($siecPlacowek, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::getValidValues())), __LINE__);
        }
        $this->siecPlacowek = $siecPlacowek;
        
        return $this;
    }
    /**
     * Get idZPO value
     * @return string|null
     */
    public function getIdZPO(): ?string
    {
        return $this->idZPO;
    }
    /**
     * Set idZPO value
     * @param string $idZPO
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setIdZPO(?string $idZPO = null): self
    {
        // validation for constraint: string
        if (!is_null($idZPO) && !is_string($idZPO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idZPO, true), gettype($idZPO)), __LINE__);
        }
        $this->idZPO = $idZPO;
        
        return $this;
    }
}
