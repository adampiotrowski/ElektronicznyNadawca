<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintType StructType
 * @subpackage Structs
 */
class PrintType extends AbstractStructBase
{
    /**
     * The kind
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $kind;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $method;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The resolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resolution = null;
    /**
     * Constructor method for PrintType
     * @uses PrintType::setKind()
     * @uses PrintType::setMethod()
     * @uses PrintType::setFormat()
     * @uses PrintType::setResolution()
     * @param string $kind
     * @param string $method
     * @param string $format
     * @param string $resolution
     */
    public function __construct(string $kind, string $method, ?string $format = null, ?string $resolution = null)
    {
        $this
            ->setKind($kind)
            ->setMethod($method)
            ->setFormat($format)
            ->setResolution($resolution);
    }
    /**
     * Get kind value
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }
    /**
     * Set kind value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintKindEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintKindEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kind
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrintType
     */
    public function setKind(string $kind): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\PrintKindEnum::valueIsValid($kind)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PrintKindEnum', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PrintKindEnum::getValidValues())), __LINE__);
        }
        $this->kind = $kind;
        
        return $this;
    }
    /**
     * Get method value
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintMethodEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintMethodEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $method
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrintType
     */
    public function setMethod(string $method): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\PrintMethodEnum::valueIsValid($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PrintMethodEnum', is_array($method) ? implode(', ', $method) : var_export($method, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PrintMethodEnum::getValidValues())), __LINE__);
        }
        $this->method = $method;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintFormatEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintFormatEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $format
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrintType
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\PrintFormatEnum::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PrintFormatEnum', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PrintFormatEnum::getValidValues())), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get resolution value
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }
    /**
     * Set resolution value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintResolutionEnum::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PrintResolutionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resolution
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrintType
     */
    public function setResolution(?string $resolution = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\PrintResolutionEnum::valueIsValid($resolution)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PrintResolutionEnum', is_array($resolution) ? implode(', ', $resolution) : var_export($resolution, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PrintResolutionEnum::getValidValues())), __LINE__);
        }
        $this->resolution = $resolution;
        
        return $this;
    }
}
