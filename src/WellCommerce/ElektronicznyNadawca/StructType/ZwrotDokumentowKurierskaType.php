<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowKurierskaType StructType
 * @subpackage Structs
 */
class ZwrotDokumentowKurierskaType extends AbstractStructBase
{
    /**
     * The rodzajPocztex
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajPaczka | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rodzajPocztex = null;
    /**
     * The rodzajPaczka
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajPaczka | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rodzajPaczka = null;
    /**
     * The rodzajList
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajPaczka | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null;
    /**
     * Constructor method for zwrotDokumentowKurierskaType
     * @uses ZwrotDokumentowKurierskaType::setRodzajPocztex()
     * @uses ZwrotDokumentowKurierskaType::setRodzajPaczka()
     * @uses ZwrotDokumentowKurierskaType::setRodzajList()
     * @param string $rodzajPocztex
     * @param string $rodzajPaczka
     * @param \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     */
    public function __construct(?string $rodzajPocztex = null, ?string $rodzajPaczka = null, ?\WellCommerce\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null)
    {
        $this
            ->setRodzajPocztex($rodzajPocztex)
            ->setRodzajPaczka($rodzajPaczka)
            ->setRodzajList($rodzajList);
    }
    /**
     * Get rodzajPocztex value
     * @return string|null
     */
    public function getRodzajPocztex(): ?string
    {
        return isset($this->rodzajPocztex) ? $this->rodzajPocztex : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRodzajPocztex method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPocztex method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajPocztexForChoiceConstraintsFromSetRodzajPocztex($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPaczka',
            'rodzajList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajPocztex can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajPocztex, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajPocztex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowKurierskaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowKurierskaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzajPocztex
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType
     */
    public function setRodzajPocztex(?string $rodzajPocztex = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowKurierskaType::valueIsValid($rodzajPocztex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowKurierskaType', is_array($rodzajPocztex) ? implode(', ', $rodzajPocztex) : var_export($rodzajPocztex, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowKurierskaType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(rodzajPocztex, rodzajPaczka, rodzajList)
        if ('' !== ($rodzajPocztexChoiceErrorMessage = self::validateRodzajPocztexForChoiceConstraintsFromSetRodzajPocztex($rodzajPocztex))) {
            throw new InvalidArgumentException($rodzajPocztexChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajPocztex) || (is_array($rodzajPocztex) && empty($rodzajPocztex))) {
            unset($this->rodzajPocztex);
        } else {
            $this->rodzajPocztex = $rodzajPocztex;
        }
        
        return $this;
    }
    /**
     * Get rodzajPaczka value
     * @return string|null
     */
    public function getRodzajPaczka(): ?string
    {
        return isset($this->rodzajPaczka) ? $this->rodzajPaczka : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRodzajPaczka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPaczka method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajPaczkaForChoiceConstraintsFromSetRodzajPaczka($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPocztex',
            'rodzajList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajPaczka can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajPaczka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajPaczka value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowPaczkowaType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowPaczkowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzajPaczka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType
     */
    public function setRodzajPaczka(?string $rodzajPaczka = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowPaczkowaType::valueIsValid($rodzajPaczka)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowPaczkowaType', is_array($rodzajPaczka) ? implode(', ', $rodzajPaczka) : var_export($rodzajPaczka, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\TerminZwrotDokumentowPaczkowaType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(rodzajPocztex, rodzajPaczka, rodzajList)
        if ('' !== ($rodzajPaczkaChoiceErrorMessage = self::validateRodzajPaczkaForChoiceConstraintsFromSetRodzajPaczka($rodzajPaczka))) {
            throw new InvalidArgumentException($rodzajPaczkaChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajPaczka) || (is_array($rodzajPaczka) && empty($rodzajPaczka))) {
            unset($this->rodzajPaczka);
        } else {
            $this->rodzajPaczka = $rodzajPaczka;
        }
        
        return $this;
    }
    /**
     * Get rodzajList value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType|null
     */
    public function getRodzajList(): ?\WellCommerce\ElektronicznyNadawca\StructType\RodzajListType
    {
        return isset($this->rodzajList) ? $this->rodzajList : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRodzajList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajListForChoiceConstraintsFromSetRodzajList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPocztex',
            'rodzajPaczka',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajList can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType
     */
    public function setRodzajList(?\WellCommerce\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null): self
    {
        // validation for constraint: choice(rodzajPocztex, rodzajPaczka, rodzajList)
        if ('' !== ($rodzajListChoiceErrorMessage = self::validateRodzajListForChoiceConstraintsFromSetRodzajList($rodzajList))) {
            throw new InvalidArgumentException($rodzajListChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajList) || (is_array($rodzajList) && empty($rodzajList))) {
            unset($this->rodzajList);
        } else {
            $this->rodzajList = $rodzajList;
        }
        
        return $this;
    }
}
