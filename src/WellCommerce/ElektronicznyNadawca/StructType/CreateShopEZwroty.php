<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwroty StructType
 * @subpackage Structs
 */
class CreateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop;
    /**
     * Constructor method for createShopEZwroty
     * @uses CreateShopEZwroty::setShop()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop)
    {
        $this
            ->setShop($shop);
    }
    /**
     * Get shop value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function getShop(): \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType
    {
        return $this->shop;
    }
    /**
     * Set shop value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwroty
     */
    public function setShop(\WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
