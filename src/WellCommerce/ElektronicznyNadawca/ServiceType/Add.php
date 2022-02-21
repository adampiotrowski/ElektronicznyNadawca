<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddShipment $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponse|bool
     */
    public function addShipment(\WellCommerce\ElektronicznyNadawca\StructType\AddShipment $parameters)
    {
        try {
            $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddReklamacje $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddReklamacjeResponse|bool
     */
    public function addReklamacje(\WellCommerce\ElektronicznyNadawca\StructType\AddReklamacje $parameters)
    {
        try {
            $this->setResult($resultAddReklamacje = $this->getSoapClient()->__soapCall('addReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOdwolanieDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|bool
     */
    public function addOdwolanieDoReklamacji(\WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddOdwolanieDoReklamacji = $this->getSoapClient()->__soapCall('addOdwolanieDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOdwolanieDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRozbieznoscDoZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|bool
     */
    public function addRozbieznoscDoZapowiedziFaktur(\WellCommerce\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultAddRozbieznoscDoZapowiedziFaktur = $this->getSoapClient()->__soapCall('addRozbieznoscDoZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRozbieznoscDoZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addZalacznikDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse|bool
     */
    public function addZalacznikDoReklamacji(\WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddZalacznikDoReklamacji = $this->getSoapClient()->__soapCall('addZalacznikDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddZalacznikDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|\WellCommerce\ElektronicznyNadawca\StructType\AddReklamacjeResponse|\WellCommerce\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|\WellCommerce\ElektronicznyNadawca\StructType\AddShipmentResponse|\WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
