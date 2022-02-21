<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAccount StructType
 * @subpackage Structs
 */
class UpdateAccount extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\AccountType $account;
    /**
     * Constructor method for updateAccount
     * @uses UpdateAccount::setAccount()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AccountType $account
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\AccountType $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AccountType
     */
    public function getAccount(): \WellCommerce\ElektronicznyNadawca\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AccountType $account
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateAccount
     */
    public function setAccount(\WellCommerce\ElektronicznyNadawca\StructType\AccountType $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
