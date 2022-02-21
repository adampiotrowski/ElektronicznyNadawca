<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKPResponse StructType
 * @subpackage Structs
 */
class GetWplatyCKPResponse extends AbstractStructBase
{
    /**
     * The wplaty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType[]
     */
    protected ?array $wplaty = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getWplatyCKPResponse
     * @uses GetWplatyCKPResponse::setWplaty()
     * @uses GetWplatyCKPResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $wplaty = null, ?array $error = null)
    {
        $this
            ->setWplaty($wplaty)
            ->setError($error);
    }
    /**
     * Get wplaty value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType[]
     */
    public function getWplaty(): ?array
    {
        return $this->wplaty;
    }
    /**
     * This method is responsible for validating the values passed to the setWplaty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWplaty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWplatyForArrayConstraintsFromSetWplaty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWplatyCKPResponseWplatyItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseWplatyItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType) {
                $invalidValues[] = is_object($getWplatyCKPResponseWplatyItem) ? get_class($getWplatyCKPResponseWplatyItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseWplatyItem), var_export($getWplatyCKPResponseWplatyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wplaty property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set wplaty value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function setWplaty(?array $wplaty = null): self
    {
        // validation for constraint: array
        if ('' !== ($wplatyArrayErrorMessage = self::validateWplatyForArrayConstraintsFromSetWplaty($wplaty))) {
            throw new InvalidArgumentException($wplatyArrayErrorMessage, __LINE__);
        }
        $this->wplaty = $wplaty;
        
        return $this;
    }
    /**
     * Add item to wplaty value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function addToWplaty(\WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType) {
            throw new InvalidArgumentException(sprintf('The wplaty property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\WplataCKPType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wplaty[] = $item;
        
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
        foreach ($values as $getWplatyCKPResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getWplatyCKPResponseErrorItem) ? get_class($getWplatyCKPResponseErrorItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseErrorItem), var_export($getWplatyCKPResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
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
