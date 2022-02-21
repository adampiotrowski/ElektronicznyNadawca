<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType
 * @subpackage Structs
 */
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null;
    /**
     * The przesylkaFull
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null;
    /**
     * Constructor method for przesylkaFullType
     * @uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull
     */
    public function __construct(?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null, ?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }
    /**
     * Get przesylkaShort value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort(): ?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }
    /**
     * Set przesylkaShort value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null): self
    {
        $this->przesylkaShort = $przesylkaShort;
        
        return $this;
    }
    /**
     * Get przesylkaFull value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull(): ?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
    {
        return $this->przesylkaFull;
    }
    /**
     * Set przesylkaFull value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(?\WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null): self
    {
        $this->przesylkaFull = $przesylkaFull;
        
        return $this;
    }
}
