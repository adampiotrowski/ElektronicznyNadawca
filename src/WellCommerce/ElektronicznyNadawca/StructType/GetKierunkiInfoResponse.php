<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfoResponse StructType
 * @subpackage Structs
 */
class GetKierunkiInfoResponse extends AbstractStructBase
{
    /**
     * The lastUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $lastUpdate;
    /**
     * The usluga
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UslugiType[]
     */
    protected array $usluga;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKierunkiInfoResponse
     * @uses GetKierunkiInfoResponse::setLastUpdate()
     * @uses GetKierunkiInfoResponse::setUsluga()
     * @uses GetKierunkiInfoResponse::setError()
     * @param string $lastUpdate
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(string $lastUpdate, array $usluga, ?array $error = null)
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setUsluga($usluga)
            ->setError($error);
    }
    /**
     * Get lastUpdate value
     * @return string
     */
    public function getLastUpdate(): string
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setLastUpdate(string $lastUpdate): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        
        return $this;
    }
    /**
     * Get usluga value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UslugiType[]
     */
    public function getUsluga(): array
    {
        return $this->usluga;
    }
    /**
     * This method is responsible for validating the values passed to the setUsluga method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsluga method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUslugaForArrayConstraintsFromSetUsluga(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseUslugaItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseUslugaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\UslugiType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseUslugaItem) ? get_class($getKierunkiInfoResponseUslugaItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseUslugaItem), var_export($getKierunkiInfoResponseUslugaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The usluga property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UslugiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set usluga value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setUsluga(array $usluga): self
    {
        // validation for constraint: array
        if ('' !== ($uslugaArrayErrorMessage = self::validateUslugaForArrayConstraintsFromSetUsluga($usluga))) {
            throw new InvalidArgumentException($uslugaArrayErrorMessage, __LINE__);
        }
        $this->usluga = $usluga;
        
        return $this;
    }
    /**
     * Add item to usluga value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UslugiType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function addToUsluga(\WellCommerce\ElektronicznyNadawca\StructType\UslugiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\UslugiType) {
            throw new InvalidArgumentException(sprintf('The usluga property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UslugiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->usluga[] = $item;
        
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
        foreach ($values as $getKierunkiInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseErrorItem) ? get_class($getKierunkiInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseErrorItem), var_export($getKierunkiInfoResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
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
