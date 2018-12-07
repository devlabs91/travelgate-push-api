<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseByGuestAmt StructType
 * @subpackage Structs
 */
class BaseByGuestAmt extends TotalType
{
    /**
     * The NumberOfGuests
     * @var int
     */
    public $NumberOfGuests;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * Constructor method for BaseByGuestAmt
     * @uses BaseByGuestAmt::setNumberOfGuests()
     * @uses BaseByGuestAmt::setCode()
     * @uses BaseByGuestAmt::setAgeQualifyingCode()
     * @param int $numberOfGuests
     * @param string $code
     * @param string $ageQualifyingCode
     */
    public function __construct($numberOfGuests = null, $code = null, $ageQualifyingCode = null)
    {
        $this
            ->setNumberOfGuests($numberOfGuests)
            ->setCode($code)
            ->setAgeQualifyingCode($ageQualifyingCode);
    }
    /**
     * Get NumberOfGuests value
     * @return int|null
     */
    public function getNumberOfGuests()
    {
        return $this->NumberOfGuests;
    }
    /**
     * Set NumberOfGuests value
     * @param int $numberOfGuests
     * @return \StructType\BaseByGuestAmt
     */
    public function setNumberOfGuests($numberOfGuests = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfGuests) && !is_numeric($numberOfGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfGuests)), __LINE__);
        }
        $this->NumberOfGuests = $numberOfGuests;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\BaseByGuestAmt
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \StructType\BaseByGuestAmt
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BaseByGuestAmt
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
