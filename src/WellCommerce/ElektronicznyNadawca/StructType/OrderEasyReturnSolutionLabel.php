<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderEasyReturnSolutionLabel StructType
 * @subpackage Structs
 */
class OrderEasyReturnSolutionLabel extends AbstractStructBase
{
    /**
     * The senderAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AddressType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\AddressType $senderAddress;
    /**
     * The recipientAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AddressType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\AddressType $recipientAddress;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - documentation: Shipment weight [g].
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $weight = null;
    /**
     * The customsDeclaration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: If not set, getPrintForParcel method should be used to get label.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType|null
     */
    protected ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: Description. maxLength: 30
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for orderEasyReturnSolutionLabel
     * @uses OrderEasyReturnSolutionLabel::setSenderAddress()
     * @uses OrderEasyReturnSolutionLabel::setRecipientAddress()
     * @uses OrderEasyReturnSolutionLabel::setWeight()
     * @uses OrderEasyReturnSolutionLabel::setCustomsDeclaration()
     * @uses OrderEasyReturnSolutionLabel::setDeliveryMethod()
     * @uses OrderEasyReturnSolutionLabel::setDescription()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressType $senderAddress
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressType $recipientAddress
     * @param int $weight
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod
     * @param string $description
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\AddressType $senderAddress, \WellCommerce\ElektronicznyNadawca\StructType\AddressType $recipientAddress, ?int $weight = null, ?\WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null, ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null, ?string $description = null)
    {
        $this
            ->setSenderAddress($senderAddress)
            ->setRecipientAddress($recipientAddress)
            ->setWeight($weight)
            ->setCustomsDeclaration($customsDeclaration)
            ->setDeliveryMethod($deliveryMethod)
            ->setDescription($description);
    }
    /**
     * Get senderAddress value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddressType
     */
    public function getSenderAddress(): \WellCommerce\ElektronicznyNadawca\StructType\AddressType
    {
        return $this->senderAddress;
    }
    /**
     * Set senderAddress value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressType $senderAddress
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setSenderAddress(\WellCommerce\ElektronicznyNadawca\StructType\AddressType $senderAddress): self
    {
        $this->senderAddress = $senderAddress;
        
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddressType
     */
    public function getRecipientAddress(): \WellCommerce\ElektronicznyNadawca\StructType\AddressType
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddressType $recipientAddress
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setRecipientAddress(\WellCommerce\ElektronicznyNadawca\StructType\AddressType $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;
        
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setWeight(?int $weight = null): self
    {
        // validation for constraint: int
        if (!is_null($weight) && !(is_int($weight) || ctype_digit($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get customsDeclaration value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType|null
     */
    public function getCustomsDeclaration(): ?\WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType
    {
        return $this->customsDeclaration;
    }
    /**
     * Set customsDeclaration value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setCustomsDeclaration(?\WellCommerce\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null): self
    {
        $this->customsDeclaration = $customsDeclaration;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType|null
     */
    public function getDeliveryMethod(): ?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDeliveryMethod(?\WellCommerce\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
