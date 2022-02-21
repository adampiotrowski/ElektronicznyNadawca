<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isMiejscowaResponse StructType
 * @subpackage Structs
 */
class IsMiejscowaResponse extends AbstractStructBase
{
    /**
     * The trasaResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType[]
     */
    protected array $trasaResponse;
    /**
     * Constructor method for isMiejscowaResponse
     * @uses IsMiejscowaResponse::setTrasaResponse()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType[] $trasaResponse
     */
    public function __construct(array $trasaResponse)
    {
        $this
            ->setTrasaResponse($trasaResponse);
    }
    /**
     * Get trasaResponse value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType[]
     */
    public function getTrasaResponse(): array
    {
        return $this->trasaResponse;
    }
    /**
     * This method is responsible for validating the values passed to the setTrasaResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrasaResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrasaResponseForArrayConstraintsFromSetTrasaResponse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isMiejscowaResponseTrasaResponseItem) {
            // validation for constraint: itemType
            if (!$isMiejscowaResponseTrasaResponseItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType) {
                $invalidValues[] = is_object($isMiejscowaResponseTrasaResponseItem) ? get_class($isMiejscowaResponseTrasaResponseItem) : sprintf('%s(%s)', gettype($isMiejscowaResponseTrasaResponseItem), var_export($isMiejscowaResponseTrasaResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The trasaResponse property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set trasaResponse value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType[] $trasaResponse
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsMiejscowaResponse
     */
    public function setTrasaResponse(array $trasaResponse): self
    {
        // validation for constraint: array
        if ('' !== ($trasaResponseArrayErrorMessage = self::validateTrasaResponseForArrayConstraintsFromSetTrasaResponse($trasaResponse))) {
            throw new InvalidArgumentException($trasaResponseArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($trasaResponse) && count($trasaResponse) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($trasaResponse)), __LINE__);
        }
        $this->trasaResponse = $trasaResponse;
        
        return $this;
    }
    /**
     * Add item to trasaResponse value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsMiejscowaResponse
     */
    public function addToTrasaResponse(\WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType) {
            throw new InvalidArgumentException(sprintf('The trasaResponse property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\TrasaResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->trasaResponse) && count($this->trasaResponse) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->trasaResponse)), __LINE__);
        }
        $this->trasaResponse[] = $item;
        
        return $this;
    }
}
