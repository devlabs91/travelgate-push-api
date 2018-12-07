<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileType StructType
 * @subpackage Structs
 */
class ProfileType extends AbstractStructBase
{
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public $Customer;
    /**
     * The ProfileType
     * @var string
     */
    public $ProfileType;
    /**
     * Constructor method for ProfileType
     * @uses ProfileType::setCustomer()
     * @uses ProfileType::setProfileType()
     * @param \Devlabs91\TravelgatePushApi\StructType\CustomerType $customer
     * @param string $profileType
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CustomerType $customer = null, $profileType = null)
    {
        $this
            ->setCustomer($customer)
            ->setProfileType($profileType);
    }
    /**
     * Get Customer value
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Devlabs91\TravelgatePushApi\StructType\CustomerType $customer
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileType
     */
    public function setCustomer(\Devlabs91\TravelgatePushApi\StructType\CustomerType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get ProfileType value
     * @return string|null
     */
    public function getProfileType()
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @param string $profileType
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileType
     */
    public function setProfileType($profileType = null)
    {
        // validation for constraint: string
        if (!is_null($profileType) && !is_string($profileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileType)), __LINE__);
        }
        $this->ProfileType = $profileType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ProfileType
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
