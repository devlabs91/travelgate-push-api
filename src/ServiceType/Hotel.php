<?php

namespace Devlabs91\TravelgatePushApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hotel ServiceType
 * @subpackage Services
 */
class Hotel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HotelAvail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvail $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailResponse|bool
     */
    public function HotelAvail(\Devlabs91\TravelgatePushApi\StructType\HotelAvail $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelAvail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelValuation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelValuation $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelValuationResponse|bool
     */
    public function HotelValuation(\Devlabs91\TravelgatePushApi\StructType\HotelValuation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelValuation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRes $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResResponse|bool
     */
    public function HotelRes(\Devlabs91\TravelgatePushApi\StructType\HotelRes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelResRead
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelResRead $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResReadResponse|bool
     */
    public function HotelResRead(\Devlabs91\TravelgatePushApi\StructType\HotelResRead $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelResRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelReservationList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationList $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationListResponse|bool
     */
    public function HotelReservationList(\Devlabs91\TravelgatePushApi\StructType\HotelReservationList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelReservationList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelDescriptiveInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfo $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfoResponse|bool
     */
    public function HotelDescriptiveInfo(\Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelDescriptiveInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelListInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelListInfo $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelListInfoResponse|bool
     */
    public function HotelListInfo(\Devlabs91\TravelgatePushApi\StructType\HotelListInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelListInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelAvailNotif
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotifResponse|bool
     */
    public function HotelAvailNotif(\Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelAvailNotif($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRatePlanNotif
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotif $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotifResponse|bool
     */
    public function HotelRatePlanNotif(\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotif $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRatePlanNotif($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRatePlanInventoryNotif
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotif $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotifResponse|bool
     */
    public function HotelRatePlanInventoryNotif(\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotif $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRatePlanInventoryNotif($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRatePlanRetrieve
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanRetrieve $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanRetrieveResponse|bool
     */
    public function HotelRatePlanRetrieve(\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanRetrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRatePlanRetrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelAvailRetrieve
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieve $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieveResponse|bool
     */
    public function HotelAvailRetrieve(\Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelAvailRetrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRatePlanInventoryRetrieve
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieve $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieveResponse|bool
     */
    public function HotelRatePlanInventoryRetrieve(\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRatePlanInventoryRetrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelResRetrieve
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelResRetrieve $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRetrieveResponse|bool
     */
    public function HotelResRetrieve(\Devlabs91\TravelgatePushApi\StructType\HotelResRetrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelResRetrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRoomListRetrieve
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieve $parameters
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieveResponse|bool
     */
    public function HotelRoomListRetrieve(\Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRoomListRetrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotifResponse|\Devlabs91\TravelgatePushApi\StructType\HotelAvailResponse|\Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieveResponse|\Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfoResponse|\Devlabs91\TravelgatePushApi\StructType\HotelListInfoResponse|\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotifResponse|\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieveResponse|\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotifResponse|\Devlabs91\TravelgatePushApi\StructType\HotelRatePlanRetrieveResponse|\Devlabs91\TravelgatePushApi\StructType\HotelReservationListResponse|\Devlabs91\TravelgatePushApi\StructType\HotelResReadResponse|\Devlabs91\TravelgatePushApi\StructType\HotelResResponse|\Devlabs91\TravelgatePushApi\StructType\HotelResRetrieveResponse|\Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieveResponse|\Devlabs91\TravelgatePushApi\StructType\HotelValuationResponse
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
