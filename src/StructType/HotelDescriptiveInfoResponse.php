<?php

namespace StructType;

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
     * @var \StructType\OTA_HotelDescriptiveInfoRS
     */
    public $HotelDescriptiveInfoResult;
    /**
     * Constructor method for HotelDescriptiveInfoResponse
     * @uses HotelDescriptiveInfoResponse::setHotelDescriptiveInfoResult()
     * @param \StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult
     */
    public function __construct(\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult = null)
    {
        $this
            ->setHotelDescriptiveInfoResult($hotelDescriptiveInfoResult);
    }
    /**
     * Get HotelDescriptiveInfoResult value
     * @return \StructType\OTA_HotelDescriptiveInfoRS|null
     */
    public function getHotelDescriptiveInfoResult()
    {
        return $this->HotelDescriptiveInfoResult;
    }
    /**
     * Set HotelDescriptiveInfoResult value
     * @param \StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult
     * @return \StructType\HotelDescriptiveInfoResponse
     */
    public function setHotelDescriptiveInfoResult(\StructType\OTA_HotelDescriptiveInfoRS $hotelDescriptiveInfoResult = null)
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
     * @return \StructType\HotelDescriptiveInfoResponse
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
