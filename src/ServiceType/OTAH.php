<?php

namespace Devlabs91\TravelgatePushApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for OTAH ServiceType
 * @subpackage Services
 */
class OTAH extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named OTA_HotelResRS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $oTA_HotelResRS
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS|bool
     */
    public function OTA_HotelResRS(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $oTA_HotelResRS)
    {
        try {
            $this->setResult($this->getSoapClient()->OTA_HotelResRS($oTA_HotelResRS));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResNotifRS
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
