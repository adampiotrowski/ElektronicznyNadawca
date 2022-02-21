<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setAktywnaKarta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SetAktywnaKarta $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|bool
     */
    public function setAktywnaKarta(\WellCommerce\ElektronicznyNadawca\StructType\SetAktywnaKarta $parameters)
    {
        try {
            $this->setResult($resultSetAktywnaKarta = $this->getSoapClient()->__soapCall('setAktywnaKarta', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAktywnaKarta;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setEnvelopeBuforDataNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     */
    public function setEnvelopeBuforDataNadania(\WellCommerce\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania $parameters)
    {
        try {
            $this->setResult($resultSetEnvelopeBuforDataNadania = $this->getSoapClient()->__soapCall('setEnvelopeBuforDataNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEnvelopeBuforDataNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setStatusZgodyNaEZwrot
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse|bool
     */
    public function setStatusZgodyNaEZwrot(\WellCommerce\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot $parameters)
    {
        try {
            $this->setResult($resultSetStatusZgodyNaEZwrot = $this->getSoapClient()->__soapCall('setStatusZgodyNaEZwrot', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStatusZgodyNaEZwrot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|bool
     */
    public function setJednostkaOrganizacyjna(\WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultSetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('setJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|\WellCommerce\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|\WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|\WellCommerce\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
