<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Policy StructType
 * @subpackage Structs
 */
class Policy extends AbstractStructBase
{
    /**
     * The GuaranteePaymentPolicy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy
     */
    public $GuaranteePaymentPolicy;
    /**
     * The PolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\PolicyInfo
     */
    public $PolicyInfo;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * Constructor method for Policy
     * @uses Policy::setGuaranteePaymentPolicy()
     * @uses Policy::setPolicyInfo()
     * @uses Policy::setCode()
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy
     * @param \Devlabs91\TravelgatePushApi\StructType\PolicyInfo $policyInfo
     * @param string $code
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy = null, \Devlabs91\TravelgatePushApi\StructType\PolicyInfo $policyInfo = null, $code = null)
    {
        $this
            ->setGuaranteePaymentPolicy($guaranteePaymentPolicy)
            ->setPolicyInfo($policyInfo)
            ->setCode($code);
    }
    /**
     * Get GuaranteePaymentPolicy value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy|null
     */
    public function getGuaranteePaymentPolicy()
    {
        return $this->GuaranteePaymentPolicy;
    }
    /**
     * Set GuaranteePaymentPolicy value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy
     * @return \Devlabs91\TravelgatePushApi\StructType\Policy
     */
    public function setGuaranteePaymentPolicy(\Devlabs91\TravelgatePushApi\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy = null)
    {
        $this->GuaranteePaymentPolicy = $guaranteePaymentPolicy;
        return $this;
    }
    /**
     * Get PolicyInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\PolicyInfo|null
     */
    public function getPolicyInfo()
    {
        return $this->PolicyInfo;
    }
    /**
     * Set PolicyInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\PolicyInfo $policyInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\Policy
     */
    public function setPolicyInfo(\Devlabs91\TravelgatePushApi\StructType\PolicyInfo $policyInfo = null)
    {
        $this->PolicyInfo = $policyInfo;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\Policy
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Policy
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
