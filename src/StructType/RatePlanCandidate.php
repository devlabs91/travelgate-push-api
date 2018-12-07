<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanCandidate StructType
 * @subpackage Structs
 */
class RatePlanCandidate extends AbstractStructBase
{
    /**
     * The RatePlanType
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The PromotionCode
     * @var string
     */
    public $PromotionCode;
    /**
     * Constructor method for RatePlanCandidate
     * @uses RatePlanCandidate::setRatePlanType()
     * @uses RatePlanCandidate::setRatePlanCode()
     * @uses RatePlanCandidate::setPromotionCode()
     * @param string $ratePlanType
     * @param string $ratePlanCode
     * @param string $promotionCode
     */
    public function __construct($ratePlanType = null, $ratePlanCode = null, $promotionCode = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setRatePlanCode($ratePlanCode)
            ->setPromotionCode($promotionCode);
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
     * @return \StructType\RatePlanCandidate
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
     * @return \StructType\RatePlanCandidate
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
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \StructType\RatePlanCandidate
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RatePlanCandidate
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
