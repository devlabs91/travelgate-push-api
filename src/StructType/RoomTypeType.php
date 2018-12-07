<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypeType StructType
 * @subpackage Structs
 */
class RoomTypeType extends AbstractStructBase
{
    /**
     * The RoomDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParagraphType
     */
    public $RoomDescription;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Occupancy[]
     */
    public $Occupancy;
    /**
     * The NumberOfUnits
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The RoomType
     * @var string
     */
    public $RoomType;
    /**
     * The RoomTypeCode
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The RoomID
     * @var string
     */
    public $RoomID;
    /**
     * Constructor method for RoomTypeType
     * @uses RoomTypeType::setRoomDescription()
     * @uses RoomTypeType::setOccupancy()
     * @uses RoomTypeType::setNumberOfUnits()
     * @uses RoomTypeType::setRoomType()
     * @uses RoomTypeType::setRoomTypeCode()
     * @uses RoomTypeType::setRoomID()
     * @param \StructType\ParagraphType $roomDescription
     * @param \StructType\Occupancy[] $occupancy
     * @param int $numberOfUnits
     * @param string $roomType
     * @param string $roomTypeCode
     * @param string $roomID
     */
    public function __construct(\StructType\ParagraphType $roomDescription = null, array $occupancy = array(), $numberOfUnits = null, $roomType = null, $roomTypeCode = null, $roomID = null)
    {
        $this
            ->setRoomDescription($roomDescription)
            ->setOccupancy($occupancy)
            ->setNumberOfUnits($numberOfUnits)
            ->setRoomType($roomType)
            ->setRoomTypeCode($roomTypeCode)
            ->setRoomID($roomID);
    }
    /**
     * Get RoomDescription value
     * @return \StructType\ParagraphType|null
     */
    public function getRoomDescription()
    {
        return $this->RoomDescription;
    }
    /**
     * Set RoomDescription value
     * @param \StructType\ParagraphType $roomDescription
     * @return \StructType\RoomTypeType
     */
    public function setRoomDescription(\StructType\ParagraphType $roomDescription = null)
    {
        $this->RoomDescription = $roomDescription;
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
     * @return \StructType\RoomTypeType
     */
    public function setOccupancy(array $occupancy = array())
    {
        foreach ($occupancy as $roomTypeTypeOccupancyItem) {
            // validation for constraint: itemType
            if (!$roomTypeTypeOccupancyItem instanceof \StructType\Occupancy) {
                throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \StructType\Occupancy, "%s" given', is_object($roomTypeTypeOccupancyItem) ? get_class($roomTypeTypeOccupancyItem) : gettype($roomTypeTypeOccupancyItem)), __LINE__);
            }
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Add item to Occupancy value
     * @throws \InvalidArgumentException
     * @param \StructType\Occupancy $item
     * @return \StructType\RoomTypeType
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
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \StructType\RoomTypeType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get RoomType value
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param string $roomType
     * @return \StructType\RoomTypeType
     */
    public function setRoomType($roomType = null)
    {
        // validation for constraint: string
        if (!is_null($roomType) && !is_string($roomType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomType)), __LINE__);
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \StructType\RoomTypeType
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get RoomID value
     * @return string|null
     */
    public function getRoomID()
    {
        return $this->RoomID;
    }
    /**
     * Set RoomID value
     * @param string $roomID
     * @return \StructType\RoomTypeType
     */
    public function setRoomID($roomID = null)
    {
        // validation for constraint: string
        if (!is_null($roomID) && !is_string($roomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomID)), __LINE__);
        }
        $this->RoomID = $roomID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RoomTypeType
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
