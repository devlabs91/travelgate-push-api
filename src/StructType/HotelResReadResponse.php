<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResReadResponse StructType
 * @subpackage Structs
 */
class HotelResReadResponse extends AbstractStructBase
{
    /**
     * The HotelResReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS
     */
    public $HotelResReadResult;
    /**
     * Constructor method for HotelResReadResponse
     * @uses HotelResReadResponse::setHotelResReadResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResReadResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResReadResult = null)
    {
        $this
            ->setHotelResReadResult($hotelResReadResult);
    }
    /**
     * Get HotelResReadResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS|null
     */
    public function getHotelResReadResult()
    {
        return $this->HotelResReadResult;
    }
    /**
     * Set HotelResReadResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResReadResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResReadResponse
     */
    public function setHotelResReadResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResReadResult = null)
    {
        $this->HotelResReadResult = $hotelResReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResReadResponse
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
