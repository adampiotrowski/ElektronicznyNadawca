<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEPOStatusResponse StructType
 * @subpackage Structs
 */
class GetEPOStatusResponse extends AbstractStructBase
{
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]
     */
    protected ?array $epo = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getEPOStatusResponse
     * @uses GetEPOStatusResponse::setEpo()
     * @uses GetEPOStatusResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $epo = null, ?array $error = null)
    {
        $this
            ->setEpo($epo)
            ->setError($error);
    }
    /**
     * Get epo value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]
     */
    public function getEpo(): ?array
    {
        return $this->epo;
    }
    /**
     * This method is responsible for validating the values passed to the setEpo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEpo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEpoForArrayConstraintsFromSetEpo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEPOStatusResponseEpoItem) {
            // validation for constraint: itemType
            if (!$getEPOStatusResponseEpoItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType) {
                $invalidValues[] = is_object($getEPOStatusResponseEpoItem) ? get_class($getEPOStatusResponseEpoItem) : sprintf('%s(%s)', gettype($getEPOStatusResponseEpoItem), var_export($getEPOStatusResponseEpoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The epo property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set epo value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function setEpo(?array $epo = null): self
    {
        // validation for constraint: array
        if ('' !== ($epoArrayErrorMessage = self::validateEpoForArrayConstraintsFromSetEpo($epo))) {
            throw new InvalidArgumentException($epoArrayErrorMessage, __LINE__);
        }
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Add item to epo value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function addToEpo(\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType) {
            throw new InvalidArgumentException(sprintf('The epo property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaEPOType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->epo[] = $item;
        
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
        foreach ($values as $getEPOStatusResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEPOStatusResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEPOStatusResponseErrorItem) ? get_class($getEPOStatusResponseErrorItem) : sprintf('%s(%s)', gettype($getEPOStatusResponseErrorItem), var_export($getEPOStatusResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse
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
