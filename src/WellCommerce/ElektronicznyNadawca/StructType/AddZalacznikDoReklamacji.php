<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addZalacznikDoReklamacji StructType
 * @subpackage Structs
 */
class AddZalacznikDoReklamacji extends AbstractStructBase
{
    /**
     * The idReklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $idReklamacja;
    /**
     * The zalacznik
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[]
     */
    protected array $zalacznik;
    /**
     * Constructor method for addZalacznikDoReklamacji
     * @uses AddZalacznikDoReklamacji::setIdReklamacja()
     * @uses AddZalacznikDoReklamacji::setZalacznik()
     * @param string $idReklamacja
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[] $zalacznik
     */
    public function __construct(string $idReklamacja, array $zalacznik)
    {
        $this
            ->setIdReklamacja($idReklamacja)
            ->setZalacznik($zalacznik);
    }
    /**
     * Get idReklamacja value
     * @return string
     */
    public function getIdReklamacja(): string
    {
        return $this->idReklamacja;
    }
    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function setIdReklamacja(string $idReklamacja): self
    {
        // validation for constraint: string
        if (!is_null($idReklamacja) && !is_string($idReklamacja)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idReklamacja, true), gettype($idReklamacja)), __LINE__);
        }
        $this->idReklamacja = $idReklamacja;
        
        return $this;
    }
    /**
     * Get zalacznik value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[]
     */
    public function getZalacznik(): array
    {
        return $this->zalacznik;
    }
    /**
     * This method is responsible for validating the values passed to the setZalacznik method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZalacznik method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateZalacznikForArrayConstraintsFromSetZalacznik(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addZalacznikDoReklamacjiZalacznikItem) {
            // validation for constraint: itemType
            if (!$addZalacznikDoReklamacjiZalacznikItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType) {
                $invalidValues[] = is_object($addZalacznikDoReklamacjiZalacznikItem) ? get_class($addZalacznikDoReklamacjiZalacznikItem) : sprintf('%s(%s)', gettype($addZalacznikDoReklamacjiZalacznikItem), var_export($addZalacznikDoReklamacjiZalacznikItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The zalacznik property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set zalacznik value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[] $zalacznik
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function setZalacznik(array $zalacznik): self
    {
        // validation for constraint: array
        if ('' !== ($zalacznikArrayErrorMessage = self::validateZalacznikForArrayConstraintsFromSetZalacznik($zalacznik))) {
            throw new InvalidArgumentException($zalacznikArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($zalacznik) && count($zalacznik) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($zalacznik)), __LINE__);
        }
        $this->zalacznik = $zalacznik;
        
        return $this;
    }
    /**
     * Add item to zalacznik value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function addToZalacznik(\WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType) {
            throw new InvalidArgumentException(sprintf('The zalacznik property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->zalacznik) && count($this->zalacznik) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->zalacznik)), __LINE__);
        }
        $this->zalacznik[] = $item;
        
        return $this;
    }
}
