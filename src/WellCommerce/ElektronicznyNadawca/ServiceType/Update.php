<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|bool
     */
    public function updateEnvelopeBufor(\WellCommerce\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UpdateAccount $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateAccountResponse|bool
     */
    public function updateAccount(\WellCommerce\ElektronicznyNadawca\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UpdateProfil $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateProfilResponse|bool
     */
    public function updateProfil(\WellCommerce\ElektronicznyNadawca\StructType\UpdateProfil $parameters)
    {
        try {
            $this->setResult($resultUpdateProfil = $this->getSoapClient()->__soapCall('updateProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\UpdateShopEZwroty $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse|bool
     */
    public function updateShopEZwroty(\WellCommerce\ElektronicznyNadawca\StructType\UpdateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultUpdateShopEZwroty = $this->getSoapClient()->__soapCall('updateShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\UpdateAccountResponse|\WellCommerce\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|\WellCommerce\ElektronicznyNadawca\StructType\UpdateProfilResponse|\WellCommerce\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
