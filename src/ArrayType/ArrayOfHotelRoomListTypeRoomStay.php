<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelRoomListTypeRoomStay ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelRoomListTypeRoomStay extends AbstractStructArrayBase
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
     * Constructor method for ArrayOfHotelRoomListTypeRoomStay
     * @uses ArrayOfHotelRoomListTypeRoomStay::setRoomStay()
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
     * @return \ArrayType\ArrayOfHotelRoomListTypeRoomStay
     */
    public function setRoomStay(array $roomStay = array())
    {
        foreach ($roomStay as $arrayOfHotelRoomListTypeRoomStayRoomStayItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelRoomListTypeRoomStayRoomStayItem instanceof \StructType\RoomStay) {
                throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \StructType\RoomStay, "%s" given', is_object($arrayOfHotelRoomListTypeRoomStayRoomStayItem) ? get_class($arrayOfHotelRoomListTypeRoomStayRoomStayItem) : gettype($arrayOfHotelRoomListTypeRoomStayRoomStayItem)), __LINE__);
            }
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Add item to RoomStay value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomStay $item
     * @return \ArrayType\ArrayOfHotelRoomListTypeRoomStay
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
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RoomStay|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RoomStay|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RoomStay|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RoomStay|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RoomStay|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoomStay
     */
    public function getAttributeName()
    {
        return 'RoomStay';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelRoomListTypeRoomStay
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
