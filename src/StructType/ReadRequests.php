<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadRequests StructType
 * @subpackage Structs
 */
class ReadRequests extends AbstractStructBase
{
    /**
     * The CruiseReadRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var mixed
     */
    public $CruiseReadRequest;
    /**
     * The HotelReadRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelReadRequest
     */
    public $HotelReadRequest;
    /**
     * Constructor method for ReadRequests
     * @uses ReadRequests::setCruiseReadRequest()
     * @uses ReadRequests::setHotelReadRequest()
     * @param mixed $cruiseReadRequest
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReadRequest $hotelReadRequest
     */
    public function __construct($cruiseReadRequest = null, \Devlabs91\TravelgatePushApi\StructType\HotelReadRequest $hotelReadRequest = null)
    {
        $this
            ->setCruiseReadRequest($cruiseReadRequest)
            ->setHotelReadRequest($hotelReadRequest);
    }
    /**
     * Get CruiseReadRequest value
     * @return mixed|null
     */
    public function getCruiseReadRequest()
    {
        return $this->CruiseReadRequest;
    }
    /**
     * Set CruiseReadRequest value
     * @param mixed $cruiseReadRequest
     * @return \Devlabs91\TravelgatePushApi\StructType\ReadRequests
     */
    public function setCruiseReadRequest($cruiseReadRequest = null)
    {
        $this->CruiseReadRequest = $cruiseReadRequest;
        return $this;
    }
    /**
     * Get HotelReadRequest value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReadRequest|null
     */
    public function getHotelReadRequest()
    {
        return $this->HotelReadRequest;
    }
    /**
     * Set HotelReadRequest value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReadRequest $hotelReadRequest
     * @return \Devlabs91\TravelgatePushApi\StructType\ReadRequests
     */
    public function setHotelReadRequest(\Devlabs91\TravelgatePushApi\StructType\HotelReadRequest $hotelReadRequest = null)
    {
        $this->HotelReadRequest = $hotelReadRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ReadRequests
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
