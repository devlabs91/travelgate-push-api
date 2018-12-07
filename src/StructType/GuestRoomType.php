<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoomType StructType
 * @subpackage Structs
 */
class GuestRoomType extends AbstractStructBase
{
    /**
     * The Quantities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Quantities
     */
    public $Quantities;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Occupancy[]
     */
    public $Occupancy;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Room
     */
    public $Room;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType
     */
    public $Description;
    /**
     * Constructor method for GuestRoomType
     * @uses GuestRoomType::setQuantities()
     * @uses GuestRoomType::setOccupancy()
     * @uses GuestRoomType::setRoom()
     * @uses GuestRoomType::setDescription()
     * @param \Devlabs91\TravelgatePushApi\StructType\Quantities $quantities
     * @param \Devlabs91\TravelgatePushApi\StructType\Occupancy[] $occupancy
     * @param \Devlabs91\TravelgatePushApi\StructType\Room $room
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\Quantities $quantities = null, array $occupancy = array(), \Devlabs91\TravelgatePushApi\StructType\Room $room = null, \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description = null)
    {
        $this
            ->setQuantities($quantities)
            ->setOccupancy($occupancy)
            ->setRoom($room)
            ->setDescription($description);
    }
    /**
     * Get Quantities value
     * @return \Devlabs91\TravelgatePushApi\StructType\Quantities|null
     */
    public function getQuantities()
    {
        return $this->Quantities;
    }
    /**
     * Set Quantities value
     * @param \Devlabs91\TravelgatePushApi\StructType\Quantities $quantities
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public function setQuantities(\Devlabs91\TravelgatePushApi\StructType\Quantities $quantities = null)
    {
        $this->Quantities = $quantities;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy[]|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Occupancy[] $occupancy
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public function setOccupancy(array $occupancy = array())
    {
        foreach ($occupancy as $guestRoomTypeOccupancyItem) {
            // validation for constraint: itemType
            if (!$guestRoomTypeOccupancyItem instanceof \Devlabs91\TravelgatePushApi\StructType\Occupancy) {
                throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Occupancy, "%s" given', is_object($guestRoomTypeOccupancyItem) ? get_class($guestRoomTypeOccupancyItem) : gettype($guestRoomTypeOccupancyItem)), __LINE__);
            }
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Add item to Occupancy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Occupancy $item
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public function addToOccupancy(\Devlabs91\TravelgatePushApi\StructType\Occupancy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Occupancy) {
            throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Occupancy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Occupancy[] = $item;
        return $this;
    }
    /**
     * Get Room value
     * @return \Devlabs91\TravelgatePushApi\StructType\Room|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \Devlabs91\TravelgatePushApi\StructType\Room $room
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public function setRoom(\Devlabs91\TravelgatePushApi\StructType\Room $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Description value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $description
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
     */
    public function setDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRoomType
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
