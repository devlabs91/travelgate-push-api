<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelValuationResponse StructType
 * @subpackage Structs
 */
class HotelValuationResponse extends AbstractStructBase
{
    /**
     * The HotelValuationResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS
     */
    public $HotelValuationResult;
    /**
     * Constructor method for HotelValuationResponse
     * @uses HotelValuationResponse::setHotelValuationResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelValuationResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelValuationResult = null)
    {
        $this
            ->setHotelValuationResult($hotelValuationResult);
    }
    /**
     * Get HotelValuationResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS|null
     */
    public function getHotelValuationResult()
    {
        return $this->HotelValuationResult;
    }
    /**
     * Set HotelValuationResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelValuationResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelValuationResponse
     */
    public function setHotelValuationResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelValuationResult = null)
    {
        $this->HotelValuationResult = $hotelValuationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelValuationResponse
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
