<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveInfoRequestType StructType
 * @subpackage Structs
 */
class HotelDescriptiveInfoRequestType extends AbstractStructBase
{
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * Constructor method for HotelDescriptiveInfoRequestType
     * @uses HotelDescriptiveInfoRequestType::setHotelCode()
     * @param string $hotelCode
     */
    public function __construct($hotelCode = null)
    {
        $this
            ->setHotelCode($hotelCode);
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
     * @return \StructType\HotelDescriptiveInfoRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelDescriptiveInfoRequestType
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
