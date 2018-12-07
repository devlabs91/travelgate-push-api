<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailNotifResponse StructType
 * @subpackage Structs
 */
class HotelAvailNotifResponse extends AbstractStructBase
{
    /**
     * The HotelAvailNotifResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelAvailNotifRS
     */
    public $HotelAvailNotifResult;
    /**
     * Constructor method for HotelAvailNotifResponse
     * @uses HotelAvailNotifResponse::setHotelAvailNotifResult()
     * @param \StructType\OTA_HotelAvailNotifRS $hotelAvailNotifResult
     */
    public function __construct(\StructType\OTA_HotelAvailNotifRS $hotelAvailNotifResult = null)
    {
        $this
            ->setHotelAvailNotifResult($hotelAvailNotifResult);
    }
    /**
     * Get HotelAvailNotifResult value
     * @return \StructType\OTA_HotelAvailNotifRS|null
     */
    public function getHotelAvailNotifResult()
    {
        return $this->HotelAvailNotifResult;
    }
    /**
     * Set HotelAvailNotifResult value
     * @param \StructType\OTA_HotelAvailNotifRS $hotelAvailNotifResult
     * @return \StructType\HotelAvailNotifResponse
     */
    public function setHotelAvailNotifResult(\StructType\OTA_HotelAvailNotifRS $hotelAvailNotifResult = null)
    {
        $this->HotelAvailNotifResult = $hotelAvailNotifResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelAvailNotifResponse
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
