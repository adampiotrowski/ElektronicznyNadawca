<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKartyResponse StructType
 * @subpackage Structs
 */
class GetKartyResponse extends AbstractStructBase
{
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\KartaType[]
     */
    protected ?array $karta = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKartyResponse
     * @uses GetKartyResponse::setKarta()
     * @uses GetKartyResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $karta = null, ?array $error = null)
    {
        $this
            ->setKarta($karta)
            ->setError($error);
    }
    /**
     * Get karta value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * This method is responsible for validating the values passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintsFromSetKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKartyResponseKartaItem) {
            // validation for constraint: itemType
            if (!$getKartyResponseKartaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\KartaType) {
                $invalidValues[] = is_object($getKartyResponseKartaItem) ? get_class($getKartyResponseKartaItem) : sprintf('%s(%s)', gettype($getKartyResponseKartaItem), var_export($getKartyResponseKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set karta value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function setKarta(?array $karta = null): self
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintsFromSetKarta($karta))) {
            throw new InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function addToKarta(\WellCommerce\ElektronicznyNadawca\StructType\KartaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\KartaType) {
            throw new InvalidArgumentException(sprintf('The karta property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKartyResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKartyResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getKartyResponseErrorItem) ? get_class($getKartyResponseErrorItem) : sprintf('%s(%s)', gettype($getKartyResponseErrorItem), var_export($getKartyResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function addToError(\WellCommerce\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
