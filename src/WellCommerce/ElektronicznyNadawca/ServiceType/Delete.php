<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\DeleteShopEZwroty $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DeleteShopEZwrotyResponse|bool
     */
    public function deleteShopEZwroty(\WellCommerce\ElektronicznyNadawca\StructType\DeleteShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultDeleteShopEZwroty = $this->getSoapClient()->__soapCall('deleteShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\DeleteShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
