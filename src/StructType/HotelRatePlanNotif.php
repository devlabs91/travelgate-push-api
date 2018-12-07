<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanNotif StructType
 * @subpackage Structs
 */
class HotelRatePlanNotif extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelRatePlanNotifRQ
     */
    public $request;
    /**
     * Constructor method for HotelRatePlanNotif
     * @uses HotelRatePlanNotif::setRequest()
     * @param \StructType\OTA_HotelRatePlanNotifRQ $request
     */
    public function __construct(\StructType\OTA_HotelRatePlanNotifRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\OTA_HotelRatePlanNotifRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\OTA_HotelRatePlanNotifRQ $request
     * @return \StructType\HotelRatePlanNotif
     */
    public function setRequest(\StructType\OTA_HotelRatePlanNotifRQ $request = null)
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
     * @return \StructType\HotelRatePlanNotif
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
