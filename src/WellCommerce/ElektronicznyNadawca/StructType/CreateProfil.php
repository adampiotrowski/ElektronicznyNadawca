<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createProfil StructType
 * @subpackage Structs
 */
class CreateProfil extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ProfilType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil;
    /**
     * Constructor method for createProfil
     * @uses CreateProfil::setProfil()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ProfilType
     */
    public function getProfil(): \WellCommerce\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateProfil
     */
    public function setProfil(\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
