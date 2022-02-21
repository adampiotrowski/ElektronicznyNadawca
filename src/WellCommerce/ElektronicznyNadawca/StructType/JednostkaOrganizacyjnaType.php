<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for jednostkaOrganizacyjnaType StructType
 * @subpackage Structs
 */
class JednostkaOrganizacyjnaType extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AccountType[]
     */
    protected ?array $account = null;
    /**
     * The jednostkaNadrzedna
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * @var string|null
     */
    protected ?string $nazwa = null;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 4000
     * - minLength: 0
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The mpk
     * @var string|null
     */
    protected ?string $mpk = null;
    /**
     * Constructor method for jednostkaOrganizacyjnaType
     * @uses JednostkaOrganizacyjnaType::setAccount()
     * @uses JednostkaOrganizacyjnaType::setJednostkaNadrzedna()
     * @uses JednostkaOrganizacyjnaType::setId()
     * @uses JednostkaOrganizacyjnaType::setNazwa()
     * @uses JednostkaOrganizacyjnaType::setOpis()
     * @uses JednostkaOrganizacyjnaType::setMpk()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AccountType[] $account
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @param int $id
     * @param string $nazwa
     * @param string $opis
     * @param string $mpk
     */
    public function __construct(?array $account = null, ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null, ?int $id = null, ?string $nazwa = null, ?string $opis = null, ?string $mpk = null)
    {
        $this
            ->setAccount($account)
            ->setJednostkaNadrzedna($jednostkaNadrzedna)
            ->setId($id)
            ->setNazwa($nazwa)
            ->setOpis($opis)
            ->setMpk($mpk);
    }
    /**
     * Get account value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType[]
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }
    /**
     * This method is responsible for validating the values passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintsFromSetAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $jednostkaOrganizacyjnaTypeAccountItem) {
            // validation for constraint: itemType
            if (!$jednostkaOrganizacyjnaTypeAccountItem instanceof \WellCommerce\ElektronicznyNadawca\StructType\AccountType) {
                $invalidValues[] = is_object($jednostkaOrganizacyjnaTypeAccountItem) ? get_class($jednostkaOrganizacyjnaTypeAccountItem) : sprintf('%s(%s)', gettype($jednostkaOrganizacyjnaTypeAccountItem), var_export($jednostkaOrganizacyjnaTypeAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The account property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set account value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AccountType[] $account
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setAccount(?array $account = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintsFromSetAccount($account))) {
            throw new InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Add item to account value
     * @throws InvalidArgumentException
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AccountType $item
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function addToAccount(\WellCommerce\ElektronicznyNadawca\StructType\AccountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \WellCommerce\ElektronicznyNadawca\StructType\AccountType) {
            throw new InvalidArgumentException(sprintf('The account property can only contain items of type \WellCommerce\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->account[] = $item;
        
        return $this;
    }
    /**
     * Get jednostkaNadrzedna value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostkaNadrzedna(): ?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostkaNadrzedna;
    }
    /**
     * Set jednostkaNadrzedna value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setJednostkaNadrzedna(?\WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null): self
    {
        $this->jednostkaNadrzedna = $jednostkaNadrzedna;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($nazwa) && mb_strlen((string) $nazwa) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $nazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nazwa) && mb_strlen((string) $nazwa) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;
        
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
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        // validation for constraint: maxLength(4000)
        if (!is_null($opis) && mb_strlen((string) $opis) > 4000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4000', mb_strlen((string) $opis)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($opis) && mb_strlen((string) $opis) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get mpk value
     * @return string|null
     */
    public function getMpk(): ?string
    {
        return $this->mpk;
    }
    /**
     * Set mpk value
     * @param string $mpk
     * @return \WellCommerce\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setMpk(?string $mpk = null): self
    {
        // validation for constraint: string
        if (!is_null($mpk) && !is_string($mpk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpk, true), gettype($mpk)), __LINE__);
        }
        $this->mpk = $mpk;
        
        return $this;
    }
}
