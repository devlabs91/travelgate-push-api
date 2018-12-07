<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListInfoResponse StructType
 * @subpackage Structs
 */
class HotelListInfoResponse extends AbstractStructBase
{
    /**
     * The HotelListInfoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelDescriptiveInfoRS
     */
    public $HotelListInfoResult;
    /**
     * Constructor method for HotelListInfoResponse
     * @uses HotelListInfoResponse::setHotelListInfoResult()
     * @param \StructType\OTA_HotelDescriptiveInfoRS $hotelListInfoResult
     */
    public function __construct(\StructType\OTA_HotelDescriptiveInfoRS $hotelListInfoResult = null)
    {
        $this
            ->setHotelListInfoResult($hotelListInfoResult);
    }
    /**
     * Get HotelListInfoResult value
     * @return \StructType\OTA_HotelDescriptiveInfoRS|null
     */
    public function getHotelListInfoResult()
    {
        return $this->HotelListInfoResult;
    }
    /**
     * Set HotelListInfoResult value
     * @param \StructType\OTA_HotelDescriptiveInfoRS $hotelListInfoResult
     * @return \StructType\HotelListInfoResponse
     */
    public function setHotelListInfoResult(\StructType\OTA_HotelDescriptiveInfoRS $hotelListInfoResult = null)
    {
        $this->HotelListInfoResult = $hotelListInfoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelListInfoResponse
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
