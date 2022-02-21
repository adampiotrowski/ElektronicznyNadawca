<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kartaType StructType
 * @subpackage Structs
 */
class KartaType extends AbstractStructBase
{
    /**
     * The adresKorespondencyjny
     * Meta information extracted from the WSDL
     * - documentation: Lista adresów korespondencyjnych dla kart typu 2
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny[]
     */
    protected ?array $adresKorespondencyjny = null;
    /**
     * The idKarta
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The opis
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The aktywna
     * @var bool|null
     */
    protected ?bool $aktywna = null;
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - documentation: Typ karty. Dopuszczalne wartości: 1-do nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych wartości może być rozszerzona w przyszłości.
     * @var int|null
     */
    protected ?int $typ = null;
    /**
     * Constructor method for kartaType
     * @uses KartaType::setAdresKorespondencyjny()
     * @uses KartaType::setIdKarta()
     * @uses KartaType::setOpis()
     * @uses KartaType::setAktywna()
     * @uses KartaType::setTyp()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny[] $adresKorespondencyjny
     * @param int $idKarta
     * @param string $opis
     * @param bool $aktywna
     * @param int $typ
     */
    public function __construct(?array $adresKorespondencyjny = null, ?int $idKarta = null, ?string $opis = null, ?bool $aktywna = null, ?int $typ = null)
    {
        $this
            ->setAdresKorespondencyjny($adresKorespondencyjny)
            ->setIdKarta($idKarta)
            ->setOpis($opis)
            ->setAktywna($aktywna)
            ->setTyp($typ);
    }
    /**
     * Get adresKorespondencyjny value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny[]
     */
    public function getAdresKorespondencyjny(): ?array
    {
        return $this->adresKorespondencyjny;
    }
    /**
     * This method is responsible for validating the values passed to the setAdresKorespondencyjny method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdresKorespondencyjny method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdresKorespondencyjnyForArrayConstraintsFromSetAdresKorespondencyjny(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $kartaTypeAdresKorespondencyjnyItem) {
            // validation for constraint: itemType
            if (!$kartaTypeAdresKorespondencyjnyItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny) {
                $invalidValues[] = is_object($kartaTypeAdresKorespondencyjnyItem) ? get_class($kartaTypeAdresKorespondencyjnyItem) : sprintf('%s(%s)', gettype($kartaTypeAdresKorespondencyjnyItem), var_export($kartaTypeAdresKorespondencyjnyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The adresKorespondencyjny property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set adresKorespondencyjny value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny[] $adresKorespondencyjny
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function setAdresKorespondencyjny(?array $adresKorespondencyjny = null): self
    {
        // validation for constraint: array
        if ('' !== ($adresKorespondencyjnyArrayErrorMessage = self::validateAdresKorespondencyjnyForArrayConstraintsFromSetAdresKorespondencyjny($adresKorespondencyjny))) {
            throw new InvalidArgumentException($adresKorespondencyjnyArrayErrorMessage, __LINE__);
        }
        $this->adresKorespondencyjny = $adresKorespondencyjny;
        
        return $this;
    }
    /**
     * Add item to adresKorespondencyjny value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function addToAdresKorespondencyjny(\WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny) {
            throw new InvalidArgumentException(sprintf('The adresKorespondencyjny property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AdresKorespondencyjny, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->adresKorespondencyjny[] = $item;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get aktywna value
     * @return bool|null
     */
    public function getAktywna(): ?bool
    {
        return $this->aktywna;
    }
    /**
     * Set aktywna value
     * @param bool $aktywna
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function setAktywna(?bool $aktywna = null): self
    {
        // validation for constraint: boolean
        if (!is_null($aktywna) && !is_bool($aktywna)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aktywna, true), gettype($aktywna)), __LINE__);
        }
        $this->aktywna = $aktywna;
        
        return $this;
    }
    /**
     * Get typ value
     * @return int|null
     */
    public function getTyp(): ?int
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param int $typ
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType
     */
    public function setTyp(?int $typ = null): self
    {
        // validation for constraint: int
        if (!is_null($typ) && !(is_int($typ) || ctype_digit($typ))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typ, true), gettype($typ)), __LINE__);
        }
        $this->typ = $typ;
        
        return $this;
    }
}
