<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isObszarMiastoResponse StructType
 * @subpackage Structs
 */
class IsObszarMiastoResponse extends AbstractStructBase
{
    /**
     * The obszarAdresowy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[]
     */
    protected array $obszarAdresowy;
    /**
     * Constructor method for isObszarMiastoResponse
     * @uses IsObszarMiastoResponse::setObszarAdresowy()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[] $obszarAdresowy
     */
    public function __construct(array $obszarAdresowy)
    {
        $this
            ->setObszarAdresowy($obszarAdresowy);
    }
    /**
     * Get obszarAdresowy value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[]
     */
    public function getObszarAdresowy(): array
    {
        return $this->obszarAdresowy;
    }
    /**
     * This method is responsible for validating the values passed to the setObszarAdresowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObszarAdresowy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObszarAdresowyForArrayConstraintsFromSetObszarAdresowy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isObszarMiastoResponseObszarAdresowyItem) {
            // validation for constraint: itemType
            if (!$isObszarMiastoResponseObszarAdresowyItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType) {
                $invalidValues[] = is_object($isObszarMiastoResponseObszarAdresowyItem) ? get_class($isObszarMiastoResponseObszarAdresowyItem) : sprintf('%s(%s)', gettype($isObszarMiastoResponseObszarAdresowyItem), var_export($isObszarMiastoResponseObszarAdresowyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The obszarAdresowy property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set obszarAdresowy value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[] $obszarAdresowy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsObszarMiastoResponse
     */
    public function setObszarAdresowy(array $obszarAdresowy): self
    {
        // validation for constraint: array
        if ('' !== ($obszarAdresowyArrayErrorMessage = self::validateObszarAdresowyForArrayConstraintsFromSetObszarAdresowy($obszarAdresowy))) {
            throw new InvalidArgumentException($obszarAdresowyArrayErrorMessage, __LINE__);
        }
        $this->obszarAdresowy = $obszarAdresowy;
        
        return $this;
    }
    /**
     * Add item to obszarAdresowy value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\IsObszarMiastoResponse
     */
    public function addToObszarAdresowy(\WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType) {
            throw new InvalidArgumentException(sprintf('The obszarAdresowy property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->obszarAdresowy[] = $item;
        
        return $this;
    }
}
