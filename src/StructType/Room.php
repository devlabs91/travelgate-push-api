<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Room StructType
 * @subpackage Structs
 */
class Room extends AbstractStructBase
{
    /**
     * The RoomType
     * @var string
     */
    public $RoomType;
    /**
     * The RoomTypeCode
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The RoomID
     * @var string
     */
    public $RoomID;
    /**
     * Constructor method for Room
     * @uses Room::setRoomType()
     * @uses Room::setRoomTypeCode()
     * @uses Room::setRoomID()
     * @param string $roomType
     * @param string $roomTypeCode
     * @param string $roomID
     */
    public function __construct($roomType = null, $roomTypeCode = null, $roomID = null)
    {
        $this
            ->setRoomType($roomType)
            ->setRoomTypeCode($roomTypeCode)
            ->setRoomID($roomID);
    }
    /**
     * Get RoomType value
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param string $roomType
     * @return \Devlabs91\TravelgatePushApi\StructType\Room
     */
    public function setRoomType($roomType = null)
    {
        // validation for constraint: string
        if (!is_null($roomType) && !is_string($roomType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomType)), __LINE__);
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Room
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get RoomID value
     * @return string|null
     */
    public function getRoomID()
    {
        return $this->RoomID;
    }
    /**
     * Set RoomID value
     * @param string $roomID
     * @return \Devlabs91\TravelgatePushApi\StructType\Room
     */
    public function setRoomID($roomID = null)
    {
        // validation for constraint: string
        if (!is_null($roomID) && !is_string($roomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomID)), __LINE__);
        }
        $this->RoomID = $roomID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Room
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
