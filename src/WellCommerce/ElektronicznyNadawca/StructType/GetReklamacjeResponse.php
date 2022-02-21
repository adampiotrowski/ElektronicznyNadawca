<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacjeResponse StructType
 * @subpackage Structs
 */
class GetReklamacjeResponse extends AbstractStructBase
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]
     */
    protected ?array $reklamacja = null;
    /**
     * Constructor method for getReklamacjeResponse
     * @uses GetReklamacjeResponse::setReklamacja()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    public function __construct(?array $reklamacja = null)
    {
        $this
            ->setReklamacja($reklamacja);
    }
    /**
     * Get reklamacja value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja(): ?array
    {
        return $this->reklamacja;
    }
    /**
     * This method is responsible for validating the values passed to the setReklamacja method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacja method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaForArrayConstraintsFromSetReklamacja(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReklamacjeResponseReklamacjaItem) {
            // validation for constraint: itemType
            if (!$getReklamacjeResponseReklamacjaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType) {
                $invalidValues[] = is_object($getReklamacjeResponseReklamacjaItem) ? get_class($getReklamacjeResponseReklamacjaItem) : sprintf('%s(%s)', gettype($getReklamacjeResponseReklamacjaItem), var_export($getReklamacjeResponseReklamacjaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacja property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set reklamacja value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function setReklamacja(?array $reklamacja = null): self
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaArrayErrorMessage = self::validateReklamacjaForArrayConstraintsFromSetReklamacja($reklamacja))) {
            throw new InvalidArgumentException($reklamacjaArrayErrorMessage, __LINE__);
        }
        $this->reklamacja = $reklamacja;
        
        return $this;
    }
    /**
     * Add item to reklamacja value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function addToReklamacja(\WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType) {
            throw new InvalidArgumentException(sprintf('The reklamacja property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->reklamacja[] = $item;
        
        return $this;
    }
}
