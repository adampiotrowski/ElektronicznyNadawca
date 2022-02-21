<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOInfoType StructType
 * @subpackage Structs
 */
class EPOInfoType extends AbstractStructBase
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null;
    /**
     * Constructor method for EPOInfoType
     * @uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    public function __construct(?\WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }
    /**
     * Get awizoPrzesylki value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki(): ?\WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }
    /**
     * Set awizoPrzesylki value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(?\WellCommerce\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null): self
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        
        return $this;
    }
    /**
     * Get doreczeniePrzesylki value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki(): ?\WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }
    /**
     * Set doreczeniePrzesylki value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(?\WellCommerce\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null): self
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        
        return $this;
    }
    /**
     * Get zwrotPrzesylki value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki(): ?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }
    /**
     * Set zwrotPrzesylki value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return \WellCommerce\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(?\WellCommerce\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null): self
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        
        return $this;
    }
}
