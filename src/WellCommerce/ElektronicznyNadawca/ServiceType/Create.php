<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBufor $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|bool
     */
    public function createEnvelopeBufor(\WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultCreateEnvelopeBufor = $this->getSoapClient()->__soapCall('createEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CreateAccount $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateAccountResponse|bool
     */
    public function createAccount(\WellCommerce\ElektronicznyNadawca\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($resultCreateAccount = $this->getSoapClient()->__soapCall('createAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CreateProfil $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateProfilResponse|bool
     */
    public function createProfil(\WellCommerce\ElektronicznyNadawca\StructType\CreateProfil $parameters)
    {
        try {
            $this->setResult($resultCreateProfil = $this->getSoapClient()->__soapCall('createProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwroty $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse|bool
     */
    public function createShopEZwroty(\WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultCreateShopEZwroty = $this->getSoapClient()->__soapCall('createShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\CreateAccountResponse|\WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|\WellCommerce\ElektronicznyNadawca\StructType\CreateProfilResponse|\WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
