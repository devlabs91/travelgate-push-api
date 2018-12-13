<?php

namespace Devlabs91\TravelgatePushApi\Models;

class AvailStatusMessage
{
    /**
     * Identifies the number of available rooms per Room & RatePlan for the indicated dates. Not mandatory when the @Status is Close. Not used for derived rates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BookingLimit;
    
    /**
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var StatusApplicationControl
     */
    public $StatusApplicationControl;
    
    /**
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var LengthsOfStayType
     */
    public $LengthsOfStay;
    /**
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var RestrictionStatus
     */
    public $RestrictionStatus;

    public function __construct( $bookingLimit = null ) {
        $this->BookingLimit = $bookingLimit;
    }
    
    /**
     * Get BookingLimit value
     * @return int|null
     */
    public function getBookingLimit()
    {
        return $this->BookingLimit;
    }
    
    public function setBookingLimit($bookingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($bookingLimit) && !is_numeric($bookingLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bookingLimit)), __LINE__);
        }
        $this->BookingLimit = $bookingLimit;
        return $this;
    }
    
    /**
     * @return StatusApplicationControl
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    
    public function setStatusApplicationControl( StatusApplicationControl $statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
        return $this;
    }
    
    /**
     * @return LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    
    public function setLengthsOfStay( LengthsOfStayType $lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }

    /**
     * 
     * @return RestrictionStatus
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    
    public function setRestrictionStatus( RestrictionStatus $restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    
}
