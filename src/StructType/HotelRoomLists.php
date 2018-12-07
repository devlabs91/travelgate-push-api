<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomLists StructType
 * @subpackage Structs
 */
class HotelRoomLists extends AbstractStructBase
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
     * Constructor method for HotelRoomLists
     * @uses HotelRoomLists::setHotelRoomList()
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
     * @return \StructType\HotelRoomLists
     */
    public function setHotelRoomList(array $hotelRoomList = array())
    {
        foreach ($hotelRoomList as $hotelRoomListsHotelRoomListItem) {
            // validation for constraint: itemType
            if (!$hotelRoomListsHotelRoomListItem instanceof \StructType\HotelRoomListType) {
                throw new \InvalidArgumentException(sprintf('The HotelRoomList property can only contain items of \StructType\HotelRoomListType, "%s" given', is_object($hotelRoomListsHotelRoomListItem) ? get_class($hotelRoomListsHotelRoomListItem) : gettype($hotelRoomListsHotelRoomListItem)), __LINE__);
            }
        }
        $this->HotelRoomList = $hotelRoomList;
        return $this;
    }
    /**
     * Add item to HotelRoomList value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRoomListType $item
     * @return \StructType\HotelRoomLists
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRoomLists
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
