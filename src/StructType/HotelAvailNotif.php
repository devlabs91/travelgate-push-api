<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailNotif StructType
 * @subpackage Structs
 */
class HotelAvailNotif extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ
     */
    public $request;
    /**
     * Constructor method for HotelAvailNotif
     * @uses HotelAvailNotif::setRequest()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ $request
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ $request
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif
     */
    public function setRequest(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRQ $request = null)
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailNotif
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
