<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGuestType StructType
 * @subpackage Structs
 */
class ResGuestType extends AbstractStructBase
{
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo
     */
    public $Profiles;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuestCountType
     */
    public $GuestCounts;
    /**
     * The ResGuestRPH
     * @var string
     */
    public $ResGuestRPH;
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The PrimaryIndicator
     * @var bool
     */
    public $PrimaryIndicator;
    /**
     * The Age
     * @var int
     */
    public $Age;
    /**
     * Constructor method for ResGuestType
     * @uses ResGuestType::setProfiles()
     * @uses ResGuestType::setGuestCounts()
     * @uses ResGuestType::setResGuestRPH()
     * @uses ResGuestType::setAgeQualifyingCode()
     * @uses ResGuestType::setPrimaryIndicator()
     * @uses ResGuestType::setAge()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @param string $resGuestRPH
     * @param string $ageQualifyingCode
     * @param bool $primaryIndicator
     * @param int $age
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null, \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null, $resGuestRPH = null, $ageQualifyingCode = null, $primaryIndicator = null, $age = null)
    {
        $this
            ->setProfiles($profiles)
            ->setGuestCounts($guestCounts)
            ->setResGuestRPH($resGuestRPH)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setPrimaryIndicator($primaryIndicator)
            ->setAge($age);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setProfiles(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestCountType|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setGuestCounts(\Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get ResGuestRPH value
     * @return string|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @param string $resGuestRPH
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setResGuestRPH($resGuestRPH = null)
    {
        // validation for constraint: string
        if (!is_null($resGuestRPH) && !is_string($resGuestRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resGuestRPH)), __LINE__);
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Get AgeQualifyingCode value
     * @return string|null
     */
    public function getAgeQualifyingCode()
    {
        return $this->AgeQualifyingCode;
    }
    /**
     * Set AgeQualifyingCode value
     * @param string $ageQualifyingCode
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setAgeQualifyingCode($ageQualifyingCode = null)
    {
        // validation for constraint: string
        if (!is_null($ageQualifyingCode) && !is_string($ageQualifyingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageQualifyingCode)), __LINE__);
        }
        $this->AgeQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    /**
     * Get PrimaryIndicator value
     * @return bool|null
     */
    public function getPrimaryIndicator()
    {
        return $this->PrimaryIndicator;
    }
    /**
     * Set PrimaryIndicator value
     * @param bool $primaryIndicator
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setPrimaryIndicator($primaryIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryIndicator) && !is_bool($primaryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryIndicator)), __LINE__);
        }
        $this->PrimaryIndicator = $primaryIndicator;
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
     */
    public function setAge($age = null)
    {
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ResGuestType
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
