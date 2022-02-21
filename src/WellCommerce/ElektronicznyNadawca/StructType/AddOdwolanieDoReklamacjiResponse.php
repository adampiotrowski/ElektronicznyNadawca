<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addOdwolanieDoReklamacjiResponse StructType
 * @subpackage Structs
 */
class AddOdwolanieDoReklamacjiResponse extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * The reklamacjaInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]
     */
    protected ?array $reklamacjaInfo = null;
    /**
     * Constructor method for addOdwolanieDoReklamacjiResponse
     * @uses AddOdwolanieDoReklamacjiResponse::setError()
     * @uses AddOdwolanieDoReklamacjiResponse::setReklamacjaInfo()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     */
    public function __construct(?array $error = null, ?array $reklamacjaInfo = null)
    {
        $this
            ->setError($error)
            ->setReklamacjaInfo($reklamacjaInfo);
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
        foreach ($values as $addOdwolanieDoReklamacjiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseErrorItem) ? get_class($addOdwolanieDoReklamacjiResponseErrorItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseErrorItem), var_export($addOdwolanieDoReklamacjiResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
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
    /**
     * Get reklamacjaInfo value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]
     */
    public function getReklamacjaInfo(): ?array
    {
        return $this->reklamacjaInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setReklamacjaInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacjaInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaInfoForArrayConstraintsFromSetReklamacjaInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseReklamacjaInfoItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) ? get_class($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem), var_export($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacjaInfo property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set reklamacjaInfo value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function setReklamacjaInfo(?array $reklamacjaInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaInfoArrayErrorMessage = self::validateReklamacjaInfoForArrayConstraintsFromSetReklamacjaInfo($reklamacjaInfo))) {
            throw new InvalidArgumentException($reklamacjaInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($reklamacjaInfo) && count($reklamacjaInfo) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo = $reklamacjaInfo;
        
        return $this;
    }
    /**
     * Add item to reklamacjaInfo value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function addToReklamacjaInfo(\WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType) {
            throw new InvalidArgumentException(sprintf('The reklamacjaInfo property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ReklamacjaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->reklamacjaInfo) && count($this->reklamacjaInfo) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo[] = $item;
        
        return $this;
    }
}
