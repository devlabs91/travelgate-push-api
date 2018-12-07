<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanType StructType
 * @subpackage Structs
 */
class RatePlanType extends AbstractStructBase
{
    /**
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParagraphType
     */
    public $RatePlanDescription;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CommissionType
     */
    public $Commission;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Guarantee[]
     */
    public $Guarantee;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RatePlanType
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanName
     * @var string
     */
    public $RatePlanName;
    /**
     * The PriceViewableInd
     * @var bool
     */
    public $PriceViewableInd;
    /**
     * The QualificationType
     * @var string
     */
    public $QualificationType;
    /**
     * Constructor method for RatePlanType
     * @uses RatePlanType::setRatePlanDescription()
     * @uses RatePlanType::setCommission()
     * @uses RatePlanType::setGuarantee()
     * @uses RatePlanType::setRatePlanCode()
     * @uses RatePlanType::setRatePlanType()
     * @uses RatePlanType::setRatePlanName()
     * @uses RatePlanType::setPriceViewableInd()
     * @uses RatePlanType::setQualificationType()
     * @param \StructType\ParagraphType $ratePlanDescription
     * @param \StructType\CommissionType $commission
     * @param \StructType\Guarantee[] $guarantee
     * @param string $ratePlanCode
     * @param string $ratePlanType
     * @param string $ratePlanName
     * @param bool $priceViewableInd
     * @param string $qualificationType
     */
    public function __construct(\StructType\ParagraphType $ratePlanDescription = null, \StructType\CommissionType $commission = null, array $guarantee = array(), $ratePlanCode = null, $ratePlanType = null, $ratePlanName = null, $priceViewableInd = null, $qualificationType = null)
    {
        $this
            ->setRatePlanDescription($ratePlanDescription)
            ->setCommission($commission)
            ->setGuarantee($guarantee)
            ->setRatePlanCode($ratePlanCode)
            ->setRatePlanType($ratePlanType)
            ->setRatePlanName($ratePlanName)
            ->setPriceViewableInd($priceViewableInd)
            ->setQualificationType($qualificationType);
    }
    /**
     * Get RatePlanDescription value
     * @return \StructType\ParagraphType|null
     */
    public function getRatePlanDescription()
    {
        return $this->RatePlanDescription;
    }
    /**
     * Set RatePlanDescription value
     * @param \StructType\ParagraphType $ratePlanDescription
     * @return \StructType\RatePlanType
     */
    public function setRatePlanDescription(\StructType\ParagraphType $ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
        return $this;
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
     * @return \StructType\RatePlanType
     */
    public function setCommission(\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \StructType\Guarantee[]|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @throws \InvalidArgumentException
     * @param \StructType\Guarantee[] $guarantee
     * @return \StructType\RatePlanType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $ratePlanTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!$ratePlanTypeGuaranteeItem instanceof \StructType\Guarantee) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of \StructType\Guarantee, "%s" given', is_object($ratePlanTypeGuaranteeItem) ? get_class($ratePlanTypeGuaranteeItem) : gettype($ratePlanTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param \StructType\Guarantee $item
     * @return \StructType\RatePlanType
     */
    public function addToGuarantee(\StructType\Guarantee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Guarantee) {
            throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of \StructType\Guarantee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guarantee[] = $item;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \StructType\RatePlanType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \StructType\RatePlanType
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get RatePlanName value
     * @return string|null
     */
    public function getRatePlanName()
    {
        return $this->RatePlanName;
    }
    /**
     * Set RatePlanName value
     * @param string $ratePlanName
     * @return \StructType\RatePlanType
     */
    public function setRatePlanName($ratePlanName = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanName) && !is_string($ratePlanName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanName)), __LINE__);
        }
        $this->RatePlanName = $ratePlanName;
        return $this;
    }
    /**
     * Get PriceViewableInd value
     * @return bool|null
     */
    public function getPriceViewableInd()
    {
        return $this->PriceViewableInd;
    }
    /**
     * Set PriceViewableInd value
     * @param bool $priceViewableInd
     * @return \StructType\RatePlanType
     */
    public function setPriceViewableInd($priceViewableInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceViewableInd) && !is_bool($priceViewableInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceViewableInd)), __LINE__);
        }
        $this->PriceViewableInd = $priceViewableInd;
        return $this;
    }
    /**
     * Get QualificationType value
     * @return string|null
     */
    public function getQualificationType()
    {
        return $this->QualificationType;
    }
    /**
     * Set QualificationType value
     * @param string $qualificationType
     * @return \StructType\RatePlanType
     */
    public function setQualificationType($qualificationType = null)
    {
        // validation for constraint: string
        if (!is_null($qualificationType) && !is_string($qualificationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualificationType)), __LINE__);
        }
        $this->QualificationType = $qualificationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RatePlanType
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
