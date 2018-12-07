<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationListResponse StructType
 * @subpackage Structs
 */
class HotelReservationListResponse extends AbstractStructBase
{
    /**
     * The HotelReservationListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelResRS
     */
    public $HotelReservationListResult;
    /**
     * Constructor method for HotelReservationListResponse
     * @uses HotelReservationListResponse::setHotelReservationListResult()
     * @param \StructType\OTA_HotelResRS $hotelReservationListResult
     */
    public function __construct(\StructType\OTA_HotelResRS $hotelReservationListResult = null)
    {
        $this
            ->setHotelReservationListResult($hotelReservationListResult);
    }
    /**
     * Get HotelReservationListResult value
     * @return \StructType\OTA_HotelResRS|null
     */
    public function getHotelReservationListResult()
    {
        return $this->HotelReservationListResult;
    }
    /**
     * Set HotelReservationListResult value
     * @param \StructType\OTA_HotelResRS $hotelReservationListResult
     * @return \StructType\HotelReservationListResponse
     */
    public function setHotelReservationListResult(\StructType\OTA_HotelResRS $hotelReservationListResult = null)
    {
        $this->HotelReservationListResult = $hotelReservationListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReservationListResponse
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
