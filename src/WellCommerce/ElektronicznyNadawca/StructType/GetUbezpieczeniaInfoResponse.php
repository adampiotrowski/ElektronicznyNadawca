<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUbezpieczeniaInfoResponse StructType
 * @subpackage Structs
 */
class GetUbezpieczeniaInfoResponse extends AbstractStructBase
{
    /**
     * The poziomyUbezpieczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]
     */
    protected ?array $poziomyUbezpieczenia = null;
    /**
     * Constructor method for getUbezpieczeniaInfoResponse
     * @uses GetUbezpieczeniaInfoResponse::setPoziomyUbezpieczenia()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    public function __construct(?array $poziomyUbezpieczenia = null)
    {
        $this
            ->setPoziomyUbezpieczenia($poziomyUbezpieczenia);
    }
    /**
     * Get poziomyUbezpieczenia value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia(): ?array
    {
        return $this->poziomyUbezpieczenia;
    }
    /**
     * This method is responsible for validating the values passed to the setPoziomyUbezpieczenia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPoziomyUbezpieczenia method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePoziomyUbezpieczeniaForArrayConstraintsFromSetPoziomyUbezpieczenia(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) {
            // validation for constraint: itemType
            if (!$getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType) {
                $invalidValues[] = is_object($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) ? get_class($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) : sprintf('%s(%s)', gettype($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem), var_export($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The poziomyUbezpieczenia property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set poziomyUbezpieczenia value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function setPoziomyUbezpieczenia(?array $poziomyUbezpieczenia = null): self
    {
        // validation for constraint: array
        if ('' !== ($poziomyUbezpieczeniaArrayErrorMessage = self::validatePoziomyUbezpieczeniaForArrayConstraintsFromSetPoziomyUbezpieczenia($poziomyUbezpieczenia))) {
            throw new InvalidArgumentException($poziomyUbezpieczeniaArrayErrorMessage, __LINE__);
        }
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
        
        return $this;
    }
    /**
     * Add item to poziomyUbezpieczenia value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function addToPoziomyUbezpieczenia(\WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType) {
            throw new InvalidArgumentException(sprintf('The poziomyUbezpieczenia property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->poziomyUbezpieczenia[] = $item;
        
        return $this;
    }
}
