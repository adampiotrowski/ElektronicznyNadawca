<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentResponse StructType
 * @subpackage Structs
 */
class AddShipmentResponse extends AbstractStructBase
{
    /**
     * The retval
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    protected array $retval;
    /**
     * Constructor method for addShipmentResponse
     * @uses AddShipmentResponse::setRetval()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     */
    public function __construct(array $retval)
    {
        $this
            ->setRetval($retval);
    }
    /**
     * Get retval value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    public function getRetval(): array
    {
        return $this->retval;
    }
    /**
     * This method is responsible for validating the values passed to the setRetval method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetval method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetvalForArrayConstraintsFromSetRetval(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addShipmentResponseRetvalItem) {
            // validation for constraint: itemType
            if (!$addShipmentResponseRetvalItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType) {
                $invalidValues[] = is_object($addShipmentResponseRetvalItem) ? get_class($addShipmentResponseRetvalItem) : sprintf('%s(%s)', gettype($addShipmentResponseRetvalItem), var_export($addShipmentResponseRetvalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The retval property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set retval value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function setRetval(array $retval): self
    {
        // validation for constraint: array
        if ('' !== ($retvalArrayErrorMessage = self::validateRetvalForArrayConstraintsFromSetRetval($retval))) {
            throw new InvalidArgumentException($retvalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($retval) && count($retval) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($retval)), __LINE__);
        }
        $this->retval = $retval;
        
        return $this;
    }
    /**
     * Add item to retval value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function addToRetval(\WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType) {
            throw new InvalidArgumentException(sprintf('The retval property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponseItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->retval) && count($this->retval) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->retval)), __LINE__);
        }
        $this->retval[] = $item;
        
        return $this;
    }
}
