<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID
     */
    public $HotelReservationIDs;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfProfilesTypeProfileInfo
     */
    public $Profiles;
    /**
     * Constructor method for ResGlobalInfoType
     * @uses ResGlobalInfoType::setHotelReservationIDs()
     * @uses ResGlobalInfoType::setProfiles()
     * @param \ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs
     * @param \ArrayType\ArrayOfProfilesTypeProfileInfo $profiles
     */
    public function __construct(\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs = null, \ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null)
    {
        $this
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setProfiles($profiles);
    }
    /**
     * Get HotelReservationIDs value
     * @return \ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID|null
     */
    public function getHotelReservationIDs()
    {
        return $this->HotelReservationIDs;
    }
    /**
     * Set HotelReservationIDs value
     * @param \ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs
     * @return \StructType\ResGlobalInfoType
     */
    public function setHotelReservationIDs(\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID $hotelReservationIDs = null)
    {
        $this->HotelReservationIDs = $hotelReservationIDs;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \ArrayType\ArrayOfProfilesTypeProfileInfo|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \ArrayType\ArrayOfProfilesTypeProfileInfo $profiles
     * @return \StructType\ResGlobalInfoType
     */
    public function setProfiles(\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null)
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
     * @return \StructType\ResGlobalInfoType
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
