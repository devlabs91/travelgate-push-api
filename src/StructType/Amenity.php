<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * @subpackage Structs
 */
class Amenity extends AbstractStructBase
{
    /**
     * The RoomAmenityCode
     * @var string
     */
    public $RoomAmenityCode;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setRoomAmenityCode()
     * @param string $roomAmenityCode
     */
    public function __construct($roomAmenityCode = null)
    {
        $this
            ->setRoomAmenityCode($roomAmenityCode);
    }
    /**
     * Get RoomAmenityCode value
     * @return string|null
     */
    public function getRoomAmenityCode()
    {
        return $this->RoomAmenityCode;
    }
    /**
     * Set RoomAmenityCode value
     * @param string $roomAmenityCode
     * @return \StructType\Amenity
     */
    public function setRoomAmenityCode($roomAmenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenityCode) && !is_string($roomAmenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenityCode)), __LINE__);
        }
        $this->RoomAmenityCode = $roomAmenityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Amenity
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
