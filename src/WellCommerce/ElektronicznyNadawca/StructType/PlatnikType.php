<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for platnikType StructType
 * @subpackage Structs
 */
class PlatnikType extends AbstractStructBase
{
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - choice: uiszczaOplate | adresPlatnika
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $uiszczaOplate = null;
    /**
     * The adresPlatnika
     * Meta information extracted from the WSDL
     * - choice: uiszczaOplate | adresPlatnika
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null;
    /**
     * Constructor method for platnikType
     * @uses PlatnikType::setUiszczaOplate()
     * @uses PlatnikType::setAdresPlatnika()
     * @param string $uiszczaOplate
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $adresPlatnika
     */
    public function __construct(?string $uiszczaOplate = null, ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null)
    {
        $this
            ->setUiszczaOplate($uiszczaOplate)
            ->setAdresPlatnika($adresPlatnika);
    }
    /**
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return isset($this->uiszczaOplate) ? $this->uiszczaOplate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUiszczaOplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUiszczaOplate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUiszczaOplateForChoiceConstraintsFromSetUiszczaOplate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'adresPlatnika',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property uiszczaOplate can\'t be set as the property %s is already set. Only one property must be set among these properties: uiszczaOplate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set uiszczaOplate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uiszczaOplate
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlatnikType
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(uiszczaOplate, adresPlatnika)
        if ('' !== ($uiszczaOplateChoiceErrorMessage = self::validateUiszczaOplateForChoiceConstraintsFromSetUiszczaOplate($uiszczaOplate))) {
            throw new InvalidArgumentException($uiszczaOplateChoiceErrorMessage, __LINE__);
        }
        if (is_null($uiszczaOplate) || (is_array($uiszczaOplate) && empty($uiszczaOplate))) {
            unset($this->uiszczaOplate);
        } else {
            $this->uiszczaOplate = $uiszczaOplate;
        }
        
        return $this;
    }
    /**
     * Get adresPlatnika value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdresPlatnika(): ?\WellCommerce\ElektronicznyNadawca\StructType\AdresType
    {
        return isset($this->adresPlatnika) ? $this->adresPlatnika : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAdresPlatnika method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdresPlatnika method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAdresPlatnikaForChoiceConstraintsFromSetAdresPlatnika($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'uiszczaOplate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property adresPlatnika can\'t be set as the property %s is already set. Only one property must be set among these properties: adresPlatnika, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set adresPlatnika value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AdresType $adresPlatnika
     * @return \WellCommerce\ElektronicznyNadawca\StructType\PlatnikType
     */
    public function setAdresPlatnika(?\WellCommerce\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null): self
    {
        // validation for constraint: choice(uiszczaOplate, adresPlatnika)
        if ('' !== ($adresPlatnikaChoiceErrorMessage = self::validateAdresPlatnikaForChoiceConstraintsFromSetAdresPlatnika($adresPlatnika))) {
            throw new InvalidArgumentException($adresPlatnikaChoiceErrorMessage, __LINE__);
        }
        if (is_null($adresPlatnika) || (is_array($adresPlatnika) && empty($adresPlatnika))) {
            unset($this->adresPlatnika);
        } else {
            $this->adresPlatnika = $adresPlatnika;
        }
        
        return $this;
    }
}
