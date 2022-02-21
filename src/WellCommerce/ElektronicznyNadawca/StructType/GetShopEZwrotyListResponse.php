<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShopEZwrotyListResponse StructType
 * @subpackage Structs
 */
class GetShopEZwrotyListResponse extends AbstractStructBase
{
    /**
     * The shops
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[]
     */
    protected ?array $shops = null;
    /**
     * Constructor method for getShopEZwrotyListResponse
     * @uses GetShopEZwrotyListResponse::setShops()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[] $shops
     */
    public function __construct(?array $shops = null)
    {
        $this
            ->setShops($shops);
    }
    /**
     * Get shops value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[]
     */
    public function getShops(): ?array
    {
        return $this->shops;
    }
    /**
     * This method is responsible for validating the values passed to the setShops method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShops method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShopsForArrayConstraintsFromSetShops(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getShopEZwrotyListResponseShopsItem) {
            // validation for constraint: itemType
            if (!$getShopEZwrotyListResponseShopsItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType) {
                $invalidValues[] = is_object($getShopEZwrotyListResponseShopsItem) ? get_class($getShopEZwrotyListResponseShopsItem) : sprintf('%s(%s)', gettype($getShopEZwrotyListResponseShopsItem), var_export($getShopEZwrotyListResponseShopsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shops property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shops value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[] $shops
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse
     */
    public function setShops(?array $shops = null): self
    {
        // validation for constraint: array
        if ('' !== ($shopsArrayErrorMessage = self::validateShopsForArrayConstraintsFromSetShops($shops))) {
            throw new InvalidArgumentException($shopsArrayErrorMessage, __LINE__);
        }
        $this->shops = $shops;
        
        return $this;
    }
    /**
     * Add item to shops value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse
     */
    public function addToShops(\WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType) {
            throw new InvalidArgumentException(sprintf('The shops property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shops[] = $item;
        
        return $this;
    }
}
