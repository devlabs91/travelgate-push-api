<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRuleType StructType
 * @subpackage Structs
 */
class CancelRuleType extends AbstractStructBase
{
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CommissionType
     */
    public $Commission;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DecimalPlaces
     * @var int
     */
    public $DecimalPlaces;
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * Constructor method for CancelRuleType
     * @uses CancelRuleType::setCommission()
     * @uses CancelRuleType::setCurrencyCode()
     * @uses CancelRuleType::setDecimalPlaces()
     * @uses CancelRuleType::setAmount()
     * @param \StructType\CommissionType $commission
     * @param string $currencyCode
     * @param int $decimalPlaces
     * @param float $amount
     */
    public function __construct(\StructType\CommissionType $commission = null, $currencyCode = null, $decimalPlaces = null, $amount = null)
    {
        $this
            ->setCommission($commission)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces)
            ->setAmount($amount);
    }
    /**
     * Get Commission value
     * @return \StructType\CommissionType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \StructType\CommissionType $commission
     * @return \StructType\CancelRuleType
     */
    public function setCommission(\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
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
     * @return \StructType\CancelRuleType
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
     * Get DecimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param int $decimalPlaces
     * @return \StructType\CancelRuleType
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !is_numeric($decimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimalPlaces)), __LINE__);
        }
        $this->DecimalPlaces = $decimalPlaces;
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
     * @return \StructType\CancelRuleType
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
     * @return \StructType\CancelRuleType
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
