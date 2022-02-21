<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBufor StructType
 * @subpackage Structs
 */
class CreateEnvelopeBufor extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    protected array $bufor;
    /**
     * Constructor method for createEnvelopeBufor
     * @uses CreateEnvelopeBufor::setBufor()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $bufor
     */
    public function __construct(array $bufor)
    {
        $this
            ->setBufor($bufor);
    }
    /**
     * Get bufor value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getBufor(): array
    {
        return $this->bufor;
    }
    /**
     * This method is responsible for validating the values passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintsFromSetBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforBuforItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforBuforItem) ? get_class($createEnvelopeBuforBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforBuforItem), var_export($createEnvelopeBuforBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBufor
     */
    public function setBufor(array $bufor): self
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintsFromSetBufor($bufor))) {
            throw new InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\BuforType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBufor
     */
    public function addToBufor(\WellCommerce\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The bufor property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;
        
        return $this;
    }
}
