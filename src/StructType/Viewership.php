<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Viewership StructType
 * @subpackage Structs
 */
class Viewership extends AbstractStructBase
{
    /**
     * The LocationCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\LocationCodes
     */
    public $LocationCodes;
    /**
     * Constructor method for Viewership
     * @uses Viewership::setLocationCodes()
     * @param \Devlabs91\TravelgatePushApi\StructType\LocationCodes $locationCodes
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\LocationCodes $locationCodes = null)
    {
        $this
            ->setLocationCodes($locationCodes);
    }
    /**
     * Get LocationCodes value
     * @return \Devlabs91\TravelgatePushApi\StructType\LocationCodes|null
     */
    public function getLocationCodes()
    {
        return $this->LocationCodes;
    }
    /**
     * Set LocationCodes value
     * @param \Devlabs91\TravelgatePushApi\StructType\LocationCodes $locationCodes
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership
     */
    public function setLocationCodes(\Devlabs91\TravelgatePushApi\StructType\LocationCodes $locationCodes = null)
    {
        $this->LocationCodes = $locationCodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership
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
