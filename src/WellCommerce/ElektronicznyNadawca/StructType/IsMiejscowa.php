<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isMiejscowa StructType
 * @subpackage Structs
 */
class IsMiejscowa extends AbstractStructBase
{
    /**
     * The trasaRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType[]
     */
    protected array $trasaRequest;
    /**
     * Constructor method for isMiejscowa
     * @uses IsMiejscowa::setTrasaRequest()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType[] $trasaRequest
     */
    public function __construct(array $trasaRequest)
    {
        $this
            ->setTrasaRequest($trasaRequest);
    }
    /**
     * Get trasaRequest value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType[]
     */
    public function getTrasaRequest(): array
    {
        return $this->trasaRequest;
    }
    /**
     * This method is responsible for validating the values passed to the setTrasaRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrasaRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrasaRequestForArrayConstraintsFromSetTrasaRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isMiejscowaTrasaRequestItem) {
            // validation for constraint: itemType
            if (!$isMiejscowaTrasaRequestItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType) {
                $invalidValues[] = is_object($isMiejscowaTrasaRequestItem) ? get_class($isMiejscowaTrasaRequestItem) : sprintf('%s(%s)', gettype($isMiejscowaTrasaRequestItem), var_export($isMiejscowaTrasaRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The trasaRequest property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set trasaRequest value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType[] $trasaRequest
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsMiejscowa
     */
    public function setTrasaRequest(array $trasaRequest): self
    {
        // validation for constraint: array
        if ('' !== ($trasaRequestArrayErrorMessage = self::validateTrasaRequestForArrayConstraintsFromSetTrasaRequest($trasaRequest))) {
            throw new InvalidArgumentException($trasaRequestArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($trasaRequest) && count($trasaRequest) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($trasaRequest)), __LINE__);
        }
        $this->trasaRequest = $trasaRequest;
        
        return $this;
    }
    /**
     * Add item to trasaRequest value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsMiejscowa
     */
    public function addToTrasaRequest(\WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType) {
            throw new InvalidArgumentException(sprintf('The trasaRequest property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\TrasaRequestType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->trasaRequest) && count($this->trasaRequest) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->trasaRequest)), __LINE__);
        }
        $this->trasaRequest[] = $item;
        
        return $this;
    }
}
