<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoom StructType
 * @subpackage Structs
 */
class GuestRoom extends AbstractStructBase
{
    /**
     * The TypeRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TypeRoom[]
     */
    public $TypeRoom;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity
     */
    public $Amenities;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
     */
    public $MultimediaDescriptions;
    /**
     * The RoomTypeName
     * @var string
     */
    public $RoomTypeName;
    /**
     * The MaxOccupancy
     * @var int
     */
    public $MaxOccupancy;
    /**
     * Constructor method for GuestRoom
     * @uses GuestRoom::setTypeRoom()
     * @uses GuestRoom::setAmenities()
     * @uses GuestRoom::setMultimediaDescriptions()
     * @uses GuestRoom::setRoomTypeName()
     * @uses GuestRoom::setMaxOccupancy()
     * @param \Devlabs91\TravelgatePushApi\StructType\TypeRoom[] $typeRoom
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity $amenities
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @param string $roomTypeName
     * @param int $maxOccupancy
     */
    public function __construct(array $typeRoom = array(), \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity $amenities = null, \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions = null, $roomTypeName = null, $maxOccupancy = null)
    {
        $this
            ->setTypeRoom($typeRoom)
            ->setAmenities($amenities)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRoomTypeName($roomTypeName)
            ->setMaxOccupancy($maxOccupancy);
    }
    /**
     * Get TypeRoom value
     * @return \Devlabs91\TravelgatePushApi\StructType\TypeRoom[]|null
     */
    public function getTypeRoom()
    {
        return $this->TypeRoom;
    }
    /**
     * Set TypeRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\TypeRoom[] $typeRoom
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function setTypeRoom(array $typeRoom = array())
    {
        foreach ($typeRoom as $guestRoomTypeRoomItem) {
            // validation for constraint: itemType
            if (!$guestRoomTypeRoomItem instanceof \Devlabs91\TravelgatePushApi\StructType\TypeRoom) {
                throw new \InvalidArgumentException(sprintf('The TypeRoom property can only contain items of \Devlabs91\TravelgatePushApi\StructType\TypeRoom, "%s" given', is_object($guestRoomTypeRoomItem) ? get_class($guestRoomTypeRoomItem) : gettype($guestRoomTypeRoomItem)), __LINE__);
            }
        }
        $this->TypeRoom = $typeRoom;
        return $this;
    }
    /**
     * Add item to TypeRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\TypeRoom $item
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function addToTypeRoom(\Devlabs91\TravelgatePushApi\StructType\TypeRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\TypeRoom) {
            throw new \InvalidArgumentException(sprintf('The TypeRoom property can only contain items of \Devlabs91\TravelgatePushApi\StructType\TypeRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TypeRoom[] = $item;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity $amenities
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function setAmenities(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfFacilityInfoTypeGuestRoomsGuestRoomAmenity $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function setMultimediaDescriptions(\Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get RoomTypeName value
     * @return string|null
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }
    /**
     * Set RoomTypeName value
     * @param string $roomTypeName
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function setRoomTypeName($roomTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeName) && !is_string($roomTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeName)), __LINE__);
        }
        $this->RoomTypeName = $roomTypeName;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoom
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
