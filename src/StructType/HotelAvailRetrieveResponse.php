<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailRetrieveResponse StructType
 * @subpackage Structs
 */
class HotelAvailRetrieveResponse extends AbstractStructBase
{
    /**
     * The HotelAvailRetrieveResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS
     */
    public $HotelAvailRetrieveResult;
    /**
     * Constructor method for HotelAvailRetrieveResponse
     * @uses HotelAvailRetrieveResponse::setHotelAvailRetrieveResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS $hotelAvailRetrieveResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS $hotelAvailRetrieveResult = null)
    {
        $this
            ->setHotelAvailRetrieveResult($hotelAvailRetrieveResult);
    }
    /**
     * Get HotelAvailRetrieveResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS|null
     */
    public function getHotelAvailRetrieveResult()
    {
        return $this->HotelAvailRetrieveResult;
    }
    /**
     * Set HotelAvailRetrieveResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS $hotelAvailRetrieveResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieveResponse
     */
    public function setHotelAvailRetrieveResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailGetRS $hotelAvailRetrieveResult = null)
    {
        $this->HotelAvailRetrieveResult = $hotelAvailRetrieveResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRetrieveResponse
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
