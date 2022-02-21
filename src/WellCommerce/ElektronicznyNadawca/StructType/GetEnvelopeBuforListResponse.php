<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforListResponse StructType
 * @subpackage Structs
 */
class GetEnvelopeBuforListResponse extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    protected ?array $bufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforListResponse
     * @uses GetEnvelopeBuforListResponse::setBufor()
     * @uses GetEnvelopeBuforListResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $bufor = null, ?array $error = null)
    {
        $this
            ->setBufor($bufor)
            ->setError($error);
    }
    /**
     * Get bufor value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getBufor(): ?array
    {
        return $this->bufor;
    }
    /**
     * This method is responsible for validating the values passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintsFromSetBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforListResponseBuforItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseBuforItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseBuforItem) ? get_class($getEnvelopeBuforListResponseBuforItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseBuforItem), var_export($getEnvelopeBuforListResponseBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function setBufor(?array $bufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintsFromSetBufor($bufor))) {
            throw new InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function addToBufor(\WellCommerce\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The bufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;
        
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
        foreach ($values as $getEnvelopeBuforListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseErrorItem) ? get_class($getEnvelopeBuforListResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseErrorItem), var_export($getEnvelopeBuforListResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
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
