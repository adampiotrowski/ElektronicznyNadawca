<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProfilListResponse StructType
 * @subpackage Structs
 */
class GetProfilListResponse extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ProfilType[]
     */
    protected array $profil;
    /**
     * Constructor method for getProfilListResponse
     * @uses GetProfilListResponse::setProfil()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType[] $profil
     */
    public function __construct(array $profil)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public function getProfil(): array
    {
        return $this->profil;
    }
    /**
     * This method is responsible for validating the values passed to the setProfil method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfil method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfilForArrayConstraintsFromSetProfil(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProfilListResponseProfilItem) {
            // validation for constraint: itemType
            if (!$getProfilListResponseProfilItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ProfilType) {
                $invalidValues[] = is_object($getProfilListResponseProfilItem) ? get_class($getProfilListResponseProfilItem) : sprintf('%s(%s)', gettype($getProfilListResponseProfilItem), var_export($getProfilListResponseProfilItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profil property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set profil value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType[] $profil
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function setProfil(array $profil): self
    {
        // validation for constraint: array
        if ('' !== ($profilArrayErrorMessage = self::validateProfilForArrayConstraintsFromSetProfil($profil))) {
            throw new InvalidArgumentException($profilArrayErrorMessage, __LINE__);
        }
        $this->profil = $profil;
        
        return $this;
    }
    /**
     * Add item to profil value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function addToProfil(\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\ProfilType) {
            throw new InvalidArgumentException(sprintf('The profil property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profil[] = $item;
        
        return $this;
    }
}
