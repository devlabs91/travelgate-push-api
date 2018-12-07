<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanNotifResponse StructType
 * @subpackage Structs
 */
class HotelRatePlanNotifResponse extends AbstractStructBase
{
    /**
     * The HotelRatePlanNotifResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelRatePlanNotifRS
     */
    public $HotelRatePlanNotifResult;
    /**
     * Constructor method for HotelRatePlanNotifResponse
     * @uses HotelRatePlanNotifResponse::setHotelRatePlanNotifResult()
     * @param \StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanNotifResult
     */
    public function __construct(\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanNotifResult = null)
    {
        $this
            ->setHotelRatePlanNotifResult($hotelRatePlanNotifResult);
    }
    /**
     * Get HotelRatePlanNotifResult value
     * @return \StructType\OTA_HotelRatePlanNotifRS|null
     */
    public function getHotelRatePlanNotifResult()
    {
        return $this->HotelRatePlanNotifResult;
    }
    /**
     * Set HotelRatePlanNotifResult value
     * @param \StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanNotifResult
     * @return \StructType\HotelRatePlanNotifResponse
     */
    public function setHotelRatePlanNotifResult(\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanNotifResult = null)
    {
        $this->HotelRatePlanNotifResult = $hotelRatePlanNotifResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRatePlanNotifResponse
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
