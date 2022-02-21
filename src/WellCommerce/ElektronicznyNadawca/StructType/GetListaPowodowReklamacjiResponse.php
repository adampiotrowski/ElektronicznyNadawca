<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaPowodowReklamacjiResponse StructType
 * @subpackage Structs
 */
class GetListaPowodowReklamacjiResponse extends AbstractStructBase
{
    /**
     * The kategoriePowodowReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    protected array $kategoriePowodowReklamacji;
    /**
     * Constructor method for getListaPowodowReklamacjiResponse
     * @uses GetListaPowodowReklamacjiResponse::setKategoriePowodowReklamacji()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    public function __construct(array $kategoriePowodowReklamacji)
    {
        $this
            ->setKategoriePowodowReklamacji($kategoriePowodowReklamacji);
    }
    /**
     * Get kategoriePowodowReklamacji value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji(): array
    {
        return $this->kategoriePowodowReklamacji;
    }
    /**
     * This method is responsible for validating the values passed to the setKategoriePowodowReklamacji method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKategoriePowodowReklamacji method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKategoriePowodowReklamacjiForArrayConstraintsFromSetKategoriePowodowReklamacji(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) {
            // validation for constraint: itemType
            if (!$getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType) {
                $invalidValues[] = is_object($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) ? get_class($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) : sprintf('%s(%s)', gettype($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem), var_export($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kategoriePowodowReklamacji property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set kategoriePowodowReklamacji value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji): self
    {
        // validation for constraint: array
        if ('' !== ($kategoriePowodowReklamacjiArrayErrorMessage = self::validateKategoriePowodowReklamacjiForArrayConstraintsFromSetKategoriePowodowReklamacji($kategoriePowodowReklamacji))) {
            throw new InvalidArgumentException($kategoriePowodowReklamacjiArrayErrorMessage, __LINE__);
        }
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
        
        return $this;
    }
    /**
     * Add item to kategoriePowodowReklamacji value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function addToKategoriePowodowReklamacji(\WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType) {
            throw new InvalidArgumentException(sprintf('The kategoriePowodowReklamacji property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->kategoriePowodowReklamacji[] = $item;
        
        return $this;
    }
}
