<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiResponse StructType
 * @subpackage Structs
 */
class GetKierunkiResponse extends AbstractStructBase
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\KierunekType[]
     */
    protected ?array $kierunek = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKierunkiResponse
     * @uses GetKierunkiResponse::setKierunek()
     * @uses GetKierunkiResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $kierunek = null, ?array $error = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setError($error);
    }
    /**
     * Get kierunek value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KierunekType[]
     */
    public function getKierunek(): ?array
    {
        return $this->kierunek;
    }
    /**
     * This method is responsible for validating the values passed to the setKierunek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKierunek method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKierunekForArrayConstraintsFromSetKierunek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiResponseKierunekItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseKierunekItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\KierunekType) {
                $invalidValues[] = is_object($getKierunkiResponseKierunekItem) ? get_class($getKierunkiResponseKierunekItem) : sprintf('%s(%s)', gettype($getKierunkiResponseKierunekItem), var_export($getKierunkiResponseKierunekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kierunek property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KierunekType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set kierunek value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function setKierunek(?array $kierunek = null): self
    {
        // validation for constraint: array
        if ('' !== ($kierunekArrayErrorMessage = self::validateKierunekForArrayConstraintsFromSetKierunek($kierunek))) {
            throw new InvalidArgumentException($kierunekArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($kierunek) && count($kierunek) > 1000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($kierunek)), __LINE__);
        }
        $this->kierunek = $kierunek;
        
        return $this;
    }
    /**
     * Add item to kierunek value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KierunekType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function addToKierunek(\WellCommerce\ElektronicznyNadawca\StructType\KierunekType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\KierunekType) {
            throw new InvalidArgumentException(sprintf('The kierunek property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KierunekType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->kierunek) && count($this->kierunek) >= 1000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->kierunek)), __LINE__);
        }
        $this->kierunek[] = $item;
        
        return $this;
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
        foreach ($values as $getKierunkiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiResponseErrorItem) ? get_class($getKierunkiResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiResponseErrorItem), var_export($getKierunkiResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse
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
}
