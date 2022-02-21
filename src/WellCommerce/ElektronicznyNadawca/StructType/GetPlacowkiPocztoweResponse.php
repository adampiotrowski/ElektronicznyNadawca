<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztoweResponse StructType
 * @subpackage Structs
 */
class GetPlacowkiPocztoweResponse extends AbstractStructBase
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    protected array $placowka;
    /**
     * Constructor method for getPlacowkiPocztoweResponse
     * @uses GetPlacowkiPocztoweResponse::setPlacowka()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     */
    public function __construct(array $placowka)
    {
        $this
            ->setPlacowka($placowka);
    }
    /**
     * Get placowka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public function getPlacowka(): array
    {
        return $this->placowka;
    }
    /**
     * This method is responsible for validating the values passed to the setPlacowka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlacowka method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlacowkaForArrayConstraintsFromSetPlacowka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlacowkiPocztoweResponsePlacowkaItem) {
            // validation for constraint: itemType
            if (!$getPlacowkiPocztoweResponsePlacowkaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType) {
                $invalidValues[] = is_object($getPlacowkiPocztoweResponsePlacowkaItem) ? get_class($getPlacowkiPocztoweResponsePlacowkaItem) : sprintf('%s(%s)', gettype($getPlacowkiPocztoweResponsePlacowkaItem), var_export($getPlacowkiPocztoweResponsePlacowkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The placowka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set placowka value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
     */
    public function setPlacowka(array $placowka): self
    {
        // validation for constraint: array
        if ('' !== ($placowkaArrayErrorMessage = self::validatePlacowkaForArrayConstraintsFromSetPlacowka($placowka))) {
            throw new InvalidArgumentException($placowkaArrayErrorMessage, __LINE__);
        }
        $this->placowka = $placowka;
        
        return $this;
    }
    /**
     * Add item to placowka value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
     */
    public function addToPlacowka(\WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType) {
            throw new InvalidArgumentException(sprintf('The placowka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PlacowkaPocztowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->placowka[] = $item;
        
        return $this;
    }
}
