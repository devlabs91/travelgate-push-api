<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePayment StructType
 * @subpackage Structs
 */
class GuaranteePayment extends AbstractStructBase
{
    /**
     * The PaymentCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentCode;
    /**
     * The AcceptedPayments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment
     */
    public $AcceptedPayments;
    /**
     * Constructor method for GuaranteePayment
     * @uses GuaranteePayment::setPaymentCode()
     * @uses GuaranteePayment::setAcceptedPayments()
     * @param string $paymentCode
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment $acceptedPayments
     */
    public function __construct($paymentCode = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment $acceptedPayments = null)
    {
        $this
            ->setPaymentCode($paymentCode)
            ->setAcceptedPayments($acceptedPayments);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteePayment
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
     * Get AcceptedPayments value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment|null
     */
    public function getAcceptedPayments()
    {
        return $this->AcceptedPayments;
    }
    /**
     * Set AcceptedPayments value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment $acceptedPayments
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteePayment
     */
    public function setAcceptedPayments(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment $acceptedPayments = null)
    {
        $this->AcceptedPayments = $acceptedPayments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteePayment
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
