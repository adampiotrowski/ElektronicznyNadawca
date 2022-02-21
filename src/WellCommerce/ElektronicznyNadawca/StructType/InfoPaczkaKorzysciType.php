<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoPaczkaKorzysciType StructType
 * @subpackage Structs
 */
class InfoPaczkaKorzysciType extends AbstractStructBase
{
    /**
     * The iloscStandardDo5kg
     * @var int|null
     */
    protected ?int $iloscStandardDo5kg = null;
    /**
     * The iloscPobranieDo5kg
     * @var int|null
     */
    protected ?int $iloscPobranieDo5kg = null;
    /**
     * The iloscOdbiorWPunkcieDo5kg
     * @var int|null
     */
    protected ?int $iloscOdbiorWPunkcieDo5kg = null;
    /**
     * The iloscPobranieOdbiorWPunkcieDo5kg
     * @var int|null
     */
    protected ?int $iloscPobranieOdbiorWPunkcieDo5kg = null;
    /**
     * The iloscStandardDo30kg
     * @var int|null
     */
    protected ?int $iloscStandardDo30kg = null;
    /**
     * The iloscPobranieDo30kg
     * @var int|null
     */
    protected ?int $iloscPobranieDo30kg = null;
    /**
     * The iloscOdbiorWPunkcieDo30kg
     * @var int|null
     */
    protected ?int $iloscOdbiorWPunkcieDo30kg = null;
    /**
     * The iloscPobranieOdbiorWPunkcieDo30kg
     * @var int|null
     */
    protected ?int $iloscPobranieOdbiorWPunkcieDo30kg = null;
    /**
     * The dataWaznosciUmowy
     * @var string|null
     */
    protected ?string $dataWaznosciUmowy = null;
    /**
     * Constructor method for infoPaczkaKorzysciType
     * @uses InfoPaczkaKorzysciType::setIloscStandardDo5kg()
     * @uses InfoPaczkaKorzysciType::setIloscPobranieDo5kg()
     * @uses InfoPaczkaKorzysciType::setIloscOdbiorWPunkcieDo5kg()
     * @uses InfoPaczkaKorzysciType::setIloscPobranieOdbiorWPunkcieDo5kg()
     * @uses InfoPaczkaKorzysciType::setIloscStandardDo30kg()
     * @uses InfoPaczkaKorzysciType::setIloscPobranieDo30kg()
     * @uses InfoPaczkaKorzysciType::setIloscOdbiorWPunkcieDo30kg()
     * @uses InfoPaczkaKorzysciType::setIloscPobranieOdbiorWPunkcieDo30kg()
     * @uses InfoPaczkaKorzysciType::setDataWaznosciUmowy()
     * @param int $iloscStandardDo5kg
     * @param int $iloscPobranieDo5kg
     * @param int $iloscOdbiorWPunkcieDo5kg
     * @param int $iloscPobranieOdbiorWPunkcieDo5kg
     * @param int $iloscStandardDo30kg
     * @param int $iloscPobranieDo30kg
     * @param int $iloscOdbiorWPunkcieDo30kg
     * @param int $iloscPobranieOdbiorWPunkcieDo30kg
     * @param string $dataWaznosciUmowy
     */
    public function __construct(?int $iloscStandardDo5kg = null, ?int $iloscPobranieDo5kg = null, ?int $iloscOdbiorWPunkcieDo5kg = null, ?int $iloscPobranieOdbiorWPunkcieDo5kg = null, ?int $iloscStandardDo30kg = null, ?int $iloscPobranieDo30kg = null, ?int $iloscOdbiorWPunkcieDo30kg = null, ?int $iloscPobranieOdbiorWPunkcieDo30kg = null, ?string $dataWaznosciUmowy = null)
    {
        $this
            ->setIloscStandardDo5kg($iloscStandardDo5kg)
            ->setIloscPobranieDo5kg($iloscPobranieDo5kg)
            ->setIloscOdbiorWPunkcieDo5kg($iloscOdbiorWPunkcieDo5kg)
            ->setIloscPobranieOdbiorWPunkcieDo5kg($iloscPobranieOdbiorWPunkcieDo5kg)
            ->setIloscStandardDo30kg($iloscStandardDo30kg)
            ->setIloscPobranieDo30kg($iloscPobranieDo30kg)
            ->setIloscOdbiorWPunkcieDo30kg($iloscOdbiorWPunkcieDo30kg)
            ->setIloscPobranieOdbiorWPunkcieDo30kg($iloscPobranieOdbiorWPunkcieDo30kg)
            ->setDataWaznosciUmowy($dataWaznosciUmowy);
    }
    /**
     * Get iloscStandardDo5kg value
     * @return int|null
     */
    public function getIloscStandardDo5kg(): ?int
    {
        return $this->iloscStandardDo5kg;
    }
    /**
     * Set iloscStandardDo5kg value
     * @param int $iloscStandardDo5kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscStandardDo5kg(?int $iloscStandardDo5kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscStandardDo5kg) && !(is_int($iloscStandardDo5kg) || ctype_digit($iloscStandardDo5kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscStandardDo5kg, true), gettype($iloscStandardDo5kg)), __LINE__);
        }
        $this->iloscStandardDo5kg = $iloscStandardDo5kg;
        
        return $this;
    }
    /**
     * Get iloscPobranieDo5kg value
     * @return int|null
     */
    public function getIloscPobranieDo5kg(): ?int
    {
        return $this->iloscPobranieDo5kg;
    }
    /**
     * Set iloscPobranieDo5kg value
     * @param int $iloscPobranieDo5kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscPobranieDo5kg(?int $iloscPobranieDo5kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPobranieDo5kg) && !(is_int($iloscPobranieDo5kg) || ctype_digit($iloscPobranieDo5kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPobranieDo5kg, true), gettype($iloscPobranieDo5kg)), __LINE__);
        }
        $this->iloscPobranieDo5kg = $iloscPobranieDo5kg;
        
        return $this;
    }
    /**
     * Get iloscOdbiorWPunkcieDo5kg value
     * @return int|null
     */
    public function getIloscOdbiorWPunkcieDo5kg(): ?int
    {
        return $this->iloscOdbiorWPunkcieDo5kg;
    }
    /**
     * Set iloscOdbiorWPunkcieDo5kg value
     * @param int $iloscOdbiorWPunkcieDo5kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscOdbiorWPunkcieDo5kg(?int $iloscOdbiorWPunkcieDo5kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscOdbiorWPunkcieDo5kg) && !(is_int($iloscOdbiorWPunkcieDo5kg) || ctype_digit($iloscOdbiorWPunkcieDo5kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscOdbiorWPunkcieDo5kg, true), gettype($iloscOdbiorWPunkcieDo5kg)), __LINE__);
        }
        $this->iloscOdbiorWPunkcieDo5kg = $iloscOdbiorWPunkcieDo5kg;
        
        return $this;
    }
    /**
     * Get iloscPobranieOdbiorWPunkcieDo5kg value
     * @return int|null
     */
    public function getIloscPobranieOdbiorWPunkcieDo5kg(): ?int
    {
        return $this->iloscPobranieOdbiorWPunkcieDo5kg;
    }
    /**
     * Set iloscPobranieOdbiorWPunkcieDo5kg value
     * @param int $iloscPobranieOdbiorWPunkcieDo5kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscPobranieOdbiorWPunkcieDo5kg(?int $iloscPobranieOdbiorWPunkcieDo5kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPobranieOdbiorWPunkcieDo5kg) && !(is_int($iloscPobranieOdbiorWPunkcieDo5kg) || ctype_digit($iloscPobranieOdbiorWPunkcieDo5kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPobranieOdbiorWPunkcieDo5kg, true), gettype($iloscPobranieOdbiorWPunkcieDo5kg)), __LINE__);
        }
        $this->iloscPobranieOdbiorWPunkcieDo5kg = $iloscPobranieOdbiorWPunkcieDo5kg;
        
        return $this;
    }
    /**
     * Get iloscStandardDo30kg value
     * @return int|null
     */
    public function getIloscStandardDo30kg(): ?int
    {
        return $this->iloscStandardDo30kg;
    }
    /**
     * Set iloscStandardDo30kg value
     * @param int $iloscStandardDo30kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscStandardDo30kg(?int $iloscStandardDo30kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscStandardDo30kg) && !(is_int($iloscStandardDo30kg) || ctype_digit($iloscStandardDo30kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscStandardDo30kg, true), gettype($iloscStandardDo30kg)), __LINE__);
        }
        $this->iloscStandardDo30kg = $iloscStandardDo30kg;
        
        return $this;
    }
    /**
     * Get iloscPobranieDo30kg value
     * @return int|null
     */
    public function getIloscPobranieDo30kg(): ?int
    {
        return $this->iloscPobranieDo30kg;
    }
    /**
     * Set iloscPobranieDo30kg value
     * @param int $iloscPobranieDo30kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscPobranieDo30kg(?int $iloscPobranieDo30kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPobranieDo30kg) && !(is_int($iloscPobranieDo30kg) || ctype_digit($iloscPobranieDo30kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPobranieDo30kg, true), gettype($iloscPobranieDo30kg)), __LINE__);
        }
        $this->iloscPobranieDo30kg = $iloscPobranieDo30kg;
        
        return $this;
    }
    /**
     * Get iloscOdbiorWPunkcieDo30kg value
     * @return int|null
     */
    public function getIloscOdbiorWPunkcieDo30kg(): ?int
    {
        return $this->iloscOdbiorWPunkcieDo30kg;
    }
    /**
     * Set iloscOdbiorWPunkcieDo30kg value
     * @param int $iloscOdbiorWPunkcieDo30kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscOdbiorWPunkcieDo30kg(?int $iloscOdbiorWPunkcieDo30kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscOdbiorWPunkcieDo30kg) && !(is_int($iloscOdbiorWPunkcieDo30kg) || ctype_digit($iloscOdbiorWPunkcieDo30kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscOdbiorWPunkcieDo30kg, true), gettype($iloscOdbiorWPunkcieDo30kg)), __LINE__);
        }
        $this->iloscOdbiorWPunkcieDo30kg = $iloscOdbiorWPunkcieDo30kg;
        
        return $this;
    }
    /**
     * Get iloscPobranieOdbiorWPunkcieDo30kg value
     * @return int|null
     */
    public function getIloscPobranieOdbiorWPunkcieDo30kg(): ?int
    {
        return $this->iloscPobranieOdbiorWPunkcieDo30kg;
    }
    /**
     * Set iloscPobranieOdbiorWPunkcieDo30kg value
     * @param int $iloscPobranieOdbiorWPunkcieDo30kg
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setIloscPobranieOdbiorWPunkcieDo30kg(?int $iloscPobranieOdbiorWPunkcieDo30kg = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPobranieOdbiorWPunkcieDo30kg) && !(is_int($iloscPobranieOdbiorWPunkcieDo30kg) || ctype_digit($iloscPobranieOdbiorWPunkcieDo30kg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPobranieOdbiorWPunkcieDo30kg, true), gettype($iloscPobranieOdbiorWPunkcieDo30kg)), __LINE__);
        }
        $this->iloscPobranieOdbiorWPunkcieDo30kg = $iloscPobranieOdbiorWPunkcieDo30kg;
        
        return $this;
    }
    /**
     * Get dataWaznosciUmowy value
     * @return string|null
     */
    public function getDataWaznosciUmowy(): ?string
    {
        return $this->dataWaznosciUmowy;
    }
    /**
     * Set dataWaznosciUmowy value
     * @param string $dataWaznosciUmowy
     * @return \WellCommerce\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public function setDataWaznosciUmowy(?string $dataWaznosciUmowy = null): self
    {
        // validation for constraint: string
        if (!is_null($dataWaznosciUmowy) && !is_string($dataWaznosciUmowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataWaznosciUmowy, true), gettype($dataWaznosciUmowy)), __LINE__);
        }
        $this->dataWaznosciUmowy = $dataWaznosciUmowy;
        
        return $this;
    }
}
