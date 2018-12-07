<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingChannel StructType
 * @subpackage Structs
 */
class BookingChannel extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CompanyNameType
     */
    public $CompanyName;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The Primary
     * @var bool
     */
    public $Primary;
    /**
     * Constructor method for BookingChannel
     * @uses BookingChannel::setCompanyName()
     * @uses BookingChannel::setType()
     * @uses BookingChannel::setPrimary()
     * @param \Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName
     * @param string $type
     * @param bool $primary
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName = null, $type = null, $primary = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setType($type)
            ->setPrimary($primary);
    }
    /**
     * Get CompanyName value
     * @return \Devlabs91\TravelgatePushApi\StructType\CompanyNameType|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingChannel
     */
    public function setCompanyName(\Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName = null)
    {
        $this->CompanyName = $companyName;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingChannel
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
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingChannel
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingChannel
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
