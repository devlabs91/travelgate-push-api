<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailResponse StructType
 * @subpackage Structs
 */
class HotelAvailResponse extends AbstractStructBase
{
    /**
     * The HotelAvailResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelAvailRS
     */
    public $HotelAvailResult;
    /**
     * Constructor method for HotelAvailResponse
     * @uses HotelAvailResponse::setHotelAvailResult()
     * @param \StructType\OTA_HotelAvailRS $hotelAvailResult
     */
    public function __construct(\StructType\OTA_HotelAvailRS $hotelAvailResult = null)
    {
        $this
            ->setHotelAvailResult($hotelAvailResult);
    }
    /**
     * Get HotelAvailResult value
     * @return \StructType\OTA_HotelAvailRS|null
     */
    public function getHotelAvailResult()
    {
        return $this->HotelAvailResult;
    }
    /**
     * Set HotelAvailResult value
     * @param \StructType\OTA_HotelAvailRS $hotelAvailResult
     * @return \StructType\HotelAvailResponse
     */
    public function setHotelAvailResult(\StructType\OTA_HotelAvailRS $hotelAvailResult = null)
    {
        $this->HotelAvailResult = $hotelAvailResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelAvailResponse
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
