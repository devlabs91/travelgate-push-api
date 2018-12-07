<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRef StructType
 * @subpackage Structs
 */
class HotelRef extends AbstractStructBase
{
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelCityCode
     * @var string
     */
    public $HotelCityCode;
    /**
     * Constructor method for HotelRef
     * @uses HotelRef::setHotelCode()
     * @uses HotelRef::setHotelCityCode()
     * @param string $hotelCode
     * @param string $hotelCityCode
     */
    public function __construct($hotelCode = null, $hotelCityCode = null)
    {
        $this
            ->setHotelCode($hotelCode)
            ->setHotelCityCode($hotelCityCode);
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
     * @return \StructType\HotelRef
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
     * Get HotelCityCode value
     * @return string|null
     */
    public function getHotelCityCode()
    {
        return $this->HotelCityCode;
    }
    /**
     * Set HotelCityCode value
     * @param string $hotelCityCode
     * @return \StructType\HotelRef
     */
    public function setHotelCityCode($hotelCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCityCode) && !is_string($hotelCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCityCode)), __LINE__);
        }
        $this->HotelCityCode = $hotelCityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRef
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
