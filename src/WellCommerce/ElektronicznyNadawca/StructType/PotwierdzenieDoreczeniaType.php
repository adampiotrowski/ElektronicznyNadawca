<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieDoreczeniaType StructType
 * @subpackage Structs
 */
class PotwierdzenieDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob
     * @var string|null
     */
    protected ?string $sposob = null;
    /**
     * The kontakt
     * @var string|null
     */
    protected ?string $kontakt = null;
    /**
     * Constructor method for potwierdzenieDoreczeniaType
     * @uses PotwierdzenieDoreczeniaType::setSposob()
     * @uses PotwierdzenieDoreczeniaType::setKontakt()
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct(?string $sposob = null, ?string $kontakt = null)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
    }
    /**
     * Get sposob value
     * @return string|null
     */
    public function getSposob(): ?string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposob
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setSposob(?string $sposob = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::valueIsValid($sposob)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string|null
     */
    public function getKontakt(): ?string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setKontakt(?string $kontakt = null): self
    {
        // validation for constraint: string
        if (!is_null($kontakt) && !is_string($kontakt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kontakt, true), gettype($kontakt)), __LINE__);
        }
        $this->kontakt = $kontakt;
        
        return $this;
    }
}
