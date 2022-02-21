<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotow StructType
 * @subpackage Structs
 */
class GetListaZgodEZwrotow extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for getListaZgodEZwrotow
     * @uses GetListaZgodEZwrotow::setStatus()
     * @param string $status
     */
    public function __construct(?string $status = null)
    {
        $this
            ->setStatus($status);
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
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
