<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomListType StructType
 * @subpackage Structs
 */
class HotelRoomListType extends AbstractStructBase
{
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay
     */
    public $RoomStays;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * Constructor method for HotelRoomListType
     * @uses HotelRoomListType::setRoomStays()
     * @uses HotelRoomListType::setHotelCode()
     * @uses HotelRoomListType::setHotelName()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay $roomStays
     * @param string $hotelCode
     * @param string $hotelName
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay $roomStays = null, $hotelCode = null, $hotelName = null)
    {
        $this
            ->setRoomStays($roomStays)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName);
    }
    /**
     * Get RoomStays value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay $roomStays
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListType
     */
    public function setRoomStays(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRoomListTypeRoomStay $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListType
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListType
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRoomListType
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
