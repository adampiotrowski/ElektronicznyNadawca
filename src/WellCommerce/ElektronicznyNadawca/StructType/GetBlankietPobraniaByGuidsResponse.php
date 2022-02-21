<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBlankietPobraniaByGuidsResponse StructType
 * @subpackage Structs
 */
class GetBlankietPobraniaByGuidsResponse extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent[]
     */
    protected ?array $content = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getBlankietPobraniaByGuidsResponse
     * @uses GetBlankietPobraniaByGuidsResponse::setContent()
     * @uses GetBlankietPobraniaByGuidsResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $content = null, ?array $error = null)
    {
        $this
            ->setContent($content)
            ->setError($error);
    }
    /**
     * Get content value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }
    /**
     * This method is responsible for validating the values passed to the setContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentForArrayConstraintsFromSetContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBlankietPobraniaByGuidsResponseContentItem) {
            // validation for constraint: itemType
            if (!$getBlankietPobraniaByGuidsResponseContentItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent) {
                $invalidValues[] = is_object($getBlankietPobraniaByGuidsResponseContentItem) ? get_class($getBlankietPobraniaByGuidsResponseContentItem) : sprintf('%s(%s)', gettype($getBlankietPobraniaByGuidsResponseContentItem), var_export($getBlankietPobraniaByGuidsResponseContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The content property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set content value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function setContent(?array $content = null): self
    {
        // validation for constraint: array
        if ('' !== ($contentArrayErrorMessage = self::validateContentForArrayConstraintsFromSetContent($content))) {
            throw new InvalidArgumentException($contentArrayErrorMessage, __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Add item to content value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function addToContent(\WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent) {
            throw new InvalidArgumentException(sprintf('The content property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AddressLabelContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->content[] = $item;
        
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
        foreach ($values as $getBlankietPobraniaByGuidsResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getBlankietPobraniaByGuidsResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getBlankietPobraniaByGuidsResponseErrorItem) ? get_class($getBlankietPobraniaByGuidsResponseErrorItem) : sprintf('%s(%s)', gettype($getBlankietPobraniaByGuidsResponseErrorItem), var_export($getBlankietPobraniaByGuidsResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
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
