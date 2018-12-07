<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomListRetrieveResponse StructType
 * @subpackage Structs
 */
class HotelRoomListRetrieveResponse extends AbstractStructBase
{
    /**
     * The HotelRoomListRetrieveResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS
     */
    public $HotelRoomListRetrieveResult;
    /**
     * Constructor method for HotelRoomListRetrieveResponse
     * @uses HotelRoomListRetrieveResponse::setHotelRoomListRetrieveResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS $hotelRoomListRetrieveResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS $hotelRoomListRetrieveResult = null)
    {
        $this
            ->setHotelRoomListRetrieveResult($hotelRoomListRetrieveResult);
    }
    /**
     * Get HotelRoomListRetrieveResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS|null
     */
    public function getHotelRoomListRetrieveResult()
    {
        return $this->HotelRoomListRetrieveResult;
    }
    /**
     * Set HotelRoomListRetrieveResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS $hotelRoomListRetrieveResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieveResponse
     */
    public function setHotelRoomListRetrieveResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRoomListRS $hotelRoomListRetrieveResult = null)
    {
        $this->HotelRoomListRetrieveResult = $hotelRoomListRetrieveResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListRetrieveResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
