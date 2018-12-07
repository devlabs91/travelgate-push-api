<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionStatus StructType
 * @subpackage Structs
 */
class RestrictionStatus extends AbstractStructBase
{
    /**
     * The Restriction
     * @var string
     */
    public $Restriction;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The SellThroughOpenIndicator
     * @var bool
     */
    public $SellThroughOpenIndicator;
    /**
     * The MaxAdvancedBookingOffset
     * Meta informations extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $MaxAdvancedBookingOffset;
    /**
     * The MinAdvancedBookingOffset
     * Meta informations extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $MinAdvancedBookingOffset;
    /**
     * Constructor method for RestrictionStatus
     * @uses RestrictionStatus::setRestriction()
     * @uses RestrictionStatus::setStatus()
     * @uses RestrictionStatus::setSellThroughOpenIndicator()
     * @uses RestrictionStatus::setMaxAdvancedBookingOffset()
     * @uses RestrictionStatus::setMinAdvancedBookingOffset()
     * @param string $restriction
     * @param string $status
     * @param bool $sellThroughOpenIndicator
     * @param string $maxAdvancedBookingOffset
     * @param string $minAdvancedBookingOffset
     */
    public function __construct($restriction = null, $status = null, $sellThroughOpenIndicator = null, $maxAdvancedBookingOffset = null, $minAdvancedBookingOffset = null)
    {
        $this
            ->setRestriction($restriction)
            ->setStatus($status)
            ->setSellThroughOpenIndicator($sellThroughOpenIndicator)
            ->setMaxAdvancedBookingOffset($maxAdvancedBookingOffset)
            ->setMinAdvancedBookingOffset($minAdvancedBookingOffset);
    }
    /**
     * Get Restriction value
     * @return string|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param string $restriction
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public function setRestriction($restriction = null)
    {
        // validation for constraint: string
        if (!is_null($restriction) && !is_string($restriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restriction)), __LINE__);
        }
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AvailabilityStatusType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\AvailabilityStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\AvailabilityStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\AvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get SellThroughOpenIndicator value
     * @return bool|null
     */
    public function getSellThroughOpenIndicator()
    {
        return $this->SellThroughOpenIndicator;
    }
    /**
     * Set SellThroughOpenIndicator value
     * @param bool $sellThroughOpenIndicator
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public function setSellThroughOpenIndicator($sellThroughOpenIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellThroughOpenIndicator) && !is_bool($sellThroughOpenIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellThroughOpenIndicator)), __LINE__);
        }
        $this->SellThroughOpenIndicator = $sellThroughOpenIndicator;
        return $this;
    }
    /**
     * Get MaxAdvancedBookingOffset value
     * @return string|null
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->MaxAdvancedBookingOffset;
    }
    /**
     * Set MaxAdvancedBookingOffset value
     * @param string $maxAdvancedBookingOffset
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public function setMaxAdvancedBookingOffset($maxAdvancedBookingOffset = null)
    {
        // validation for constraint: maxInclusive
        if ($maxAdvancedBookingOffset > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $maxAdvancedBookingOffset), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($maxAdvancedBookingOffset < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $maxAdvancedBookingOffset), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($maxAdvancedBookingOffset) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $maxAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($maxAdvancedBookingOffset, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($maxAdvancedBookingOffset) && !is_string($maxAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdvancedBookingOffset)), __LINE__);
        }
        $this->MaxAdvancedBookingOffset = $maxAdvancedBookingOffset;
        return $this;
    }
    /**
     * Get MinAdvancedBookingOffset value
     * @return string|null
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->MinAdvancedBookingOffset;
    }
    /**
     * Set MinAdvancedBookingOffset value
     * @param string $minAdvancedBookingOffset
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public function setMinAdvancedBookingOffset($minAdvancedBookingOffset = null)
    {
        // validation for constraint: maxInclusive
        if ($minAdvancedBookingOffset > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $minAdvancedBookingOffset), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($minAdvancedBookingOffset < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $minAdvancedBookingOffset), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($minAdvancedBookingOffset) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $minAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($minAdvancedBookingOffset, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($minAdvancedBookingOffset) && !is_string($minAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minAdvancedBookingOffset)), __LINE__);
        }
        $this->MinAdvancedBookingOffset = $minAdvancedBookingOffset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
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
