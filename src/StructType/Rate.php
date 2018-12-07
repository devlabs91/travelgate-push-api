<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * @subpackage Structs
 */
class Rate extends RateUploadType
{
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * The InvTypeCode
     * @var string
     */
    public $InvTypeCode;
    /**
     * The AdjustedAmount
     * @var float
     */
    public $AdjustedAmount;
    /**
     * The AdjustedPercentage
     * @var float
     */
    public $AdjustedPercentage;
    /**
     * The AdjustUpIndicator
     * @var bool
     */
    public $AdjustUpIndicator;
    /**
     * Constructor method for Rate
     * @uses Rate::setInvCode()
     * @uses Rate::setInvTypeCode()
     * @uses Rate::setAdjustedAmount()
     * @uses Rate::setAdjustedPercentage()
     * @uses Rate::setAdjustUpIndicator()
     * @param string $invCode
     * @param string $invTypeCode
     * @param float $adjustedAmount
     * @param float $adjustedPercentage
     * @param bool $adjustUpIndicator
     */
    public function __construct($invCode = null, $invTypeCode = null, $adjustedAmount = null, $adjustedPercentage = null, $adjustUpIndicator = null)
    {
        $this
            ->setInvCode($invCode)
            ->setInvTypeCode($invTypeCode)
            ->setAdjustedAmount($adjustedAmount)
            ->setAdjustedPercentage($adjustedPercentage)
            ->setAdjustUpIndicator($adjustUpIndicator);
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
     * @return \StructType\Rate
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
     * Get InvTypeCode value
     * @return string|null
     */
    public function getInvTypeCode()
    {
        return $this->InvTypeCode;
    }
    /**
     * Set InvTypeCode value
     * @param string $invTypeCode
     * @return \StructType\Rate
     */
    public function setInvTypeCode($invTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($invTypeCode) && !is_string($invTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invTypeCode)), __LINE__);
        }
        $this->InvTypeCode = $invTypeCode;
        return $this;
    }
    /**
     * Get AdjustedAmount value
     * @return float|null
     */
    public function getAdjustedAmount()
    {
        return $this->AdjustedAmount;
    }
    /**
     * Set AdjustedAmount value
     * @param float $adjustedAmount
     * @return \StructType\Rate
     */
    public function setAdjustedAmount($adjustedAmount = null)
    {
        $this->AdjustedAmount = $adjustedAmount;
        return $this;
    }
    /**
     * Get AdjustedPercentage value
     * @return float|null
     */
    public function getAdjustedPercentage()
    {
        return $this->AdjustedPercentage;
    }
    /**
     * Set AdjustedPercentage value
     * @param float $adjustedPercentage
     * @return \StructType\Rate
     */
    public function setAdjustedPercentage($adjustedPercentage = null)
    {
        $this->AdjustedPercentage = $adjustedPercentage;
        return $this;
    }
    /**
     * Get AdjustUpIndicator value
     * @return bool|null
     */
    public function getAdjustUpIndicator()
    {
        return $this->AdjustUpIndicator;
    }
    /**
     * Set AdjustUpIndicator value
     * @param bool $adjustUpIndicator
     * @return \StructType\Rate
     */
    public function setAdjustUpIndicator($adjustUpIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($adjustUpIndicator) && !is_bool($adjustUpIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($adjustUpIndicator)), __LINE__);
        }
        $this->AdjustUpIndicator = $adjustUpIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Rate
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
