<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Telephone StructType
 * @subpackage Structs
 */
class Telephone extends AbstractStructBase
{
    /**
     * The PhoneTechType
     * @var string
     */
    public $PhoneTechType;
    /**
     * The PhoneNumber
     * @var string
     */
    public $PhoneNumber;
    /**
     * The FormattedInd
     * @var bool
     */
    public $FormattedInd;
    /**
     * The DefaultInd
     * @var bool
     */
    public $DefaultInd;
    /**
     * Constructor method for Telephone
     * @uses Telephone::setPhoneTechType()
     * @uses Telephone::setPhoneNumber()
     * @uses Telephone::setFormattedInd()
     * @uses Telephone::setDefaultInd()
     * @param string $phoneTechType
     * @param string $phoneNumber
     * @param bool $formattedInd
     * @param bool $defaultInd
     */
    public function __construct($phoneTechType = null, $phoneNumber = null, $formattedInd = null, $defaultInd = null)
    {
        $this
            ->setPhoneTechType($phoneTechType)
            ->setPhoneNumber($phoneNumber)
            ->setFormattedInd($formattedInd)
            ->setDefaultInd($defaultInd);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone
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
     * Get FormattedInd value
     * @return bool|null
     */
    public function getFormattedInd()
    {
        return $this->FormattedInd;
    }
    /**
     * Set FormattedInd value
     * @param bool $formattedInd
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone
     */
    public function setFormattedInd($formattedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($formattedInd) && !is_bool($formattedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($formattedInd)), __LINE__);
        }
        $this->FormattedInd = $formattedInd;
        return $this;
    }
    /**
     * Get DefaultInd value
     * @return bool|null
     */
    public function getDefaultInd()
    {
        return $this->DefaultInd;
    }
    /**
     * Set DefaultInd value
     * @param bool $defaultInd
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone
     */
    public function setDefaultInd($defaultInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultInd) && !is_bool($defaultInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultInd)), __LINE__);
        }
        $this->DefaultInd = $defaultInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone
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
