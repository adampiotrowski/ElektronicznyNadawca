<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wyslij ServiceType
 * @subpackage Services
 */
class Wyslij extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     */
    public function wyslijLinkaOStatusieEZwrotu(\WellCommerce\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($resultWyslijLinkaOStatusieEZwrotu = $this->getSoapClient()->__soapCall('wyslijLinkaOStatusieEZwrotu', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWyslijLinkaOStatusieEZwrotu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
