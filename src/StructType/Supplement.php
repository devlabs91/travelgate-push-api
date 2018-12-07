<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Supplement StructType
 * @subpackage Structs
 */
class Supplement extends AbstractStructBase
{
    /**
     * The AgeQualifyingCode
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The SupplementType
     * @var string
     */
    public $SupplementType;
    /**
     * The ChargeTypeCode
     * @var string
     */
    public $ChargeTypeCode;
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * The Percent
     * @var float
     */
    public $Percent;
    /**
     * Constructor method for Supplement
     * @uses Supplement::setAgeQualifyingCode()
     * @uses Supplement::setCurrencyCode()
     * @uses Supplement::setAmount()
     * @uses Supplement::setStart()
     * @uses Supplement::setEnd()
     * @uses Supplement::setSupplementType()
     * @uses Supplement::setChargeTypeCode()
     * @uses Supplement::setInvCode()
     * @uses Supplement::setPercent()
     * @param string $ageQualifyingCode
     * @param string $currencyCode
     * @param float $amount
     * @param string $start
     * @param string $end
     * @param string $supplementType
     * @param string $chargeTypeCode
     * @param string $invCode
     * @param float $percent
     */
    public function __construct($ageQualifyingCode = null, $currencyCode = null, $amount = null, $start = null, $end = null, $supplementType = null, $chargeTypeCode = null, $invCode = null, $percent = null)
    {
        $this
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setCurrencyCode($currencyCode)
            ->setAmount($amount)
            ->setStart($start)
            ->setEnd($end)
            ->setSupplementType($supplementType)
            ->setChargeTypeCode($chargeTypeCode)
            ->setInvCode($invCode)
            ->setPercent($percent);
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
     * @return \StructType\Supplement
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
     * @return \StructType\Supplement
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
     * @return \StructType\Supplement
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\Supplement
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \StructType\Supplement
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get SupplementType value
     * @return string|null
     */
    public function getSupplementType()
    {
        return $this->SupplementType;
    }
    /**
     * Set SupplementType value
     * @param string $supplementType
     * @return \StructType\Supplement
     */
    public function setSupplementType($supplementType = null)
    {
        // validation for constraint: string
        if (!is_null($supplementType) && !is_string($supplementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplementType)), __LINE__);
        }
        $this->SupplementType = $supplementType;
        return $this;
    }
    /**
     * Get ChargeTypeCode value
     * @return string|null
     */
    public function getChargeTypeCode()
    {
        return $this->ChargeTypeCode;
    }
    /**
     * Set ChargeTypeCode value
     * @param string $chargeTypeCode
     * @return \StructType\Supplement
     */
    public function setChargeTypeCode($chargeTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($chargeTypeCode) && !is_string($chargeTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeTypeCode)), __LINE__);
        }
        $this->ChargeTypeCode = $chargeTypeCode;
        return $this;
    }
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \StructType\Supplement
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
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
     * @return \StructType\Supplement
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
     * @return \StructType\Supplement
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
