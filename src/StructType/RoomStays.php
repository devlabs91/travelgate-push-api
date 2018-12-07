<?php

namespace StructType;

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
     * @var \StructType\RoomStay[]
     */
    public $RoomStay;
    /**
     * Constructor method for RoomStays
     * @uses RoomStays::setRoomStay()
     * @param \StructType\RoomStay[] $roomStay
     */
    public function __construct(array $roomStay = array())
    {
        $this
            ->setRoomStay($roomStay);
    }
    /**
     * Get RoomStay value
     * @return \StructType\RoomStay[]|null
     */
    public function getRoomStay()
    {
        return $this->RoomStay;
    }
    /**
     * Set RoomStay value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomStay[] $roomStay
     * @return \StructType\RoomStays
     */
    public function setRoomStay(array $roomStay = array())
    {
        foreach ($roomStay as $roomStaysRoomStayItem) {
            // validation for constraint: itemType
            if (!$roomStaysRoomStayItem instanceof \StructType\RoomStay) {
                throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \StructType\RoomStay, "%s" given', is_object($roomStaysRoomStayItem) ? get_class($roomStaysRoomStayItem) : gettype($roomStaysRoomStayItem)), __LINE__);
            }
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Add item to RoomStay value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomStay $item
     * @return \StructType\RoomStays
     */
    public function addToRoomStay(\StructType\RoomStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RoomStay) {
            throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \StructType\RoomStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\RoomStays
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
