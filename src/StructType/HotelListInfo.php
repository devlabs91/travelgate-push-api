<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListInfo StructType
 * @subpackage Structs
 */
class HotelListInfo extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ
     */
    public $request;
    /**
     * Constructor method for HotelListInfo
     * @uses HotelListInfo::setRequest()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ $request
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ $request
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelListInfo
     */
    public function setRequest(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ $request = null)
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelListInfo
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
