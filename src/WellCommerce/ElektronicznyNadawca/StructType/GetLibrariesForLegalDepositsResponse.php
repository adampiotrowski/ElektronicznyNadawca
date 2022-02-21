<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLibrariesForLegalDepositsResponse StructType
 * @subpackage Structs
 */
class GetLibrariesForLegalDepositsResponse extends AbstractStructBase
{
    /**
     * The libraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[]
     */
    protected ?array $libraryForLegalDeposit = null;
    /**
     * Constructor method for getLibrariesForLegalDepositsResponse
     * @uses GetLibrariesForLegalDepositsResponse::setLibraryForLegalDeposit()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     */
    public function __construct(?array $libraryForLegalDeposit = null)
    {
        $this
            ->setLibraryForLegalDeposit($libraryForLegalDeposit);
    }
    /**
     * Get libraryForLegalDeposit value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[]
     */
    public function getLibraryForLegalDeposit(): ?array
    {
        return $this->libraryForLegalDeposit;
    }
    /**
     * This method is responsible for validating the values passed to the setLibraryForLegalDeposit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLibraryForLegalDeposit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLibraryForLegalDepositForArrayConstraintsFromSetLibraryForLegalDeposit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) {
            // validation for constraint: itemType
            if (!$getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType) {
                $invalidValues[] = is_object($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) ? get_class($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) : sprintf('%s(%s)', gettype($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem), var_export($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The libraryForLegalDeposit property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set libraryForLegalDeposit value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse
     */
    public function setLibraryForLegalDeposit(?array $libraryForLegalDeposit = null): self
    {
        // validation for constraint: array
        if ('' !== ($libraryForLegalDepositArrayErrorMessage = self::validateLibraryForLegalDepositForArrayConstraintsFromSetLibraryForLegalDeposit($libraryForLegalDeposit))) {
            throw new InvalidArgumentException($libraryForLegalDepositArrayErrorMessage, __LINE__);
        }
        $this->libraryForLegalDeposit = $libraryForLegalDeposit;
        
        return $this;
    }
    /**
     * Add item to libraryForLegalDeposit value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse
     */
    public function addToLibraryForLegalDeposit(\WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType) {
            throw new InvalidArgumentException(sprintf('The libraryForLegalDeposit property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\LibraryForLegalDepositType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->libraryForLegalDeposit[] = $item;
        
        return $this;
    }
}
