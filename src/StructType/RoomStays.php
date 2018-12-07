<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStays StructType
 * @subpackage Structs
 */
class RoomStays extends AbstractStructBase
{
    /**
     * The RoomStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RoomStay[]
     */
    public $RoomStay;
    /**
     * Constructor method for RoomStays
     * @uses RoomStays::setRoomStay()
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomStay[] $roomStay
     */
    public function __construct(array $roomStay = array())
    {
        $this
            ->setRoomStay($roomStay);
    }
    /**
     * Get RoomStay value
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStay[]|null
     */
    public function getRoomStay()
    {
        return $this->RoomStay;
    }
    /**
     * Set RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomStay[] $roomStay
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStays
     */
    public function setRoomStay(array $roomStay = array())
    {
        foreach ($roomStay as $roomStaysRoomStayItem) {
            // validation for constraint: itemType
            if (!$roomStaysRoomStayItem instanceof \Devlabs91\TravelgatePushApi\StructType\RoomStay) {
                throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RoomStay, "%s" given', is_object($roomStaysRoomStayItem) ? get_class($roomStaysRoomStayItem) : gettype($roomStaysRoomStayItem)), __LINE__);
            }
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Add item to RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomStay $item
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStays
     */
    public function addToRoomStay(\Devlabs91\TravelgatePushApi\StructType\RoomStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\RoomStay) {
            throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RoomStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomStay[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStays
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
