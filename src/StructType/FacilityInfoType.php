<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacilityInfoType StructType
 * @subpackage Structs
 */
class FacilityInfoType extends AbstractStructBase
{
    /**
     * The GuestRooms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuestRooms
     */
    public $GuestRooms;
    /**
     * Constructor method for FacilityInfoType
     * @uses FacilityInfoType::setGuestRooms()
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestRooms $guestRooms
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\GuestRooms $guestRooms = null)
    {
        $this
            ->setGuestRooms($guestRooms);
    }
    /**
     * Get GuestRooms value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestRooms|null
     */
    public function getGuestRooms()
    {
        return $this->GuestRooms;
    }
    /**
     * Set GuestRooms value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestRooms $guestRooms
     * @return \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType
     */
    public function setGuestRooms(\Devlabs91\TravelgatePushApi\StructType\GuestRooms $guestRooms = null)
    {
        $this->GuestRooms = $guestRooms;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType
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
