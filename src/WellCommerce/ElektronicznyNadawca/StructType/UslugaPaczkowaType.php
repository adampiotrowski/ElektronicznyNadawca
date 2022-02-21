<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uslugaPaczkowaType StructType
 * @subpackage Structs
 */
class UslugaPaczkowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[]
     */
    protected array $subPrzesylka;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PobranieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zwrotDokumentow = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\EPOType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\EPOType $epo = null;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
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
     * The ponadgabaryt
     * @var bool|null
     */
    protected ?bool $ponadgabaryt = null;
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
     * The ostroznie
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The uiszczaOplate
     * @var string|null
     */
    protected ?string $uiszczaOplate = null;
    /**
     * The termin
     * @var string|null
     */
    protected ?string $termin = null;
    /**
     * The opakowanie
     * @var string|null
     */
    protected ?string $opakowanie = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    protected ?string $numerTransakcjiOdbioru = null;
    /**
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * Constructor method for uslugaPaczkowaType
     * @uses UslugaPaczkowaType::setSubPrzesylka()
     * @uses UslugaPaczkowaType::setPobranie()
     * @uses UslugaPaczkowaType::setPotwierdzenieDoreczenia()
     * @uses UslugaPaczkowaType::setUrzadWydaniaEPrzesylki()
     * @uses UslugaPaczkowaType::setPotwierdzenieOdbioru()
     * @uses UslugaPaczkowaType::setUbezpieczenie()
     * @uses UslugaPaczkowaType::setZwrotDokumentow()
     * @uses UslugaPaczkowaType::setDoreczenie()
     * @uses UslugaPaczkowaType::setEpo()
     * @uses UslugaPaczkowaType::setZasadySpecjalne()
     * @uses UslugaPaczkowaType::setMasa()
     * @uses UslugaPaczkowaType::setWartosc()
     * @uses UslugaPaczkowaType::setPonadgabaryt()
     * @uses UslugaPaczkowaType::setZawartosc()
     * @uses UslugaPaczkowaType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses UslugaPaczkowaType::setOstroznie()
     * @uses UslugaPaczkowaType::setUiszczaOplate()
     * @uses UslugaPaczkowaType::setTermin()
     * @uses UslugaPaczkowaType::setOpakowanie()
     * @uses UslugaPaczkowaType::setNumerPrzesylkiKlienta()
     * @uses UslugaPaczkowaType::setNumerTransakcjiOdbioru()
     * @uses UslugaPaczkowaType::setGabaryt()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[] $subPrzesylka
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $zwrotDokumentow
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie
     * @param \WellCommerce\ElektronicznyNadawca\StructType\EPOType $epo
     * @param string $zasadySpecjalne
     * @param int $masa
     * @param int $wartosc
     * @param bool $ponadgabaryt
     * @param string $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param bool $ostroznie
     * @param string $uiszczaOplate
     * @param string $termin
     * @param string $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param string $numerTransakcjiOdbioru
     * @param string $gabaryt
     */
    public function __construct(array $subPrzesylka, ?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru = null, ?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $zwrotDokumentow = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie = null, ?\WellCommerce\ElektronicznyNadawca\StructType\EPOType $epo = null, ?string $zasadySpecjalne = null, ?int $masa = null, ?int $wartosc = null, ?bool $ponadgabaryt = null, ?string $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?bool $ostroznie = null, ?string $uiszczaOplate = null, ?string $termin = null, ?string $opakowanie = null, ?string $numerPrzesylkiKlienta = null, ?string $numerTransakcjiOdbioru = null, ?string $gabaryt = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPobranie($pobranie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setDoreczenie($doreczenie)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setPonadgabaryt($ponadgabaryt)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setOstroznie($ostroznie)
            ->setUiszczaOplate($uiszczaOplate)
            ->setTermin($termin)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get subPrzesylka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[]
     */
    public function getSubPrzesylka(): array
    {
        return isset($this->subPrzesylka) ? $this->subPrzesylka : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintsFromSetSubPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $uslugaPaczkowaTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$uslugaPaczkowaTypeSubPrzesylkaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType) {
                $invalidValues[] = is_object($uslugaPaczkowaTypeSubPrzesylkaItem) ? get_class($uslugaPaczkowaTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($uslugaPaczkowaTypeSubPrzesylkaItem), var_export($uslugaPaczkowaTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubPrzesylkaForChoiceConstraintsFromSetSubPrzesylka($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set subPrzesylka value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[] $subPrzesylka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setSubPrzesylka(array $subPrzesylka): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintsFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($subPrzesylkaChoiceErrorMessage = self::validateSubPrzesylkaForChoiceConstraintsFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($subPrzesylka) && count($subPrzesylka) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($subPrzesylka)), __LINE__);
        }
        if (is_null($subPrzesylka) || (is_array($subPrzesylka) && empty($subPrzesylka))) {
            unset($this->subPrzesylka);
        } else {
            $this->subPrzesylka = $subPrzesylka;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSubPrzesylka($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function addToSubPrzesylka(\WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSubPrzesylka($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->subPrzesylka) && count($this->subPrzesylka) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka[] = $item;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPobranie(?\WellCommerce\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPotwierdzenieDoreczenia(?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
    {
        return isset($this->urzadWydaniaEPrzesylki) ? $this->urzadWydaniaEPrzesylki : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUrzadWydaniaEPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzadWydaniaEPrzesylki method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUrzadWydaniaEPrzesylkiForChoiceConstraintsFromSetUrzadWydaniaEPrzesylki($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'subPrzesylka',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property urzadWydaniaEPrzesylki can\'t be set as the property %s is already set. Only one property must be set among these properties: urzadWydaniaEPrzesylki, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setUrzadWydaniaEPrzesylki(?\WellCommerce\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
    {
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($urzadWydaniaEPrzesylkiChoiceErrorMessage = self::validateUrzadWydaniaEPrzesylkiForChoiceConstraintsFromSetUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki))) {
            throw new InvalidArgumentException($urzadWydaniaEPrzesylkiChoiceErrorMessage, __LINE__);
        }
        if (is_null($urzadWydaniaEPrzesylki) || (is_array($urzadWydaniaEPrzesylki) && empty($urzadWydaniaEPrzesylki))) {
            unset($this->urzadWydaniaEPrzesylki);
        } else {
            $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        }
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPotwierdzenieOdbioru(?\WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setUbezpieczenie(?\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return string|null
     */
    public function getZwrotDokumentow(): ?string
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zwrotDokumentow
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setZwrotDokumentow(?string $zwrotDokumentow = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::valueIsValid($zwrotDokumentow)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType', is_array($zwrotDokumentow) ? implode(', ', $zwrotDokumentow) : var_export($zwrotDokumentow, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::getValidValues())), __LINE__);
        }
        $this->zwrotDokumentow = $zwrotDokumentow;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType|null
     */
    public function getDoreczenie(): ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setDoreczenie(?\WellCommerce\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get epo value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPOType|null
     */
    public function getEpo(): ?\WellCommerce\ElektronicznyNadawca\StructType\EPOType
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\EPOType $epo
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setEpo(?\WellCommerce\ElektronicznyNadawca\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return $this->uiszczaOplate;
    }
    /**
     * Set uiszczaOplate value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uiszczaOplate
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;
        
        return $this;
    }
    /**
     * Get termin value
     * @return string|null
     */
    public function getTermin(): ?string
    {
        return $this->termin;
    }
    /**
     * Set termin value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminPaczkowaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminPaczkowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $termin
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setTermin(?string $termin = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\TerminPaczkowaType::valueIsValid($termin)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\TerminPaczkowaType', is_array($termin) ? implode(', ', $termin) : var_export($termin, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\TerminPaczkowaType::getValidValues())), __LINE__);
        }
        $this->termin = $termin;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return string|null
     */
    public function getOpakowanie(): ?string
    {
        return $this->opakowanie;
    }
    /**
     * Set opakowanie value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $opakowanie
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::valueIsValid($opakowanie)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType', is_array($opakowanie) ? implode(', ', $opakowanie) : var_export($opakowanie, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::getValidValues())), __LINE__);
        }
        $this->opakowanie = $opakowanie;
        
        return $this;
    }
    /**
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get numerTransakcjiOdbioru value
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru(): ?string
    {
        return $this->numerTransakcjiOdbioru;
    }
    /**
     * Set numerTransakcjiOdbioru value
     * @param string $numerTransakcjiOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($numerTransakcjiOdbioru) && !is_string($numerTransakcjiOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTransakcjiOdbioru, true), gettype($numerTransakcjiOdbioru)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numerTransakcjiOdbioru) && mb_strlen((string) $numerTransakcjiOdbioru) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $numerTransakcjiOdbioru)), __LINE__);
        }
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\GabarytType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
