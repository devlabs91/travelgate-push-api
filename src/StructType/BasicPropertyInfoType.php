<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicPropertyInfoType StructType
 * @subpackage Structs
 */
class BasicPropertyInfoType extends AbstractStructBase
{
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * Constructor method for BasicPropertyInfoType
     * @uses BasicPropertyInfoType::setHotelCode()
     * @uses BasicPropertyInfoType::setHotelName()
     * @param string $hotelCode
     * @param string $hotelName
     */
    public function __construct($hotelCode = null, $hotelName = null)
    {
        $this
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName);
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \StructType\BasicPropertyInfoType
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \StructType\BasicPropertyInfoType
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BasicPropertyInfoType
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
