<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanRetrieve StructType
 * @subpackage Structs
 */
class HotelRatePlanRetrieve extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelRatePlanRQ
     */
    public $request;
    /**
     * Constructor method for HotelRatePlanRetrieve
     * @uses HotelRatePlanRetrieve::setRequest()
     * @param \StructType\OTA_HotelRatePlanRQ $request
     */
    public function __construct(\StructType\OTA_HotelRatePlanRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\OTA_HotelRatePlanRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\OTA_HotelRatePlanRQ $request
     * @return \StructType\HotelRatePlanRetrieve
     */
    public function setRequest(\StructType\OTA_HotelRatePlanRQ $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRatePlanRetrieve
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
