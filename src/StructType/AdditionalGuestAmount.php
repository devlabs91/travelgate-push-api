<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmount StructType
 * @subpackage Structs
 */
class AdditionalGuestAmount extends AbstractStructBase
{
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
     * The MaxAge
     * @var int
     */
    public $MaxAge;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Percent
     * @var float
     */
    public $Percent;
    /**
     * Constructor method for AdditionalGuestAmount
     * @uses AdditionalGuestAmount::setMaxAdditionalGuests()
     * @uses AdditionalGuestAmount::setAgeQualifyingCode()
     * @uses AdditionalGuestAmount::setMaxAge()
     * @uses AdditionalGuestAmount::setType()
     * @uses AdditionalGuestAmount::setAmount()
     * @uses AdditionalGuestAmount::setCurrencyCode()
     * @uses AdditionalGuestAmount::setPercent()
     * @param int $maxAdditionalGuests
     * @param string $ageQualifyingCode
     * @param int $maxAge
     * @param string $type
     * @param float $amount
     * @param string $currencyCode
     * @param float $percent
     */
    public function __construct($maxAdditionalGuests = null, $ageQualifyingCode = null, $maxAge = null, $type = null, $amount = null, $currencyCode = null, $percent = null)
    {
        $this
            ->setMaxAdditionalGuests($maxAdditionalGuests)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setMaxAge($maxAge)
            ->setType($type)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setPercent($percent);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\AmountDeterminationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount
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
