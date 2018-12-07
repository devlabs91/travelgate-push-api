<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountPercentType StructType
 * @subpackage Structs
 */
class AmountPercentType extends AbstractStructBase
{
    /**
     * The NmbrOfNights
     * @var int
     */
    public $NmbrOfNights;
    /**
     * The Percent
     * @var float
     */
    public $Percent;
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
     * Constructor method for AmountPercentType
     * @uses AmountPercentType::setNmbrOfNights()
     * @uses AmountPercentType::setPercent()
     * @uses AmountPercentType::setCurrencyCode()
     * @uses AmountPercentType::setAmount()
     * @param int $nmbrOfNights
     * @param float $percent
     * @param string $currencyCode
     * @param float $amount
     */
    public function __construct($nmbrOfNights = null, $percent = null, $currencyCode = null, $amount = null)
    {
        $this
            ->setNmbrOfNights($nmbrOfNights)
            ->setPercent($percent)
            ->setCurrencyCode($currencyCode)
            ->setAmount($amount);
    }
    /**
     * Get NmbrOfNights value
     * @return int|null
     */
    public function getNmbrOfNights()
    {
        return $this->NmbrOfNights;
    }
    /**
     * Set NmbrOfNights value
     * @param int $nmbrOfNights
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountPercentType
     */
    public function setNmbrOfNights($nmbrOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($nmbrOfNights) && !is_numeric($nmbrOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nmbrOfNights)), __LINE__);
        }
        $this->NmbrOfNights = $nmbrOfNights;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountPercentType
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountPercentType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountPercentType
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AmountPercentType
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
