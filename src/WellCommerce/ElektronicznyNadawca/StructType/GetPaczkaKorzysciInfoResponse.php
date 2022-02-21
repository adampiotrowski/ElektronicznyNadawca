<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaczkaKorzysciInfoResponse StructType
 * @subpackage Structs
 */
class GetPaczkaKorzysciInfoResponse extends AbstractStructBase
{
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getPaczkaKorzysciInfoResponse
     * @uses GetPaczkaKorzysciInfoResponse::setStatus()
     * @uses GetPaczkaKorzysciInfoResponse::setIdKarta()
     * @uses GetPaczkaKorzysciInfoResponse::setInfo()
     * @uses GetPaczkaKorzysciInfoResponse::setError()
     * @param string $status
     * @param int $idKarta
     * @param \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?string $status = null, ?int $idKarta = null, ?\WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info = null, ?array $error = null)
    {
        $this
            ->setStatus($status)
            ->setIdKarta($idKarta)
            ->setInfo($info)
            ->setError($error);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get info value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType|null
     */
    public function getInfo(): ?\WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setInfo(?\WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info = null): self
    {
        $this->info = $info;
        
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
        foreach ($values as $getPaczkaKorzysciInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getPaczkaKorzysciInfoResponseErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getPaczkaKorzysciInfoResponseErrorItem) ? get_class($getPaczkaKorzysciInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getPaczkaKorzysciInfoResponseErrorItem), var_export($getPaczkaKorzysciInfoResponseErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
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
