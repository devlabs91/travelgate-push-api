<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResRetrieveResponse StructType
 * @subpackage Structs
 */
class HotelResRetrieveResponse extends AbstractStructBase
{
    /**
     * The HotelResRetrieveResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS
     */
    public $HotelResRetrieveResult;
    /**
     * Constructor method for HotelResRetrieveResponse
     * @uses HotelResRetrieveResponse::setHotelResRetrieveResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResRetrieveResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResRetrieveResult = null)
    {
        $this
            ->setHotelResRetrieveResult($hotelResRetrieveResult);
    }
    /**
     * Get HotelResRetrieveResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS|null
     */
    public function getHotelResRetrieveResult()
    {
        return $this->HotelResRetrieveResult;
    }
    /**
     * Set HotelResRetrieveResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResRetrieveResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRetrieveResponse
     */
    public function setHotelResRetrieveResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS $hotelResRetrieveResult = null)
    {
        $this->HotelResRetrieveResult = $hotelResRetrieveResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRetrieveResponse
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
