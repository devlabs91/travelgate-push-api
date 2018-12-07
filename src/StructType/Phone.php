<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone StructType
 * @subpackage Structs
 */
class Phone extends AbstractStructBase
{
    /**
     * The PhoneLocationType
     * @var string
     */
    public $PhoneLocationType;
    /**
     * The PhoneTechType
     * @var string
     */
    public $PhoneTechType;
    /**
     * The PhoneUseType
     * @var string
     */
    public $PhoneUseType;
    /**
     * The PhoneNumber
     * @var string
     */
    public $PhoneNumber;
    /**
     * Constructor method for Phone
     * @uses Phone::setPhoneLocationType()
     * @uses Phone::setPhoneTechType()
     * @uses Phone::setPhoneUseType()
     * @uses Phone::setPhoneNumber()
     * @param string $phoneLocationType
     * @param string $phoneTechType
     * @param string $phoneUseType
     * @param string $phoneNumber
     */
    public function __construct($phoneLocationType = null, $phoneTechType = null, $phoneUseType = null, $phoneNumber = null)
    {
        $this
            ->setPhoneLocationType($phoneLocationType)
            ->setPhoneTechType($phoneTechType)
            ->setPhoneUseType($phoneUseType)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get PhoneLocationType value
     * @return string|null
     */
    public function getPhoneLocationType()
    {
        return $this->PhoneLocationType;
    }
    /**
     * Set PhoneLocationType value
     * @param string $phoneLocationType
     * @return \StructType\Phone
     */
    public function setPhoneLocationType($phoneLocationType = null)
    {
        // validation for constraint: string
        if (!is_null($phoneLocationType) && !is_string($phoneLocationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneLocationType)), __LINE__);
        }
        $this->PhoneLocationType = $phoneLocationType;
        return $this;
    }
    /**
     * Get PhoneTechType value
     * @return string|null
     */
    public function getPhoneTechType()
    {
        return $this->PhoneTechType;
    }
    /**
     * Set PhoneTechType value
     * @param string $phoneTechType
     * @return \StructType\Phone
     */
    public function setPhoneTechType($phoneTechType = null)
    {
        // validation for constraint: string
        if (!is_null($phoneTechType) && !is_string($phoneTechType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneTechType)), __LINE__);
        }
        $this->PhoneTechType = $phoneTechType;
        return $this;
    }
    /**
     * Get PhoneUseType value
     * @return string|null
     */
    public function getPhoneUseType()
    {
        return $this->PhoneUseType;
    }
    /**
     * Set PhoneUseType value
     * @param string $phoneUseType
     * @return \StructType\Phone
     */
    public function setPhoneUseType($phoneUseType = null)
    {
        // validation for constraint: string
        if (!is_null($phoneUseType) && !is_string($phoneUseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneUseType)), __LINE__);
        }
        $this->PhoneUseType = $phoneUseType;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \StructType\Phone
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Phone
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
