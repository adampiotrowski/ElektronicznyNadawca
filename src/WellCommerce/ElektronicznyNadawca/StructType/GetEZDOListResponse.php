<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOListResponse StructType
 * @subpackage Structs
 */
class GetEZDOListResponse extends AbstractStructBase
{
    /**
     * The EZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType[]
     */
    protected ?array $EZDOPakiet = null;
    /**
     * Constructor method for getEZDOListResponse
     * @uses GetEZDOListResponse::setEZDOPakiet()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     */
    public function __construct(?array $eZDOPakiet = null)
    {
        $this
            ->setEZDOPakiet($eZDOPakiet);
    }
    /**
     * Get EZDOPakiet value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType[]
     */
    public function getEZDOPakiet(): ?array
    {
        return $this->EZDOPakiet;
    }
    /**
     * This method is responsible for validating the values passed to the setEZDOPakiet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEZDOPakiet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEZDOPakietForArrayConstraintsFromSetEZDOPakiet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEZDOListResponseEZDOPakietItem) {
            // validation for constraint: itemType
            if (!$getEZDOListResponseEZDOPakietItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType) {
                $invalidValues[] = is_object($getEZDOListResponseEZDOPakietItem) ? get_class($getEZDOListResponseEZDOPakietItem) : sprintf('%s(%s)', gettype($getEZDOListResponseEZDOPakietItem), var_export($getEZDOListResponseEZDOPakietItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EZDOPakiet property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EZDOPakiet value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function setEZDOPakiet(?array $eZDOPakiet = null): self
    {
        // validation for constraint: array
        if ('' !== ($eZDOPakietArrayErrorMessage = self::validateEZDOPakietForArrayConstraintsFromSetEZDOPakiet($eZDOPakiet))) {
            throw new InvalidArgumentException($eZDOPakietArrayErrorMessage, __LINE__);
        }
        $this->EZDOPakiet = $eZDOPakiet;
        
        return $this;
    }
    /**
     * Add item to EZDOPakiet value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function addToEZDOPakiet(\WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType) {
            throw new InvalidArgumentException(sprintf('The EZDOPakiet property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\EZDOPakietType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EZDOPakiet[] = $item;
        
        return $this;
    }
}
