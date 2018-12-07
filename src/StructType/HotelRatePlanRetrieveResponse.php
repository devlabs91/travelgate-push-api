<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanRetrieveResponse StructType
 * @subpackage Structs
 */
class HotelRatePlanRetrieveResponse extends AbstractStructBase
{
    /**
     * The HotelRatePlanRetrieveResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelRatePlanRS
     */
    public $HotelRatePlanRetrieveResult;
    /**
     * Constructor method for HotelRatePlanRetrieveResponse
     * @uses HotelRatePlanRetrieveResponse::setHotelRatePlanRetrieveResult()
     * @param \StructType\OTA_HotelRatePlanRS $hotelRatePlanRetrieveResult
     */
    public function __construct(\StructType\OTA_HotelRatePlanRS $hotelRatePlanRetrieveResult = null)
    {
        $this
            ->setHotelRatePlanRetrieveResult($hotelRatePlanRetrieveResult);
    }
    /**
     * Get HotelRatePlanRetrieveResult value
     * @return \StructType\OTA_HotelRatePlanRS|null
     */
    public function getHotelRatePlanRetrieveResult()
    {
        return $this->HotelRatePlanRetrieveResult;
    }
    /**
     * Set HotelRatePlanRetrieveResult value
     * @param \StructType\OTA_HotelRatePlanRS $hotelRatePlanRetrieveResult
     * @return \StructType\HotelRatePlanRetrieveResponse
     */
    public function setHotelRatePlanRetrieveResult(\StructType\OTA_HotelRatePlanRS $hotelRatePlanRetrieveResult = null)
    {
        $this->HotelRatePlanRetrieveResult = $hotelRatePlanRetrieveResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRatePlanRetrieveResponse
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
