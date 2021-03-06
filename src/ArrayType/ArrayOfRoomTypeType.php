<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoomTypeType ArrayType
 * @subpackage Arrays
 */
class ArrayOfRoomTypeType extends AbstractStructArrayBase
{
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RoomTypeType[]
     */
    public $RoomType;
    /**
     * Constructor method for ArrayOfRoomTypeType
     * @uses ArrayOfRoomTypeType::setRoomType()
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomTypeType[] $roomType
     */
    public function __construct(array $roomType = array())
    {
        $this
            ->setRoomType($roomType);
    }
    /**
     * Get RoomType value
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType[]|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomTypeType[] $roomType
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType
     */
    public function setRoomType(array $roomType = array())
    {
        foreach ($roomType as $arrayOfRoomTypeTypeRoomTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoomTypeTypeRoomTypeItem instanceof \Devlabs91\TravelgatePushApi\StructType\RoomTypeType) {
                throw new \InvalidArgumentException(sprintf('The RoomType property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RoomTypeType, "%s" given', is_object($arrayOfRoomTypeTypeRoomTypeItem) ? get_class($arrayOfRoomTypeTypeRoomTypeItem) : gettype($arrayOfRoomTypeTypeRoomTypeItem)), __LINE__);
            }
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Add item to RoomType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomTypeType $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType
     */
    public function addToRoomType(\Devlabs91\TravelgatePushApi\StructType\RoomTypeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\RoomTypeType) {
            throw new \InvalidArgumentException(sprintf('The RoomType property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RoomTypeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomTypeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoomType
     */
    public function getAttributeName()
    {
        return 'RoomType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType
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
