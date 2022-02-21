<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pocztexKrajowyType StructType
 * @subpackage Structs
 */
class PocztexKrajowyType extends PrzesylkaRejestrowanaType
{
    /**
     * The terminRodzaj
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $terminRodzaj;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $masa;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * - use: required
     * @var int
     */
    protected int $wartosc;
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $uiszczaOplate;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PobranieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The odbiorPrzesylkiOdNadawcy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The kopertaFirmowa
     * @var bool|null
     */
    protected ?bool $kopertaFirmowa = null;
    /**
     * The ostroznie
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The ponadgabaryt
     * @var bool|null
     */
    protected ?bool $ponadgabaryt = null;
    /**
     * The odleglosc
     * @var int|null
     */
    protected ?int $odleglosc = null;
    /**
     * The zawartosc
     * @var string|null
     */
    protected ?string $zawartosc = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @var bool|null
     */
    protected ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * Constructor method for pocztexKrajowyType
     * @uses PocztexKrajowyType::setTerminRodzaj()
     * @uses PocztexKrajowyType::setMasa()
     * @uses PocztexKrajowyType::setWartosc()
     * @uses PocztexKrajowyType::setUiszczaOplate()
     * @uses PocztexKrajowyType::setPobranie()
     * @uses PocztexKrajowyType::setOdbiorPrzesylkiOdNadawcy()
     * @uses PocztexKrajowyType::setDoreczenie()
     * @uses PocztexKrajowyType::setZwrotDokumentow()
     * @uses PocztexKrajowyType::setPotwierdzenieOdbioru()
     * @uses PocztexKrajowyType::setPotwierdzenieDoreczenia()
     * @uses PocztexKrajowyType::setUbezpieczenie()
     * @uses PocztexKrajowyType::setPosteRestante()
     * @uses PocztexKrajowyType::setKopertaFirmowa()
     * @uses PocztexKrajowyType::setOstroznie()
     * @uses PocztexKrajowyType::setPonadgabaryt()
     * @uses PocztexKrajowyType::setOdleglosc()
     * @uses PocztexKrajowyType::setZawartosc()
     * @uses PocztexKrajowyType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @param string $terminRodzaj
     * @param int $masa
     * @param int $wartosc
     * @param string $uiszczaOplate
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param bool $posteRestante
     * @param bool $kopertaFirmowa
     * @param bool $ostroznie
     * @param bool $ponadgabaryt
     * @param int $odleglosc
     * @param string $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct(string $terminRodzaj, int $masa, int $wartosc, string $uiszczaOplate, ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie = null, ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow = null, ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru = null, ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?bool $posteRestante = false, ?bool $kopertaFirmowa = null, ?bool $ostroznie = null, ?bool $ponadgabaryt = null, ?int $odleglosc = null, ?string $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        $this
            ->setTerminRodzaj($terminRodzaj)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setUiszczaOplate($uiszczaOplate)
            ->setPobranie($pobranie)
            ->setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
            ->setDoreczenie($doreczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setPosteRestante($posteRestante)
            ->setKopertaFirmowa($kopertaFirmowa)
            ->setOstroznie($ostroznie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setOdleglosc($odleglosc)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce);
    }
    /**
     * Get terminRodzaj value
     * @return string
     */
    public function getTerminRodzaj(): string
    {
        return $this->terminRodzaj;
    }
    /**
     * Set terminRodzaj value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $terminRodzaj
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setTerminRodzaj(string $terminRodzaj): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid($terminRodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\TerminRodzajType', is_array($terminRodzaj) ? implode(', ', $terminRodzaj) : var_export($terminRodzaj, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues())), __LINE__);
        }
        $this->terminRodzaj = $terminRodzaj;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int
     */
    public function getMasa(): int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setMasa(int $masa): self
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
     * Get wartosc value
     * @return int
     */
    public function getWartosc(): int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setWartosc(int $wartosc): self
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
    /**
     * Get uiszczaOplate value
     * @return string
     */
    public function getUiszczaOplate(): string
    {
        return $this->uiszczaOplate;
    }
    /**
     * Set uiszczaOplate value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uiszczaOplate
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setUiszczaOplate(string $uiszczaOplate): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPobranie(?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get odbiorPrzesylkiOdNadawcy value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    public function getOdbiorPrzesylkiOdNadawcy(): ?\WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }
    /**
     * Set odbiorPrzesylkiOdNadawcy value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setOdbiorPrzesylkiOdNadawcy(?\WellCommerce\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null): self
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType|null
     */
    public function getDoreczenie(): ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setDoreczenie(?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType|null
     */
    public function getZwrotDokumentow(): ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setZwrotDokumentow(?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType|null
     */
    public function getPotwierdzenieOdbioru(): ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPotwierdzenieOdbioru(?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
        return $this;
    }
    /**
     * Get potwierdzenieDoreczenia value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPotwierdzenieDoreczenia(?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get ubezpieczenie value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }
    /**
     * Set ubezpieczenie value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setUbezpieczenie(?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * Get kopertaFirmowa value
     * @return bool|null
     */
    public function getKopertaFirmowa(): ?bool
    {
        return $this->kopertaFirmowa;
    }
    /**
     * Set kopertaFirmowa value
     * @param bool $kopertaFirmowa
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setKopertaFirmowa(?bool $kopertaFirmowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kopertaFirmowa) && !is_bool($kopertaFirmowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kopertaFirmowa, true), gettype($kopertaFirmowa)), __LINE__);
        }
        $this->kopertaFirmowa = $kopertaFirmowa;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * Get ponadgabaryt value
     * @return bool|null
     */
    public function getPonadgabaryt(): ?bool
    {
        return $this->ponadgabaryt;
    }
    /**
     * Set ponadgabaryt value
     * @param bool $ponadgabaryt
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ponadgabaryt) && !is_bool($ponadgabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ponadgabaryt, true), gettype($ponadgabaryt)), __LINE__);
        }
        $this->ponadgabaryt = $ponadgabaryt;
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }
    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
        return $this;
    }
}
