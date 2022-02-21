<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddresLabelCompactResponse StructType
 * @subpackage Structs
 */
class GetAddresLabelCompactResponse extends AbstractStructBase
{
    /**
     * The pdfContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pdfContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getAddresLabelCompactResponse
     * @uses GetAddresLabelCompactResponse::setPdfContent()
     * @uses GetAddresLabelCompactResponse::setError()
     * @param string $pdfContent
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?string $pdfContent = null, ?array $error = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setError($error);
    }
    /**
     * Get pdfContent value
     * @return string|null
     */
    public function getPdfContent(): ?string
    {
        return $this->pdfContent;
    }
    /**
     * Set pdfContent value
     * @param string $pdfContent
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse
     */
    public function setPdfContent(?string $pdfContent = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfContent) && !is_string($pdfContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfContent, true), gettype($pdfContent)), __LINE__);
        }
        $this->pdfContent = $pdfContent;
        
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
        foreach ($values as $getAddresLabelCompactResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAddresLabelCompactResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getAddresLabelCompactResponseErrorItem) ? get_class($getAddresLabelCompactResponseErrorItem) : sprintf('%s(%s)', gettype($getAddresLabelCompactResponseErrorItem), var_export($getAddresLabelCompactResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse
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
