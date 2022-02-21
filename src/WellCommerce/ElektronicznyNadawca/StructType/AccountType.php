<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountType StructType
 * @subpackage Structs
 */
class AccountType extends AbstractStructBase
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
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\KartaType[]
     */
    protected ?array $karta = null;
    /**
     * The permision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $permision = null;
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    protected ?array $jednostka = null;
    /**
     * The domyslnaJednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null;
    /**
     * The domyslnyProfil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\ProfilType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null;
    /**
     * The dostepPoAdresieIP
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $dostepPoAdresieIP = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for accountType
     * @uses AccountType::setProfil()
     * @uses AccountType::setKarta()
     * @uses AccountType::setPermision()
     * @uses AccountType::setJednostka()
     * @uses AccountType::setDomyslnaJednostka()
     * @uses AccountType::setDomyslnyProfil()
     * @uses AccountType::setDostepPoAdresieIP()
     * @uses AccountType::setUserName()
     * @uses AccountType::setFirstName()
     * @uses AccountType::setLastName()
     * @uses AccountType::setEmail()
     * @uses AccountType::setStatus()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType[] $profil
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @param string[] $permision
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil
     * @param string[] $dostepPoAdresieIP
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $status
     */
    public function __construct(array $profil, ?array $karta = null, ?array $permision = null, ?array $jednostka = null, ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null, ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null, ?array $dostepPoAdresieIP = null, ?string $userName = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $status = null)
    {
        $this
            ->setProfil($profil)
            ->setKarta($karta)
            ->setPermision($permision)
            ->setJednostka($jednostka)
            ->setDomyslnaJednostka($domyslnaJednostka)
            ->setDomyslnyProfil($domyslnyProfil)
            ->setDostepPoAdresieIP($dostepPoAdresieIP)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setStatus($status);
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
        foreach ($values as $accountTypeProfilItem) {
            // validation for constraint: itemType
            if (!$accountTypeProfilItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\ProfilType) {
                $invalidValues[] = is_object($accountTypeProfilItem) ? get_class($accountTypeProfilItem) : sprintf('%s(%s)', gettype($accountTypeProfilItem), var_export($accountTypeProfilItem, true));
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
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
    /**
     * Get karta value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * This method is responsible for validating the values passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintsFromSetKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeKartaItem) {
            // validation for constraint: itemType
            if (!$accountTypeKartaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\KartaType) {
                $invalidValues[] = is_object($accountTypeKartaItem) ? get_class($accountTypeKartaItem) : sprintf('%s(%s)', gettype($accountTypeKartaItem), var_export($accountTypeKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set karta value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setKarta(?array $karta = null): self
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintsFromSetKarta($karta))) {
            throw new InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\KartaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToKarta(\WellCommerce\ElektronicznyNadawca\StructType\KartaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\KartaType) {
            throw new InvalidArgumentException(sprintf('The karta property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;
        
        return $this;
    }
    /**
     * Get permision value
     * @return string[]
     */
    public function getPermision(): ?array
    {
        return $this->permision;
    }
    /**
     * This method is responsible for validating the values passed to the setPermision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPermision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePermisionForArrayConstraintsFromSetPermision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypePermisionItem) {
            // validation for constraint: enumeration
            if (!\WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid($accountTypePermisionItem)) {
                $invalidValues[] = is_object($accountTypePermisionItem) ? get_class($accountTypePermisionItem) : sprintf('%s(%s)', gettype($accountTypePermisionItem), var_export($accountTypePermisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set permision value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $permision
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setPermision(?array $permision = null): self
    {
        // validation for constraint: array
        if ('' !== ($permisionArrayErrorMessage = self::validatePermisionForArrayConstraintsFromSetPermision($permision))) {
            throw new InvalidArgumentException($permisionArrayErrorMessage, __LINE__);
        }
        $this->permision = $permision;
        
        return $this;
    }
    /**
     * Add item to permision value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToPermision(string $item): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\PermisionType::getValidValues())), __LINE__);
        }
        $this->permision[] = $item;
        
        return $this;
    }
    /**
     * Get jednostka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostka(): ?array
    {
        return $this->jednostka;
    }
    /**
     * This method is responsible for validating the values passed to the setJednostka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostka method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaForArrayConstraintsFromSetJednostka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeJednostkaItem) {
            // validation for constraint: itemType
            if (!$accountTypeJednostkaItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($accountTypeJednostkaItem) ? get_class($accountTypeJednostkaItem) : sprintf('%s(%s)', gettype($accountTypeJednostkaItem), var_export($accountTypeJednostkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set jednostka value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setJednostka(?array $jednostka = null): self
    {
        // validation for constraint: array
        if ('' !== ($jednostkaArrayErrorMessage = self::validateJednostkaForArrayConstraintsFromSetJednostka($jednostka))) {
            throw new InvalidArgumentException($jednostkaArrayErrorMessage, __LINE__);
        }
        $this->jednostka = $jednostka;
        
        return $this;
    }
    /**
     * Add item to jednostka value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToJednostka(\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
            throw new InvalidArgumentException(sprintf('The jednostka property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostka[] = $item;
        
        return $this;
    }
    /**
     * Get domyslnaJednostka value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getDomyslnaJednostka(): ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->domyslnaJednostka;
    }
    /**
     * Set domyslnaJednostka value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnaJednostka(?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null): self
    {
        $this->domyslnaJednostka = $domyslnaJednostka;
        
        return $this;
    }
    /**
     * Get domyslnyProfil value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getDomyslnyProfil(): ?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->domyslnyProfil;
    }
    /**
     * Set domyslnyProfil value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnyProfil(?\WellCommerce\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null): self
    {
        $this->domyslnyProfil = $domyslnyProfil;
        
        return $this;
    }
    /**
     * Get dostepPoAdresieIP value
     * @return string[]
     */
    public function getDostepPoAdresieIP(): ?array
    {
        return $this->dostepPoAdresieIP;
    }
    /**
     * This method is responsible for validating the values passed to the setDostepPoAdresieIP method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDostepPoAdresieIP method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDostepPoAdresieIPForArrayConstraintsFromSetDostepPoAdresieIP(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeDostepPoAdresieIPItem) {
            // validation for constraint: itemType
            if (!is_string($accountTypeDostepPoAdresieIPItem)) {
                $invalidValues[] = is_object($accountTypeDostepPoAdresieIPItem) ? get_class($accountTypeDostepPoAdresieIPItem) : sprintf('%s(%s)', gettype($accountTypeDostepPoAdresieIPItem), var_export($accountTypeDostepPoAdresieIPItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dostepPoAdresieIP value
     * @throws InvalidArgumentException
     * @param string[] $dostepPoAdresieIP
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDostepPoAdresieIP(?array $dostepPoAdresieIP = null): self
    {
        // validation for constraint: array
        if ('' !== ($dostepPoAdresieIPArrayErrorMessage = self::validateDostepPoAdresieIPForArrayConstraintsFromSetDostepPoAdresieIP($dostepPoAdresieIP))) {
            throw new InvalidArgumentException($dostepPoAdresieIPArrayErrorMessage, __LINE__);
        }
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;
        
        return $this;
    }
    /**
     * Add item to dostepPoAdresieIP value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToDostepPoAdresieIP(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dostepPoAdresieIP[] = $item;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusAccountType::valueIsValid()
     * @uses \WellCommerce\ElektronicznyNadawca\EnumType\StatusAccountType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\WellCommerce\ElektronicznyNadawca\EnumType\StatusAccountType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WellCommerce\ElektronicznyNadawca\EnumType\StatusAccountType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \WellCommerce\ElektronicznyNadawca\EnumType\StatusAccountType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
