<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeType StructType
 * @subpackage Structs
 */
class GuaranteeType extends AbstractStructBase
{
    /**
     * The PaymentCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentCode;
    /**
     * The GuaranteesAccepted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted
     */
    public $GuaranteesAccepted;
    /**
     * The GuaranteeCode
     * @var string
     */
    public $GuaranteeCode;
    /**
     * Constructor method for GuaranteeType
     * @uses GuaranteeType::setPaymentCode()
     * @uses GuaranteeType::setGuaranteesAccepted()
     * @uses GuaranteeType::setGuaranteeCode()
     * @param string $paymentCode
     * @param \ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted $guaranteesAccepted
     * @param string $guaranteeCode
     */
    public function __construct($paymentCode = null, \ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted $guaranteesAccepted = null, $guaranteeCode = null)
    {
        $this
            ->setPaymentCode($paymentCode)
            ->setGuaranteesAccepted($guaranteesAccepted)
            ->setGuaranteeCode($guaranteeCode);
    }
    /**
     * Get PaymentCode value
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->PaymentCode;
    }
    /**
     * Set PaymentCode value
     * @param string $paymentCode
     * @return \StructType\GuaranteeType
     */
    public function setPaymentCode($paymentCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentCode) && !is_string($paymentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentCode)), __LINE__);
        }
        $this->PaymentCode = $paymentCode;
        return $this;
    }
    /**
     * Get GuaranteesAccepted value
     * @return \ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted|null
     */
    public function getGuaranteesAccepted()
    {
        return $this->GuaranteesAccepted;
    }
    /**
     * Set GuaranteesAccepted value
     * @param \ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted $guaranteesAccepted
     * @return \StructType\GuaranteeType
     */
    public function setGuaranteesAccepted(\ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted $guaranteesAccepted = null)
    {
        $this->GuaranteesAccepted = $guaranteesAccepted;
        return $this;
    }
    /**
     * Get GuaranteeCode value
     * @return string|null
     */
    public function getGuaranteeCode()
    {
        return $this->GuaranteeCode;
    }
    /**
     * Set GuaranteeCode value
     * @param string $guaranteeCode
     * @return \StructType\GuaranteeType
     */
    public function setGuaranteeCode($guaranteeCode = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeCode) && !is_string($guaranteeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeCode)), __LINE__);
        }
        $this->GuaranteeCode = $guaranteeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GuaranteeType
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
