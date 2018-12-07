<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileInfo StructType
 * @subpackage Structs
 */
class ProfileInfo extends AbstractStructBase
{
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ProfileType
     */
    public $Profile;
    /**
     * Constructor method for ProfileInfo
     * @uses ProfileInfo::setProfile()
     * @param \Devlabs91\TravelgatePushApi\StructType\ProfileType $profile
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get Profile value
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileType|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @param \Devlabs91\TravelgatePushApi\StructType\ProfileType $profile
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileInfo
     */
    public function setProfile(\Devlabs91\TravelgatePushApi\StructType\ProfileType $profile = null)
    {
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileInfo
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
