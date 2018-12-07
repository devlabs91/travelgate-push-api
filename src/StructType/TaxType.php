<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxType StructType
 * @subpackage Structs
 */
class TaxType extends AbstractStructBase
{
    /**
     * The TaxDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]
     */
    public $TaxDescription;
    /**
     * The Code
     * @var string
     */
    public $Code;
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
     * The DecimalPlaces
     * @var int
     */
    public $DecimalPlaces;
    /**
     * The Percent
     * @var float
     */
    public $Percent;
    /**
     * The ChargeUnit
     * @var string
     */
    public $ChargeUnit;
    /**
     * The ChargeFrequency
     * @var string
     */
    public $ChargeFrequency;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TaxType
     * @uses TaxType::setTaxDescription()
     * @uses TaxType::setCode()
     * @uses TaxType::setAmount()
     * @uses TaxType::setCurrencyCode()
     * @uses TaxType::setDecimalPlaces()
     * @uses TaxType::setPercent()
     * @uses TaxType::setChargeUnit()
     * @uses TaxType::setChargeFrequency()
     * @uses TaxType::setType()
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $taxDescription
     * @param string $code
     * @param float $amount
     * @param string $currencyCode
     * @param int $decimalPlaces
     * @param float $percent
     * @param string $chargeUnit
     * @param string $chargeFrequency
     * @param string $type
     */
    public function __construct(array $taxDescription = array(), $code = null, $amount = null, $currencyCode = null, $decimalPlaces = null, $percent = null, $chargeUnit = null, $chargeFrequency = null, $type = null)
    {
        $this
            ->setTaxDescription($taxDescription)
            ->setCode($code)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces)
            ->setPercent($percent)
            ->setChargeUnit($chargeUnit)
            ->setChargeFrequency($chargeFrequency)
            ->setType($type);
    }
    /**
     * Get TaxDescription value
     * @return \Devlabs91\TravelgatePushApi\StructType\ParagraphType[]|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType[] $taxDescription
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
     */
    public function setTaxDescription(array $taxDescription = array())
    {
        foreach ($taxDescription as $taxTypeTaxDescriptionItem) {
            // validation for constraint: itemType
            if (!$taxTypeTaxDescriptionItem instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($taxTypeTaxDescriptionItem) ? get_class($taxTypeTaxDescriptionItem) : gettype($taxTypeTaxDescriptionItem)), __LINE__);
            }
        }
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Add item to TaxDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ParagraphType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
     */
    public function addToTaxDescription(\Devlabs91\TravelgatePushApi\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDescription[] = $item;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get ChargeUnit value
     * @return string|null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param string $chargeUnit
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
     */
    public function setChargeUnit($chargeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($chargeUnit) && !is_string($chargeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeUnit)), __LINE__);
        }
        $this->ChargeUnit = $chargeUnit;
        return $this;
    }
    /**
     * Get ChargeFrequency value
     * @return string|null
     */
    public function getChargeFrequency()
    {
        return $this->ChargeFrequency;
    }
    /**
     * Set ChargeFrequency value
     * @param string $chargeFrequency
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
     */
    public function setChargeFrequency($chargeFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($chargeFrequency) && !is_string($chargeFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeFrequency)), __LINE__);
        }
        $this->ChargeFrequency = $chargeFrequency;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\TaxType
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
