<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCount StructType
 * @subpackage Structs
 */
class GuestCount extends AbstractStructBase
{
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The Age
     * @var int
     */
    public $Age;
    /**
     * The Count
     * @var int
     */
    public $Count;
    /**
     * Constructor method for GuestCount
     * @uses GuestCount::setAgeQualifyingCode()
     * @uses GuestCount::setAge()
     * @uses GuestCount::setCount()
     * @param string $ageQualifyingCode
     * @param int $age
     * @param int $count
     */
    public function __construct($ageQualifyingCode = null, $age = null, $count = null)
    {
        $this
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setAge($age)
            ->setCount($count);
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
     * @return \StructType\GuestCount
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
     * @return \StructType\GuestCount
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
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\GuestCount
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GuestCount
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
