<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormType StructType
 * @subpackage Structs
 */
class PaymentFormType extends AbstractStructBase
{
    /**
     * The Cash
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Cash
     */
    public $Cash;
    /**
     * The PaymentCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\PaymentCardType
     */
    public $PaymentCard;
    /**
     * Constructor method for PaymentFormType
     * @uses PaymentFormType::setCash()
     * @uses PaymentFormType::setPaymentCard()
     * @param \Devlabs91\TravelgatePushApi\StructType\Cash $cash
     * @param \Devlabs91\TravelgatePushApi\StructType\PaymentCardType $paymentCard
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\Cash $cash = null, \Devlabs91\TravelgatePushApi\StructType\PaymentCardType $paymentCard = null)
    {
        $this
            ->setCash($cash)
            ->setPaymentCard($paymentCard);
    }
    /**
     * Get Cash value
     * @return \Devlabs91\TravelgatePushApi\StructType\Cash|null
     */
    public function getCash()
    {
        return $this->Cash;
    }
    /**
     * Set Cash value
     * @param \Devlabs91\TravelgatePushApi\StructType\Cash $cash
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentFormType
     */
    public function setCash(\Devlabs91\TravelgatePushApi\StructType\Cash $cash = null)
    {
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get PaymentCard value
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentCardType|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param \Devlabs91\TravelgatePushApi\StructType\PaymentCardType $paymentCard
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentFormType
     */
    public function setPaymentCard(\Devlabs91\TravelgatePushApi\StructType\PaymentCardType $paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\PaymentFormType
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
