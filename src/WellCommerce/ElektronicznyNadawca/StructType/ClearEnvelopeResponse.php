<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clearEnvelopeResponse StructType
 * @subpackage Structs
 */
class ClearEnvelopeResponse extends AbstractStructBase
{
    /**
     * The retval
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $retval;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for clearEnvelopeResponse
     * @uses ClearEnvelopeResponse::setRetval()
     * @uses ClearEnvelopeResponse::setError()
     * @param bool $retval
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(bool $retval, ?array $error = null)
    {
        $this
            ->setRetval($retval)
            ->setError($error);
    }
    /**
     * Get retval value
     * @return bool
     */
    public function getRetval(): bool
    {
        return $this->retval;
    }
    /**
     * Set retval value
     * @param bool $retval
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
     */
    public function setRetval(bool $retval): self
    {
        // validation for constraint: boolean
        if (!is_null($retval) && !is_bool($retval)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retval, true), gettype($retval)), __LINE__);
        }
        $this->retval = $retval;
        
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
        foreach ($values as $clearEnvelopeResponseErrorItem) {
            // validation for constraint: itemType
            if (!$clearEnvelopeResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($clearEnvelopeResponseErrorItem) ? get_class($clearEnvelopeResponseErrorItem) : sprintf('%s(%s)', gettype($clearEnvelopeResponseErrorItem), var_export($clearEnvelopeResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
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
