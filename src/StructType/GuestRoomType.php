<?php

namespace StructType;

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
     * @var \StructType\Quantities
     */
    public $Quantities;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Occupancy[]
     */
    public $Occupancy;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Room
     */
    public $Room;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParagraphType
     */
    public $Description;
    /**
     * Constructor method for GuestRoomType
     * @uses GuestRoomType::setQuantities()
     * @uses GuestRoomType::setOccupancy()
     * @uses GuestRoomType::setRoom()
     * @uses GuestRoomType::setDescription()
     * @param \StructType\Quantities $quantities
     * @param \StructType\Occupancy[] $occupancy
     * @param \StructType\Room $room
     * @param \StructType\ParagraphType $description
     */
    public function __construct(\StructType\Quantities $quantities = null, array $occupancy = array(), \StructType\Room $room = null, \StructType\ParagraphType $description = null)
    {
        $this
            ->setQuantities($quantities)
            ->setOccupancy($occupancy)
            ->setRoom($room)
            ->setDescription($description);
    }
    /**
     * Get Quantities value
     * @return \StructType\Quantities|null
     */
    public function getQuantities()
    {
        return $this->Quantities;
    }
    /**
     * Set Quantities value
     * @param \StructType\Quantities $quantities
     * @return \StructType\GuestRoomType
     */
    public function setQuantities(\StructType\Quantities $quantities = null)
    {
        $this->Quantities = $quantities;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return \StructType\Occupancy[]|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @throws \InvalidArgumentException
     * @param \StructType\Occupancy[] $occupancy
     * @return \StructType\GuestRoomType
     */
    public function setOccupancy(array $occupancy = array())
    {
        foreach ($occupancy as $guestRoomTypeOccupancyItem) {
            // validation for constraint: itemType
            if (!$guestRoomTypeOccupancyItem instanceof \StructType\Occupancy) {
                throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \StructType\Occupancy, "%s" given', is_object($guestRoomTypeOccupancyItem) ? get_class($guestRoomTypeOccupancyItem) : gettype($guestRoomTypeOccupancyItem)), __LINE__);
            }
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Add item to Occupancy value
     * @throws \InvalidArgumentException
     * @param \StructType\Occupancy $item
     * @return \StructType\GuestRoomType
     */
    public function addToOccupancy(\StructType\Occupancy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Occupancy) {
            throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \StructType\Occupancy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Occupancy[] = $item;
        return $this;
    }
    /**
     * Get Room value
     * @return \StructType\Room|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \StructType\Room $room
     * @return \StructType\GuestRoomType
     */
    public function setRoom(\StructType\Room $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Description value
     * @return \StructType\ParagraphType|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \StructType\ParagraphType $description
     * @return \StructType\GuestRoomType
     */
    public function setDescription(\StructType\ParagraphType $description = null)
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
     * @return \StructType\GuestRoomType
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
