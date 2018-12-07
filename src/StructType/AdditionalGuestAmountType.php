<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmountType StructType
 * @subpackage Structs
 */
class AdditionalGuestAmountType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public $Amount;
    /**
     * The MaxAdditionalGuests
     * @var int
     */
    public $MaxAdditionalGuests;
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AdditionalGuestAmountType
     * @uses AdditionalGuestAmountType::setAmount()
     * @uses AdditionalGuestAmountType::setMaxAdditionalGuests()
     * @uses AdditionalGuestAmountType::setAgeQualifyingCode()
     * @uses AdditionalGuestAmountType::setType()
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $amount
     * @param int $maxAdditionalGuests
     * @param string $ageQualifyingCode
     * @param string $type
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\TotalType $amount = null, $maxAdditionalGuests = null, $ageQualifyingCode = null, $type = null)
    {
        $this
            ->setAmount($amount)
            ->setMaxAdditionalGuests($maxAdditionalGuests)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setType($type);
    }
    /**
     * Get Amount value
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $amount
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmountType
     */
    public function setAmount(\Devlabs91\TravelgatePushApi\StructType\TotalType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get MaxAdditionalGuests value
     * @return int|null
     */
    public function getMaxAdditionalGuests()
    {
        return $this->MaxAdditionalGuests;
    }
    /**
     * Set MaxAdditionalGuests value
     * @param int $maxAdditionalGuests
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmountType
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests = null)
    {
        // validation for constraint: int
        if (!is_null($maxAdditionalGuests) && !is_numeric($maxAdditionalGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAdditionalGuests)), __LINE__);
        }
        $this->MaxAdditionalGuests = $maxAdditionalGuests;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmountType
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmountType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmountType
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
