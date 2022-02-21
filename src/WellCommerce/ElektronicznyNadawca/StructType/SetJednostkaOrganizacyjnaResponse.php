<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setJednostkaOrganizacyjnaResponse StructType
 * @subpackage Structs
 */
class SetJednostkaOrganizacyjnaResponse extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    protected ?array $jednostkaOrganizacyjna = null;
    /**
     * Constructor method for setJednostkaOrganizacyjnaResponse
     * @uses SetJednostkaOrganizacyjnaResponse::setError()
     * @uses SetJednostkaOrganizacyjnaResponse::setJednostkaOrganizacyjna()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(?array $error = null, ?array $jednostkaOrganizacyjna = null)
    {
        $this
            ->setError($error)
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
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
        foreach ($values as $setJednostkaOrganizacyjnaResponseErrorItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseErrorItem) ? get_class($setJednostkaOrganizacyjnaResponseErrorItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseErrorItem), var_export($setJednostkaOrganizacyjnaResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
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
    /**
     * Get jednostkaOrganizacyjna value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna(): ?array
    {
        return $this->jednostkaOrganizacyjna;
    }
    /**
     * This method is responsible for validating the values passed to the setJednostkaOrganizacyjna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostkaOrganizacyjna method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) ? get_class($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem), var_export($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostkaOrganizacyjna property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna(?array $jednostkaOrganizacyjna = null): self
    {
        // validation for constraint: array
        if ('' !== ($jednostkaOrganizacyjnaArrayErrorMessage = self::validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna($jednostkaOrganizacyjna))) {
            throw new InvalidArgumentException($jednostkaOrganizacyjnaArrayErrorMessage, __LINE__);
        }
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        
        return $this;
    }
    /**
     * Add item to jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function addToJednostkaOrganizacyjna(\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
            throw new InvalidArgumentException(sprintf('The jednostkaOrganizacyjna property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostkaOrganizacyjna[] = $item;
        
        return $this;
    }
}
