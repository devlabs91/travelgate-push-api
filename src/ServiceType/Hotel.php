<?php

namespace ServiceType;

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
     * @param \StructType\HotelAvail $parameters
     * @return \StructType\HotelAvailResponse|bool
     */
    public function HotelAvail(\StructType\HotelAvail $parameters)
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
     * @param \StructType\HotelValuation $parameters
     * @return \StructType\HotelValuationResponse|bool
     */
    public function HotelValuation(\StructType\HotelValuation $parameters)
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
     * @param \StructType\HotelRes $parameters
     * @return \StructType\HotelResResponse|bool
     */
    public function HotelRes(\StructType\HotelRes $parameters)
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
     * @param \StructType\HotelResRead $parameters
     * @return \StructType\HotelResReadResponse|bool
     */
    public function HotelResRead(\StructType\HotelResRead $parameters)
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
     * @param \StructType\HotelReservationList $parameters
     * @return \StructType\HotelReservationListResponse|bool
     */
    public function HotelReservationList(\StructType\HotelReservationList $parameters)
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
     * @param \StructType\HotelDescriptiveInfo $parameters
     * @return \StructType\HotelDescriptiveInfoResponse|bool
     */
    public function HotelDescriptiveInfo(\StructType\HotelDescriptiveInfo $parameters)
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
     * @param \StructType\HotelListInfo $parameters
     * @return \StructType\HotelListInfoResponse|bool
     */
    public function HotelListInfo(\StructType\HotelListInfo $parameters)
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
     * @param \StructType\HotelAvailNotif $parameters
     * @return \StructType\HotelAvailNotifResponse|bool
     */
    public function HotelAvailNotif(\StructType\HotelAvailNotif $parameters)
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
     * @param \StructType\HotelRatePlanNotif $parameters
     * @return \StructType\HotelRatePlanNotifResponse|bool
     */
    public function HotelRatePlanNotif(\StructType\HotelRatePlanNotif $parameters)
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
     * @param \StructType\HotelRatePlanInventoryNotif $parameters
     * @return \StructType\HotelRatePlanInventoryNotifResponse|bool
     */
    public function HotelRatePlanInventoryNotif(\StructType\HotelRatePlanInventoryNotif $parameters)
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
     * @param \StructType\HotelRatePlanRetrieve $parameters
     * @return \StructType\HotelRatePlanRetrieveResponse|bool
     */
    public function HotelRatePlanRetrieve(\StructType\HotelRatePlanRetrieve $parameters)
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
     * @param \StructType\HotelAvailRetrieve $parameters
     * @return \StructType\HotelAvailRetrieveResponse|bool
     */
    public function HotelAvailRetrieve(\StructType\HotelAvailRetrieve $parameters)
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
     * @param \StructType\HotelRatePlanInventoryRetrieve $parameters
     * @return \StructType\HotelRatePlanInventoryRetrieveResponse|bool
     */
    public function HotelRatePlanInventoryRetrieve(\StructType\HotelRatePlanInventoryRetrieve $parameters)
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
     * @param \StructType\HotelResRetrieve $parameters
     * @return \StructType\HotelResRetrieveResponse|bool
     */
    public function HotelResRetrieve(\StructType\HotelResRetrieve $parameters)
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
     * @param \StructType\HotelRoomListRetrieve $parameters
     * @return \StructType\HotelRoomListRetrieveResponse|bool
     */
    public function HotelRoomListRetrieve(\StructType\HotelRoomListRetrieve $parameters)
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
     * @return \StructType\HotelAvailNotifResponse|\StructType\HotelAvailResponse|\StructType\HotelAvailRetrieveResponse|\StructType\HotelDescriptiveInfoResponse|\StructType\HotelListInfoResponse|\StructType\HotelRatePlanInventoryNotifResponse|\StructType\HotelRatePlanInventoryRetrieveResponse|\StructType\HotelRatePlanNotifResponse|\StructType\HotelRatePlanRetrieveResponse|\StructType\HotelReservationListResponse|\StructType\HotelResReadResponse|\StructType\HotelResResponse|\StructType\HotelResRetrieveResponse|\StructType\HotelRoomListRetrieveResponse|\StructType\HotelValuationResponse
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
