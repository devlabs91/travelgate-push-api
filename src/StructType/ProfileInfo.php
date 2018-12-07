<?php

namespace StructType;

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
     * @var \StructType\ProfileType
     */
    public $Profile;
    /**
     * Constructor method for ProfileInfo
     * @uses ProfileInfo::setProfile()
     * @param \StructType\ProfileType $profile
     */
    public function __construct(\StructType\ProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get Profile value
     * @return \StructType\ProfileType|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @param \StructType\ProfileType $profile
     * @return \StructType\ProfileInfo
     */
    public function setProfile(\StructType\ProfileType $profile = null)
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
     * @return \StructType\ProfileInfo
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
