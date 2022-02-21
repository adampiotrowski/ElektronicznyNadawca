<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
class CreateEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The createdBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    protected ?array $createdBufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for createEnvelopeBuforResponse
     * @uses CreateEnvelopeBuforResponse::setCreatedBufor()
     * @uses CreateEnvelopeBuforResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $createdBufor = null, ?array $error = null)
    {
        $this
            ->setCreatedBufor($createdBufor)
            ->setError($error);
    }
    /**
     * Get createdBufor value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getCreatedBufor(): ?array
    {
        return $this->createdBufor;
    }
    /**
     * This method is responsible for validating the values passed to the setCreatedBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreatedBufor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreatedBuforForArrayConstraintsFromSetCreatedBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforResponseCreatedBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseCreatedBuforItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseCreatedBuforItem) ? get_class($createEnvelopeBuforResponseCreatedBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseCreatedBuforItem), var_export($createEnvelopeBuforResponseCreatedBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The createdBufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set createdBufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function setCreatedBufor(?array $createdBufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($createdBuforArrayErrorMessage = self::validateCreatedBuforForArrayConstraintsFromSetCreatedBufor($createdBufor))) {
            throw new InvalidArgumentException($createdBuforArrayErrorMessage, __LINE__);
        }
        $this->createdBufor = $createdBufor;
        
        return $this;
    }
    /**
     * Add item to createdBufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function addToCreatedBufor(\WellCommerce\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The createdBufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->createdBufor[] = $item;
        
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
        foreach ($values as $createEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseErrorItem) ? get_class($createEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseErrorItem), var_export($createEnvelopeBuforResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
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
