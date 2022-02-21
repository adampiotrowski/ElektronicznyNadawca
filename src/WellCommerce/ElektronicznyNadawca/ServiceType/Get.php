<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getUrzedyNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadania $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|bool
     */
    public function getUrzedyNadania(\WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadania $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getUrzedyNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     */
    public function getUrzedyWydajaceEPrzesylki(\WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyWydajaceEPrzesylki = $this->getSoapClient()->__soapCall('getUrzedyWydajaceEPrzesylki', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUrzedyWydajaceEPrzesylki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeStatus $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|bool
     */
    public function getEnvelopeStatus(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeStatus = $this->getSoapClient()->__soapCall('getEnvelopeStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKarty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetKarty $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse|bool
     */
    public function getKarty(\WellCommerce\ElektronicznyNadawca\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($resultGetKarty = $this->getSoapClient()->__soapCall('getKarty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKarty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPasswordExpiredDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetPasswordExpiredDate $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|bool
     */
    public function getPasswordExpiredDate(\WellCommerce\ElektronicznyNadawca\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($resultGetPasswordExpiredDate = $this->getSoapClient()->__soapCall('getPasswordExpiredDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPasswordExpiredDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeContentShort
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShort $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|bool
     */
    public function getEnvelopeContentShort(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentShort = $this->getSoapClient()->__soapCall('getEnvelopeContentShort', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeContentShort;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeContentFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentFull $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|bool
     */
    public function getEnvelopeContentFull(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentFull = $this->getSoapClient()->__soapCall('getEnvelopeContentFull', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeContentFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddressLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetAddressLabel $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddressLabelResponse|bool
     */
    public function getAddressLabel(\WellCommerce\ElektronicznyNadawca\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($resultGetAddressLabel = $this->getSoapClient()->__soapCall('getAddressLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddressLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOutboxBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetOutboxBook $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetOutboxBookResponse|bool
     */
    public function getOutboxBook(\WellCommerce\ElektronicznyNadawca\StructType\GetOutboxBook $parameters)
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOutboxBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFirmowaPocztaBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|bool
     */
    public function getFirmowaPocztaBook(\WellCommerce\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($resultGetFirmowaPocztaBook = $this->getSoapClient()->__soapCall('getFirmowaPocztaBook', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFirmowaPocztaBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|bool
     */
    public function getEnvelopeList(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeList = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelByGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuid $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|bool
     */
    public function getAddresLabelByGuid(\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuid = $this->getSoapClient()->__soapCall('getAddresLabelByGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelByGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPlacowkiPocztowe
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|bool
     */
    public function getPlacowkiPocztowe(\WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkiPocztowe = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPlacowkiPocztowe;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetGuid $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetGuidResponse|bool
     */
    public function getGuid(\WellCommerce\ElektronicznyNadawca\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($resultGetGuid = $this->getSoapClient()->__soapCall('getGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKierunki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetKierunki $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse|bool
     */
    public function getKierunki(\WellCommerce\ElektronicznyNadawca\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($resultGetKierunki = $this->getSoapClient()->__soapCall('getKierunki', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKierunki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getKierunkiInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfo $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|bool
     */
    public function getKierunkiInfo(\WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($resultGetKierunkiInfo = $this->getSoapClient()->__soapCall('getKierunkiInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetKierunkiInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBufor $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|bool
     */
    public function getEnvelopeBufor(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEPOStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatus $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse|bool
     */
    public function getEPOStatus(\WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($resultGetEPOStatus = $this->getSoapClient()->__soapCall('getEPOStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEPOStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompact $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|bool
     */
    public function getAddresLabelCompact(\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelCompact = $this->getSoapClient()->__soapCall('getAddresLabelCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|bool
     */
    public function getAddresLabelByGuidCompact(\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuidCompact = $this->getSoapClient()->__soapCall('getAddresLabelByGuidCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddresLabelByGuidCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEnvelopeBuforList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|bool
     */
    public function getEnvelopeBuforList(\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUbezpieczeniaInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|bool
     */
    public function getUbezpieczeniaInfo(\WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($resultGetUbezpieczeniaInfo = $this->getSoapClient()->__soapCall('getUbezpieczeniaInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUbezpieczeniaInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|bool
     */
    public function getBlankietPobraniaByGuids(\WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($resultGetBlankietPobraniaByGuids = $this->getSoapClient()->__soapCall('getBlankietPobraniaByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBlankietPobraniaByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetAccountList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAccountListResponse|bool
     */
    public function getAccountList(\WellCommerce\ElektronicznyNadawca\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($resultGetAccountList = $this->getSoapClient()->__soapCall('getAccountList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProfilList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetProfilList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetProfilListResponse|bool
     */
    public function getProfilList(\WellCommerce\ElektronicznyNadawca\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacje $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacjeResponse|bool
     */
    public function getReklamacje(\WellCommerce\ElektronicznyNadawca\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($resultGetReklamacje = $this->getSoapClient()->__soapCall('getReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetZapowiedziFaktur $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse|bool
     */
    public function getZapowiedziFaktur(\WellCommerce\ElektronicznyNadawca\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultGetZapowiedziFaktur = $this->getSoapClient()->__soapCall('getZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getListaPowodowReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|bool
     */
    public function getListaPowodowReklamacji(\WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($resultGetListaPowodowReklamacji = $this->getSoapClient()->__soapCall('getListaPowodowReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListaPowodowReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEZDO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEZDO $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOResponse|bool
     */
    public function getEZDO(\WellCommerce\ElektronicznyNadawca\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($resultGetEZDO = $this->getSoapClient()->__soapCall('getEZDO', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEZDO;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEZDOList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOListResponse|bool
     */
    public function getEZDOList(\WellCommerce\ElektronicznyNadawca\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($resultGetEZDOList = $this->getSoapClient()->__soapCall('getEZDOList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEZDOList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWplatyCKP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKP $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|bool
     */
    public function getWplatyCKP(\WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($resultGetWplatyCKP = $this->getSoapClient()->__soapCall('getWplatyCKP', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWplatyCKP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getListaZgodEZwrotow
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|bool
     */
    public function getListaZgodEZwrotow(\WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($resultGetListaZgodEZwrotow = $this->getSoapClient()->__soapCall('getListaZgodEZwrotow', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListaZgodEZwrotow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaczkaKorzysciInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfo $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse|bool
     */
    public function getPaczkaKorzysciInfo(\WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfo $parameters)
    {
        try {
            $this->setResult($resultGetPaczkaKorzysciInfo = $this->getSoapClient()->__soapCall('getPaczkaKorzysciInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaczkaKorzysciInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|bool
     */
    public function getJednostkaOrganizacyjna(\WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultGetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('getJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcel $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|bool
     */
    public function getPrintForParcel(\WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcel $parameters)
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShopEZwrotyList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyList $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse|bool
     */
    public function getShopEZwrotyList(\WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyList $parameters)
    {
        try {
            $this->setResult($resultGetShopEZwrotyList = $this->getSoapClient()->__soapCall('getShopEZwrotyList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShopEZwrotyList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLibrariesForLegalDeposits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDeposits $parameters
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse|bool
     */
    public function getLibrariesForLegalDeposits(\WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDeposits $parameters)
    {
        try {
            $this->setResult($resultGetLibrariesForLegalDeposits = $this->getSoapClient()->__soapCall('getLibrariesForLegalDeposits', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLibrariesForLegalDeposits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetAccountListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetAddressLabelResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatusResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEZDOListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetEZDOResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetGuidResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetKartyResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetOutboxBookResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetProfilListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetReklamacjeResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|\WellCommerce\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
