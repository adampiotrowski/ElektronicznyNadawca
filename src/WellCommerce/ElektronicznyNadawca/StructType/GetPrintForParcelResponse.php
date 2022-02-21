<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPrintForParcelResponse StructType
 * @subpackage Structs
 */
class GetPrintForParcelResponse extends AbstractStructBase
{
    /**
     * The printResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType[]
     */
    protected ?array $printResult = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getPrintForParcelResponse
     * @uses GetPrintForParcelResponse::setPrintResult()
     * @uses GetPrintForParcelResponse::setError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $printResult = null, ?array $error = null)
    {
        $this
            ->setPrintResult($printResult)
            ->setError($error);
    }
    /**
     * Get printResult value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType[]
     */
    public function getPrintResult(): ?array
    {
        return $this->printResult;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintResultForArrayConstraintsFromSetPrintResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintForParcelResponsePrintResultItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponsePrintResultItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType) {
                $invalidValues[] = is_object($getPrintForParcelResponsePrintResultItem) ? get_class($getPrintForParcelResponsePrintResultItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponsePrintResultItem), var_export($getPrintForParcelResponsePrintResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printResult property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printResult value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function setPrintResult(?array $printResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($printResultArrayErrorMessage = self::validatePrintResultForArrayConstraintsFromSetPrintResult($printResult))) {
            throw new InvalidArgumentException($printResultArrayErrorMessage, __LINE__);
        }
        $this->printResult = $printResult;
        
        return $this;
    }
    /**
     * Add item to printResult value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function addToPrintResult(\WellCommerce\ElektronicznyNadawca\StructType\PrintResultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType) {
            throw new InvalidArgumentException(sprintf('The printResult property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PrintResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printResult[] = $item;
        
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
        foreach ($values as $getPrintForParcelResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getPrintForParcelResponseErrorItem) ? get_class($getPrintForParcelResponseErrorItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponseErrorItem), var_export($getPrintForParcelResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
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
