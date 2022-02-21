<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEnvelope StructType
 * @subpackage Structs
 */
class SendEnvelope extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The pakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\PakietType[]
     */
    protected ?array $pakiet = null;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idBufor = null;
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ProfilType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil = null;
    /**
     * Constructor method for sendEnvelope
     * @uses SendEnvelope::setUrzadNadania()
     * @uses SendEnvelope::setPakiet()
     * @uses SendEnvelope::setIdBufor()
     * @uses SendEnvelope::setProfil()
     * @param int $urzadNadania
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     * @param int $idBufor
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil
     */
    public function __construct(?int $urzadNadania = null, ?array $pakiet = null, ?int $idBufor = null, ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setPakiet($pakiet)
            ->setIdBufor($idBufor)
            ->setProfil($profil);
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get pakiet value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PakietType[]
     */
    public function getPakiet(): ?array
    {
        return $this->pakiet;
    }
    /**
     * This method is responsible for validating the values passed to the setPakiet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPakiet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePakietForArrayConstraintsFromSetPakiet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendEnvelopePakietItem) {
            // validation for constraint: itemType
            if (!$sendEnvelopePakietItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\PakietType) {
                $invalidValues[] = is_object($sendEnvelopePakietItem) ? get_class($sendEnvelopePakietItem) : sprintf('%s(%s)', gettype($sendEnvelopePakietItem), var_export($sendEnvelopePakietItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pakiet property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PakietType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set pakiet value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setPakiet(?array $pakiet = null): self
    {
        // validation for constraint: array
        if ('' !== ($pakietArrayErrorMessage = self::validatePakietForArrayConstraintsFromSetPakiet($pakiet))) {
            throw new InvalidArgumentException($pakietArrayErrorMessage, __LINE__);
        }
        $this->pakiet = $pakiet;
        
        return $this;
    }
    /**
     * Add item to pakiet value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\PakietType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function addToPakiet(\WellCommerce\ElektronicznyNadawca\StructType\PakietType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\PakietType) {
            throw new InvalidArgumentException(sprintf('The pakiet property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\PakietType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pakiet[] = $item;
        
        return $this;
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;
        
        return $this;
    }
    /**
     * Get profil value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getProfil(): ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setProfil(?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
