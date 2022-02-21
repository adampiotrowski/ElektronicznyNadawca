<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zamowKuriera StructType
 * @subpackage Structs
 */
class ZamowKuriera extends AbstractStructBase
{
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru;
    /**
     * The oczekiwanaDataOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $oczekiwanaDataOdbioru;
    /**
     * The oczekiwanaGodzinaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $oczekiwanaGodzinaOdbioru;
    /**
     * The szacowanaIloscPrzeslek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $szacowanaIloscPrzeslek;
    /**
     * The szacowanaLacznaMasaPrzesylek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $szacowanaLacznaMasaPrzesylek;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null;
    /**
     * Constructor method for zamowKuriera
     * @uses ZamowKuriera::setMiejsceOdbioru()
     * @uses ZamowKuriera::setOczekiwanaDataOdbioru()
     * @uses ZamowKuriera::setOczekiwanaGodzinaOdbioru()
     * @uses ZamowKuriera::setSzacowanaIloscPrzeslek()
     * @uses ZamowKuriera::setSzacowanaLacznaMasaPrzesylek()
     * @uses ZamowKuriera::setNadawca()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru, string $oczekiwanaDataOdbioru, string $oczekiwanaGodzinaOdbioru, string $szacowanaIloscPrzeslek, string $szacowanaLacznaMasaPrzesylek, ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
            ->setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
            ->setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
            ->setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
            ->setNadawca($nadawca);
    }
    /**
     * Get miejsceOdbioru value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresType
     */
    public function getMiejsceOdbioru(): \WellCommerce\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setMiejsceOdbioru(\WellCommerce\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get oczekiwanaDataOdbioru value
     * @return string
     */
    public function getOczekiwanaDataOdbioru(): string
    {
        return $this->oczekiwanaDataOdbioru;
    }
    /**
     * Set oczekiwanaDataOdbioru value
     * @param string $oczekiwanaDataOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaDataOdbioru(string $oczekiwanaDataOdbioru): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaDataOdbioru) && !is_string($oczekiwanaDataOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaDataOdbioru, true), gettype($oczekiwanaDataOdbioru)), __LINE__);
        }
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
        
        return $this;
    }
    /**
     * Get oczekiwanaGodzinaOdbioru value
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru(): string
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }
    /**
     * Set oczekiwanaGodzinaOdbioru value
     * @param string $oczekiwanaGodzinaOdbioru
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru(string $oczekiwanaGodzinaOdbioru): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaGodzinaOdbioru) && !is_string($oczekiwanaGodzinaOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaGodzinaOdbioru, true), gettype($oczekiwanaGodzinaOdbioru)), __LINE__);
        }
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
        
        return $this;
    }
    /**
     * Get szacowanaIloscPrzeslek value
     * @return string
     */
    public function getSzacowanaIloscPrzeslek(): string
    {
        return $this->szacowanaIloscPrzeslek;
    }
    /**
     * Set szacowanaIloscPrzeslek value
     * @param string $szacowanaIloscPrzeslek
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaIloscPrzeslek(string $szacowanaIloscPrzeslek): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaIloscPrzeslek) && !is_string($szacowanaIloscPrzeslek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaIloscPrzeslek, true), gettype($szacowanaIloscPrzeslek)), __LINE__);
        }
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
        
        return $this;
    }
    /**
     * Get szacowanaLacznaMasaPrzesylek value
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek(): string
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }
    /**
     * Set szacowanaLacznaMasaPrzesylek value
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek(string $szacowanaLacznaMasaPrzesylek): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaLacznaMasaPrzesylek) && !is_string($szacowanaLacznaMasaPrzesylek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaLacznaMasaPrzesylek, true), gettype($szacowanaLacznaMasaPrzesylek)), __LINE__);
        }
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
        
        return $this;
    }
    /**
     * Get nadawca value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca(): ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->nadawca;
    }
    /**
     * Set nadawca value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setNadawca(?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
}
