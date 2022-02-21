<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaType StructType
 * @subpackage Structs
 */
abstract class PrzesylkaType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $guid;
    /**
     * The oplacaOdbiorca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $pakietGuid = null;
    /**
     * The opakowanieGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $opakowanieGuid = null;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 500
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The planowanaDataNadania
     * @var string|null
     */
    protected ?string $planowanaDataNadania = null;
    /**
     * Constructor method for przesylkaType
     * @uses PrzesylkaType::setGuid()
     * @uses PrzesylkaType::setOplacaOdbiorca()
     * @uses PrzesylkaType::setPakietGuid()
     * @uses PrzesylkaType::setOpakowanieGuid()
     * @uses PrzesylkaType::setOpis()
     * @uses PrzesylkaType::setPlanowanaDataNadania()
     * @param string $guid
     * @param \WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca
     * @param string $pakietGuid
     * @param string $opakowanieGuid
     * @param string $opis
     * @param string $planowanaDataNadania
     */
    public function __construct(string $guid, ?\WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null, ?string $pakietGuid = null, ?string $opakowanieGuid = null, ?string $opis = null, ?string $planowanaDataNadania = null)
    {
        $this
            ->setGuid($guid)
            ->setOplacaOdbiorca($oplacaOdbiorca)
            ->setPakietGuid($pakietGuid)
            ->setOpakowanieGuid($opakowanieGuid)
            ->setOpis($opis)
            ->setPlanowanaDataNadania($planowanaDataNadania);
    }
    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setGuid(string $guid): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get oplacaOdbiorca value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType|null
     */
    public function getOplacaOdbiorca(): ?\WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType
    {
        return $this->oplacaOdbiorca;
    }
    /**
     * Set oplacaOdbiorca value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOplacaOdbiorca(?\WellCommerce\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null): self
    {
        $this->oplacaOdbiorca = $oplacaOdbiorca;
        
        return $this;
    }
    /**
     * Get pakietGuid value
     * @return string|null
     */
    public function getPakietGuid(): ?string
    {
        return $this->pakietGuid;
    }
    /**
     * Set pakietGuid value
     * @param string $pakietGuid
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setPakietGuid(?string $pakietGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($pakietGuid) && !is_string($pakietGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pakietGuid, true), gettype($pakietGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($pakietGuid) && mb_strlen((string) $pakietGuid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $pakietGuid)), __LINE__);
        }
        $this->pakietGuid = $pakietGuid;
        
        return $this;
    }
    /**
     * Get opakowanieGuid value
     * @return string|null
     */
    public function getOpakowanieGuid(): ?string
    {
        return $this->opakowanieGuid;
    }
    /**
     * Set opakowanieGuid value
     * @param string $opakowanieGuid
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOpakowanieGuid(?string $opakowanieGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($opakowanieGuid) && !is_string($opakowanieGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opakowanieGuid, true), gettype($opakowanieGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($opakowanieGuid) && mb_strlen((string) $opakowanieGuid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $opakowanieGuid)), __LINE__);
        }
        $this->opakowanieGuid = $opakowanieGuid;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($opis) && mb_strlen((string) $opis) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen((string) $opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get planowanaDataNadania value
     * @return string|null
     */
    public function getPlanowanaDataNadania(): ?string
    {
        return $this->planowanaDataNadania;
    }
    /**
     * Set planowanaDataNadania value
     * @param string $planowanaDataNadania
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setPlanowanaDataNadania(?string $planowanaDataNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($planowanaDataNadania) && !is_string($planowanaDataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planowanaDataNadania, true), gettype($planowanaDataNadania)), __LINE__);
        }
        $this->planowanaDataNadania = $planowanaDataNadania;
        
        return $this;
    }
}
