<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelRoomListType ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelRoomListType extends AbstractStructArrayBase
{
    /**
     * The HotelRoomList
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\HotelRoomListType[]
     */
    public $HotelRoomList;
    /**
     * Constructor method for ArrayOfHotelRoomListType
     * @uses ArrayOfHotelRoomListType::setHotelRoomList()
     * @param \StructType\HotelRoomListType[] $hotelRoomList
     */
    public function __construct(array $hotelRoomList = array())
    {
        $this
            ->setHotelRoomList($hotelRoomList);
    }
    /**
     * Get HotelRoomList value
     * @return \StructType\HotelRoomListType[]|null
     */
    public function getHotelRoomList()
    {
        return $this->HotelRoomList;
    }
    /**
     * Set HotelRoomList value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRoomListType[] $hotelRoomList
     * @return \ArrayType\ArrayOfHotelRoomListType
     */
    public function setHotelRoomList(array $hotelRoomList = array())
    {
        foreach ($hotelRoomList as $arrayOfHotelRoomListTypeHotelRoomListItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelRoomListTypeHotelRoomListItem instanceof \StructType\HotelRoomListType) {
                throw new \InvalidArgumentException(sprintf('The HotelRoomList property can only contain items of \StructType\HotelRoomListType, "%s" given', is_object($arrayOfHotelRoomListTypeHotelRoomListItem) ? get_class($arrayOfHotelRoomListTypeHotelRoomListItem) : gettype($arrayOfHotelRoomListTypeHotelRoomListItem)), __LINE__);
            }
        }
        $this->HotelRoomList = $hotelRoomList;
        return $this;
    }
    /**
     * Add item to HotelRoomList value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRoomListType $item
     * @return \ArrayType\ArrayOfHotelRoomListType
     */
    public function addToHotelRoomList(\StructType\HotelRoomListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelRoomListType) {
            throw new \InvalidArgumentException(sprintf('The HotelRoomList property can only contain items of \StructType\HotelRoomListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelRoomList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\HotelRoomListType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\HotelRoomListType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\HotelRoomListType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\HotelRoomListType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\HotelRoomListType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HotelRoomList
     */
    public function getAttributeName()
    {
        return 'HotelRoomList';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelRoomListType
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
