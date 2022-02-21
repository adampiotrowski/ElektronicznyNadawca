<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUrzedyNadaniaResponse StructType
 * @subpackage Structs
 */
class GetUrzedyNadaniaResponse extends AbstractStructBase
{
    /**
     * The urzedyNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[]
     */
    protected ?array $urzedyNadania = null;
    /**
     * Constructor method for getUrzedyNadaniaResponse
     * @uses GetUrzedyNadaniaResponse::setUrzedyNadania()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[] $urzedyNadania
     */
    public function __construct(?array $urzedyNadania = null)
    {
        $this
            ->setUrzedyNadania($urzedyNadania);
    }
    /**
     * Get urzedyNadania value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania(): ?array
    {
        return $this->urzedyNadania;
    }
    /**
     * This method is responsible for validating the values passed to the setUrzedyNadania method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzedyNadania method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrzedyNadaniaForArrayConstraintsFromSetUrzedyNadania(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUrzedyNadaniaResponseUrzedyNadaniaItem) {
            // validation for constraint: itemType
            if (!$getUrzedyNadaniaResponseUrzedyNadaniaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType) {
                $invalidValues[] = is_object($getUrzedyNadaniaResponseUrzedyNadaniaItem) ? get_class($getUrzedyNadaniaResponseUrzedyNadaniaItem) : sprintf('%s(%s)', gettype($getUrzedyNadaniaResponseUrzedyNadaniaItem), var_export($getUrzedyNadaniaResponseUrzedyNadaniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The urzedyNadania property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set urzedyNadania value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[] $urzedyNadania
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse
     */
    public function setUrzedyNadania(?array $urzedyNadania = null): self
    {
        // validation for constraint: array
        if ('' !== ($urzedyNadaniaArrayErrorMessage = self::validateUrzedyNadaniaForArrayConstraintsFromSetUrzedyNadania($urzedyNadania))) {
            throw new InvalidArgumentException($urzedyNadaniaArrayErrorMessage, __LINE__);
        }
        $this->urzedyNadania = $urzedyNadania;
        
        return $this;
    }
    /**
     * Add item to urzedyNadania value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse
     */
    public function addToUrzedyNadania(\WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType) {
            throw new InvalidArgumentException(sprintf('The urzedyNadania property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UrzadNadaniaFullType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->urzedyNadania[] = $item;
        
        return $this;
    }
}
