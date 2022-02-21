<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztowe StructType
 * @subpackage Structs
 */
class GetPlacowkiPocztowe extends AbstractStructBase
{
    /**
     * The idWojewodztwo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $idWojewodztwo;
    /**
     * Constructor method for getPlacowkiPocztowe
     * @uses GetPlacowkiPocztowe::setIdWojewodztwo()
     * @param string $idWojewodztwo
     */
    public function __construct(string $idWojewodztwo)
    {
        $this
            ->setIdWojewodztwo($idWojewodztwo);
    }
    /**
     * Get idWojewodztwo value
     * @return string
     */
    public function getIdWojewodztwo(): string
    {
        return $this->idWojewodztwo;
    }
    /**
     * Set idWojewodztwo value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\IdWojewodztwoType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\IdWojewodztwoType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $idWojewodztwo
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe
     */
    public function setIdWojewodztwo(string $idWojewodztwo): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\IdWojewodztwoType::valueIsValid($idWojewodztwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\IdWojewodztwoType', is_array($idWojewodztwo) ? implode(', ', $idWojewodztwo) : var_export($idWojewodztwo, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\IdWojewodztwoType::getValidValues())), __LINE__);
        }
        $this->idWojewodztwo = $idWojewodztwo;
        
        return $this;
    }
}
