<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeRoom StructType
 * @subpackage Structs
 */
class TypeRoom extends AbstractStructBase
{
    /**
     * The StandardOccupancy
     * @var int
     */
    public $StandardOccupancy;
    /**
     * The Size
     * @var int
     */
    public $Size;
    /**
     * The RoomTypeCode
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The RoomViewCode
     * @var string
     */
    public $RoomViewCode;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The RoomClassificationCode
     * @var string
     */
    public $RoomClassificationCode;
    /**
     * Constructor method for TypeRoom
     * @uses TypeRoom::setStandardOccupancy()
     * @uses TypeRoom::setSize()
     * @uses TypeRoom::setRoomTypeCode()
     * @uses TypeRoom::setRoomViewCode()
     * @uses TypeRoom::setQuantity()
     * @uses TypeRoom::setRoomClassificationCode()
     * @param int $standardOccupancy
     * @param int $size
     * @param string $roomTypeCode
     * @param string $roomViewCode
     * @param int $quantity
     * @param string $roomClassificationCode
     */
    public function __construct($standardOccupancy = null, $size = null, $roomTypeCode = null, $roomViewCode = null, $quantity = null, $roomClassificationCode = null)
    {
        $this
            ->setStandardOccupancy($standardOccupancy)
            ->setSize($size)
            ->setRoomTypeCode($roomTypeCode)
            ->setRoomViewCode($roomViewCode)
            ->setQuantity($quantity)
            ->setRoomClassificationCode($roomClassificationCode);
    }
    /**
     * Get StandardOccupancy value
     * @return int|null
     */
    public function getStandardOccupancy()
    {
        return $this->StandardOccupancy;
    }
    /**
     * Set StandardOccupancy value
     * @param int $standardOccupancy
     * @return \StructType\TypeRoom
     */
    public function setStandardOccupancy($standardOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($standardOccupancy) && !is_numeric($standardOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardOccupancy)), __LINE__);
        }
        $this->StandardOccupancy = $standardOccupancy;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\TypeRoom
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
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
     * @return \StructType\TypeRoom
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
     * Get RoomViewCode value
     * @return string|null
     */
    public function getRoomViewCode()
    {
        return $this->RoomViewCode;
    }
    /**
     * Set RoomViewCode value
     * @param string $roomViewCode
     * @return \StructType\TypeRoom
     */
    public function setRoomViewCode($roomViewCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomViewCode) && !is_string($roomViewCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomViewCode)), __LINE__);
        }
        $this->RoomViewCode = $roomViewCode;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \StructType\TypeRoom
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get RoomClassificationCode value
     * @return string|null
     */
    public function getRoomClassificationCode()
    {
        return $this->RoomClassificationCode;
    }
    /**
     * Set RoomClassificationCode value
     * @param string $roomClassificationCode
     * @return \StructType\TypeRoom
     */
    public function setRoomClassificationCode($roomClassificationCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomClassificationCode) && !is_string($roomClassificationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomClassificationCode)), __LINE__);
        }
        $this->RoomClassificationCode = $roomClassificationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TypeRoom
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
