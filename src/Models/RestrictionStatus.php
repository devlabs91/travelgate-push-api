<?php

namespace Devlabs91\TravelgatePushApi\Models;

class RestrictionStatus
{
    /**
     * (Open, Close).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Master. This is the master availability. If master availability is ‘Closed’, the product is not bookable 
     * if any of the stay dates includes one of the dates specified by the Application Control element. If master 
     * availability is ‘Open’, additional restrictions on arrival and departure may be placed (Master, Arrival, Departure).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Restriction;
    
    /**
     * Minimum number of days before the check-in date after which the product is not available to be booked. 
     * This restriction is usually used to offer discounts on early bookings.
     * @var string
     */
    public $MinAdvancedBookingOffset;
    
    /**
     * Maximum number of days before the check-in date after which the product is not available to be booked. 
     * This restriction is usually used to offer last minute discounts on unsold inventory.
     * @var string
     */
    public $MaxAdvancedBookingOffset;
    
    /**
     * When @Status is open, in this element you can indicate this room or room/ratePlan can be sold without 
     * limit(like BookingLimit=MaxInteger). Not used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SellThroughOpenIndicator;
    
    public function __construct($status = 'Open', $restriction = 'Master', $minAdvancedBookingOffset = null, $maxAdvancedBookingOffset = null, $sellThroughOpenIndicator = null ) {
        $this->Status = $status;
        $this->Restriction = $restriction;
        $this->MinAdvancedBookingOffset = $minAdvancedBookingOffset;
        $this->MaxAdvancedBookingOffset = $maxAdvancedBookingOffset;
        $this->SellThroughOpenIndicator = $sellThroughOpenIndicator;
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
     * @return RestrictionStatus
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
     * @return RestrictionStatus
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
     * @return RestrictionStatus
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
     * @return RestrictionStatus
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
     * @return RestrictionStatus
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
    
}
