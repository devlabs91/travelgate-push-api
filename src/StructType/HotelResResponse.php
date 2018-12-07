<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResResponse StructType
 * @subpackage Structs
 */
class HotelResResponse extends AbstractStructBase
{
    /**
     * The HotelResResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelResRS
     */
    public $HotelResResult;
    /**
     * Constructor method for HotelResResponse
     * @uses HotelResResponse::setHotelResResult()
     * @param \StructType\OTA_HotelResRS $hotelResResult
     */
    public function __construct(\StructType\OTA_HotelResRS $hotelResResult = null)
    {
        $this
            ->setHotelResResult($hotelResResult);
    }
    /**
     * Get HotelResResult value
     * @return \StructType\OTA_HotelResRS|null
     */
    public function getHotelResResult()
    {
        return $this->HotelResResult;
    }
    /**
     * Set HotelResResult value
     * @param \StructType\OTA_HotelResRS $hotelResResult
     * @return \StructType\HotelResResponse
     */
    public function setHotelResResult(\StructType\OTA_HotelResRS $hotelResResult = null)
    {
        $this->HotelResResult = $hotelResResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelResResponse
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
