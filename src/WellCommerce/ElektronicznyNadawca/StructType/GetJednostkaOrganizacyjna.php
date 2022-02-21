<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null;
    /**
     * Constructor method for getJednostkaOrganizacyjna
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     */
    public function __construct(?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }
    /**
     * Get jednostka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka(): ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }
    /**
     * Set jednostka value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null): self
    {
        $this->jednostka = $jednostka;
        
        return $this;
    }
}
