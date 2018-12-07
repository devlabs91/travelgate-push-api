<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveInfoResponse StructType
 * @subpackage Structs
 */
class HotelDescriptiveInfoResponse extends AbstractStructBase
{
    /**
     * The HotelDescriptiveInfoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS
     */
    public $HotelDescriptiveInfoResult;
    /**
     * Constructor method for HotelDescriptiveInfoResponse
     * @uses HotelDescriptiveInfoResponse::setHotelDescriptiveInfoResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult = null)
    {
        $this
            ->setHotelDescriptiveInfoResult($hotelDescriptiveInfoResult);
    }
    /**
     * Get HotelDescriptiveInfoResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS|null
     */
    public function getHotelDescriptiveInfoResult()
    {
        return $this->HotelDescriptiveInfoResult;
    }
    /**
     * Set HotelDescriptiveInfoResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfoResponse
     */
    public function setHotelDescriptiveInfoResult(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult = null)
    {
        $this->HotelDescriptiveInfoResult = $hotelDescriptiveInfoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfoResponse
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
