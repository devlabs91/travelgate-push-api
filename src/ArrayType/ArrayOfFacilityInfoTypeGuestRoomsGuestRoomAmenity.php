<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
 * ArrayType
 * @subpackage Arrays
 */
class ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity extends AbstractStructArrayBase
{
    /**
     * The Amenity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Amenity[]
     */
    public $Amenity;
    /**
     * Constructor method for ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
     * @uses ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity::setAmenity()
     * @param \Devlabs91\TravelgatePushApi\StructType\Amenity[] $amenity
     */
    public function __construct(array $amenity = array())
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity[]|null
     */
    public function getAmenity()
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Amenity[] $amenity
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
     */
    public function setAmenity(array $amenity = array())
    {
        foreach ($amenity as $arrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenityAmenityItem) {
            // validation for constraint: itemType
            if (!$arrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenityAmenityItem instanceof \Devlabs91\TravelgatePushApi\StructType\Amenity) {
                throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Amenity, "%s" given', is_object($arrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenityAmenityItem) ? get_class($arrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenityAmenityItem) : gettype($arrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenityAmenityItem)), __LINE__);
            }
        }
        $this->Amenity = $amenity;
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Amenity $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
     */
    public function addToAmenity(\Devlabs91\TravelgatePushApi\StructType\Amenity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Amenity) {
            throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Amenity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amenity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Amenity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Amenity
     */
    public function getAttributeName()
    {
        return 'Amenity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
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
