<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGlobalInfoType StructType
 * @subpackage Structs
 */
class ResGlobalInfoType extends ResCommonDetailType
{
    /**
     * The HotelReservationIDs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID
     */
    public $HotelReservationIDs;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo
     */
    public $Profiles;
    /**
     * Constructor method for ResGlobalInfoType
     * @uses ResGlobalInfoType::setHotelReservationIDs()
     * @uses ResGlobalInfoType::setProfiles()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null)
    {
        $this
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setProfiles($profiles);
    }
    /**
     * Get HotelReservationIDs value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID|null
     */
    public function getHotelReservationIDs()
    {
        return $this->HotelReservationIDs;
    }
    /**
     * Set HotelReservationIDs value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType
     */
    public function setHotelReservationIDs(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs = null)
    {
        $this->HotelReservationIDs = $hotelReservationIDs;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType
     */
    public function setProfiles(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType
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
