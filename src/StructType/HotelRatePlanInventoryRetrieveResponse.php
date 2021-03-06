<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanInventoryRetrieveResponse StructType
 * @subpackage Structs
 */
class HotelRatePlanInventoryRetrieveResponse extends AbstractStructBase
{
    /**
     * The HotelRatePlanInventoryRetrieveResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS
     */
    public $HotelRatePlanInventoryRetrieveResult;
    /**
     * Constructor method for HotelRatePlanInventoryRetrieveResponse
     * @uses HotelRatePlanInventoryRetrieveResponse::setHotelRatePlanInventoryRetrieveResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS $hotelRatePlanInventoryRetrieveResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS $hotelRatePlanInventoryRetrieveResult = null)
    {
        $this
            ->setHotelRatePlanInventoryRetrieveResult($hotelRatePlanInventoryRetrieveResult);
    }
    /**
     * Get HotelRatePlanInventoryRetrieveResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS|null
     */
    public function getHotelRatePlanInventoryRetrieveResult()
    {
        return $this->HotelRatePlanInventoryRetrieveResult;
    }
    /**
     * Set HotelRatePlanInventoryRetrieveResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS $hotelRatePlanInventoryRetrieveResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieveResponse
     */
    public function setHotelRatePlanInventoryRetrieveResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS $hotelRatePlanInventoryRetrieveResult = null)
    {
        $this->HotelRatePlanInventoryRetrieveResult = $hotelRatePlanInventoryRetrieveResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRatePlanInventoryRetrieveResponse
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
