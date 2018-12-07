<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanInventoryNotifResponse StructType
 * @subpackage Structs
 */
class HotelRatePlanInventoryNotifResponse extends AbstractStructBase
{
    /**
     * The HotelRatePlanInventoryNotifResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS
     */
    public $HotelRatePlanInventoryNotifResult;
    /**
     * Constructor method for HotelRatePlanInventoryNotifResponse
     * @uses HotelRatePlanInventoryNotifResponse::setHotelRatePlanInventoryNotifResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanInventoryNotifResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanInventoryNotifResult = null)
    {
        $this
            ->setHotelRatePlanInventoryNotifResult($hotelRatePlanInventoryNotifResult);
    }
    /**
     * Get HotelRatePlanInventoryNotifResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS|null
     */
    public function getHotelRatePlanInventoryNotifResult()
    {
        return $this->HotelRatePlanInventoryNotifResult;
    }
    /**
     * Set HotelRatePlanInventoryNotifResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanInventoryNotifResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotifResponse
     */
    public function setHotelRatePlanInventoryNotifResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS $hotelRatePlanInventoryNotifResult = null)
    {
        $this->HotelRatePlanInventoryNotifResult = $hotelRatePlanInventoryNotifResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryNotifResponse
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
