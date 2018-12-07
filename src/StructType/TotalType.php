<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalType StructType
 * @subpackage Structs
 */
class TotalType extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TaxesType
     */
    public $Taxes;
    /**
     * The AmountBeforeTax
     * @var float
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * @var float
     */
    public $AmountAfterTax;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TotalType
     * @uses TotalType::setTaxes()
     * @uses TotalType::setAmountBeforeTax()
     * @uses TotalType::setAmountAfterTax()
     * @uses TotalType::setCurrencyCode()
     * @uses TotalType::setType()
     * @param \StructType\TaxesType $taxes
     * @param float $amountBeforeTax
     * @param float $amountAfterTax
     * @param string $currencyCode
     * @param string $type
     */
    public function __construct(\StructType\TaxesType $taxes = null, $amountBeforeTax = null, $amountAfterTax = null, $currencyCode = null, $type = null)
    {
        $this
            ->setTaxes($taxes)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax)
            ->setCurrencyCode($currencyCode)
            ->setType($type);
    }
    /**
     * Get Taxes value
     * @return \StructType\TaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \StructType\TaxesType $taxes
     * @return \StructType\TotalType
     */
    public function setTaxes(\StructType\TaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get AmountBeforeTax value
     * @return float|null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param float $amountBeforeTax
     * @return \StructType\TotalType
     */
    public function setAmountBeforeTax($amountBeforeTax = null)
    {
        $this->AmountBeforeTax = $amountBeforeTax;
        return $this;
    }
    /**
     * Get AmountAfterTax value
     * @return float|null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param float $amountAfterTax
     * @return \StructType\TotalType
     */
    public function setAmountAfterTax($amountAfterTax = null)
    {
        $this->AmountAfterTax = $amountAfterTax;
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
     * @return \StructType\TotalType
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
     * @return \StructType\TotalType
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
     * @return \StructType\TotalType
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
