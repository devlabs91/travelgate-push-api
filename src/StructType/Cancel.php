<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cancel StructType
 * @subpackage Structs
 */
class Cancel extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ
     */
    public $request;
    /**
     * Constructor method for Cancel
     * @uses Cancel::setRequest()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ $request
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ $request
     * @return \Devlabs91\TravelgatePushApi\StructType\Cancel
     */
    public function setRequest(\Devlabs91\TravelgatePushApi\StructType\OTA_CancelRQ $request = null)
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Cancel
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
