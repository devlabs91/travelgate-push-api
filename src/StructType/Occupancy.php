<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Occupancy StructType
 * @subpackage Structs
 */
class Occupancy extends AbstractStructBase
{
    /**
     * The MinOccupancy
     * @var int
     */
    public $MinOccupancy;
    /**
     * The MaxOccupancy
     * @var int
     */
    public $MaxOccupancy;
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The MinAge
     * @var int
     */
    public $MinAge;
    /**
     * The MaxAge
     * @var int
     */
    public $MaxAge;
    /**
     * Constructor method for Occupancy
     * @uses Occupancy::setMinOccupancy()
     * @uses Occupancy::setMaxOccupancy()
     * @uses Occupancy::setAgeQualifyingCode()
     * @uses Occupancy::setMinAge()
     * @uses Occupancy::setMaxAge()
     * @param int $minOccupancy
     * @param int $maxOccupancy
     * @param string $ageQualifyingCode
     * @param int $minAge
     * @param int $maxAge
     */
    public function __construct($minOccupancy = null, $maxOccupancy = null, $ageQualifyingCode = null, $minAge = null, $maxAge = null)
    {
        $this
            ->setMinOccupancy($minOccupancy)
            ->setMaxOccupancy($maxOccupancy)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setMinAge($minAge)
            ->setMaxAge($maxAge);
    }
    /**
     * Get MinOccupancy value
     * @return int|null
     */
    public function getMinOccupancy()
    {
        return $this->MinOccupancy;
    }
    /**
     * Set MinOccupancy value
     * @param int $minOccupancy
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
     */
    public function setMinOccupancy($minOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($minOccupancy) && !is_numeric($minOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minOccupancy)), __LINE__);
        }
        $this->MinOccupancy = $minOccupancy;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
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
     * Get MinAge value
     * @return int|null
     */
    public function getMinAge()
    {
        return $this->MinAge;
    }
    /**
     * Set MinAge value
     * @param int $minAge
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
     */
    public function setMinAge($minAge = null)
    {
        // validation for constraint: int
        if (!is_null($minAge) && !is_numeric($minAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minAge)), __LINE__);
        }
        $this->MinAge = $minAge;
        return $this;
    }
    /**
     * Get MaxAge value
     * @return int|null
     */
    public function getMaxAge()
    {
        return $this->MaxAge;
    }
    /**
     * Set MaxAge value
     * @param int $maxAge
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
     */
    public function setMaxAge($maxAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxAge) && !is_numeric($maxAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAge)), __LINE__);
        }
        $this->MaxAge = $maxAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Occupancy
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
