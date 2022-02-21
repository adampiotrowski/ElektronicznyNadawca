<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelopeResponseType|bool
     */
    public function sendEnvelope(\WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope $parameters)
    {
        try {
            $this->setResult($resultSendEnvelope = $this->getSoapClient()->__soapCall('sendEnvelope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
