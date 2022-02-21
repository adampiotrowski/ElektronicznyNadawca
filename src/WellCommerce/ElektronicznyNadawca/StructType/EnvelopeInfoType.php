<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for envelopeInfoType StructType
 * @subpackage Structs
 */
class EnvelopeInfoType extends AbstractStructBase
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
     * The envelopeFilename
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $envelopeFilename = null;
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * The envelopeStatus
     * @var string|null
     */
    protected ?string $envelopeStatus = null;
    /**
     * The dataTransmisji
     * @var string|null
     */
    protected ?string $dataTransmisji = null;
    /**
     * Constructor method for envelopeInfoType
     * @uses EnvelopeInfoType::setError()
     * @uses EnvelopeInfoType::setEnvelopeFilename()
     * @uses EnvelopeInfoType::setIdEnvelope()
     * @uses EnvelopeInfoType::setEnvelopeStatus()
     * @uses EnvelopeInfoType::setDataTransmisji()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string[] $envelopeFilename
     * @param int $idEnvelope
     * @param string $envelopeStatus
     * @param string $dataTransmisji
     */
    public function __construct(?array $error = null, ?array $envelopeFilename = null, ?int $idEnvelope = null, ?string $envelopeStatus = null, ?string $dataTransmisji = null)
    {
        $this
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename)
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setDataTransmisji($dataTransmisji);
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
        foreach ($values as $envelopeInfoTypeErrorItem) {
            // validation for constraint: itemType
            if (!$envelopeInfoTypeErrorItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($envelopeInfoTypeErrorItem) ? get_class($envelopeInfoTypeErrorItem) : sprintf('%s(%s)', gettype($envelopeInfoTypeErrorItem), var_export($envelopeInfoTypeErrorItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * Get envelopeFilename value
     * @return string[]
     */
    public function getEnvelopeFilename(): ?array
    {
        return $this->envelopeFilename;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvelopeFilename method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeFilename method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeFilenameForArrayConstraintsFromSetEnvelopeFilename(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $envelopeInfoTypeEnvelopeFilenameItem) {
            // validation for constraint: itemType
            if (!is_string($envelopeInfoTypeEnvelopeFilenameItem)) {
                $invalidValues[] = is_object($envelopeInfoTypeEnvelopeFilenameItem) ? get_class($envelopeInfoTypeEnvelopeFilenameItem) : sprintf('%s(%s)', gettype($envelopeInfoTypeEnvelopeFilenameItem), var_export($envelopeInfoTypeEnvelopeFilenameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The envelopeFilename property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set envelopeFilename value
     * @throws InvalidArgumentException
     * @param string[] $envelopeFilename
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setEnvelopeFilename(?array $envelopeFilename = null): self
    {
        // validation for constraint: array
        if ('' !== ($envelopeFilenameArrayErrorMessage = self::validateEnvelopeFilenameForArrayConstraintsFromSetEnvelopeFilename($envelopeFilename))) {
            throw new InvalidArgumentException($envelopeFilenameArrayErrorMessage, __LINE__);
        }
        $this->envelopeFilename = $envelopeFilename;
        
        return $this;
    }
    /**
     * Add item to envelopeFilename value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function addToEnvelopeFilename(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The envelopeFilename property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->envelopeFilename[] = $item;
        
        return $this;
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
    /**
     * Get envelopeStatus value
     * @return string|null
     */
    public function getEnvelopeStatus(): ?string
    {
        return $this->envelopeStatus;
    }
    /**
     * Set envelopeStatus value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\EnvelopeStatusType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\EnvelopeStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $envelopeStatus
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setEnvelopeStatus(?string $envelopeStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\EnvelopeStatusType::valueIsValid($envelopeStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\EnvelopeStatusType', is_array($envelopeStatus) ? implode(', ', $envelopeStatus) : var_export($envelopeStatus, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\EnvelopeStatusType::getValidValues())), __LINE__);
        }
        $this->envelopeStatus = $envelopeStatus;
        
        return $this;
    }
    /**
     * Get dataTransmisji value
     * @return string|null
     */
    public function getDataTransmisji(): ?string
    {
        return $this->dataTransmisji;
    }
    /**
     * Set dataTransmisji value
     * @param string $dataTransmisji
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setDataTransmisji(?string $dataTransmisji = null): self
    {
        // validation for constraint: string
        if (!is_null($dataTransmisji) && !is_string($dataTransmisji)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataTransmisji, true), gettype($dataTransmisji)), __LINE__);
        }
        $this->dataTransmisji = $dataTransmisji;
        
        return $this;
    }
}
