<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailStatusMessageType StructType
 * @subpackage Structs
 */
class AvailStatusMessageType extends AbstractStructBase
{
    /**
     * The StatusApplicationControl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType
     */
    public $StatusApplicationControl;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
     */
    public $LengthsOfStay;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus
     */
    public $RestrictionStatus;
    /**
     * The BookingLimit
     * @var int
     */
    public $BookingLimit;
    /**
     * The BookingSold
     * @var int
     */
    public $BookingSold;
    /**
     * Constructor method for AvailStatusMessageType
     * @uses AvailStatusMessageType::setStatusApplicationControl()
     * @uses AvailStatusMessageType::setLengthsOfStay()
     * @uses AvailStatusMessageType::setRestrictionStatus()
     * @uses AvailStatusMessageType::setBookingLimit()
     * @uses AvailStatusMessageType::setBookingSold()
     * @param \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType $statusApplicationControl
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay
     * @param \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus $restrictionStatus
     * @param int $bookingLimit
     * @param int $bookingSold
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType $statusApplicationControl = null, \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay = null, \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus $restrictionStatus = null, $bookingLimit = null, $bookingSold = null)
    {
        $this
            ->setStatusApplicationControl($statusApplicationControl)
            ->setLengthsOfStay($lengthsOfStay)
            ->setRestrictionStatus($restrictionStatus)
            ->setBookingLimit($bookingLimit)
            ->setBookingSold($bookingSold);
    }
    /**
     * Get StatusApplicationControl value
     * @return \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType|null
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    /**
     * Set StatusApplicationControl value
     * @param \Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType $statusApplicationControl
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
     */
    public function setStatusApplicationControl(\Devlabs91\TravelgatePushApi\StructType\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /**
     * Get LengthsOfStay value
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType|null
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    /**
     * Set LengthsOfStay value
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
     */
    public function setLengthsOfStay(\Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get RestrictionStatus value
     * @return \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus|null
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    /**
     * Set RestrictionStatus value
     * @param \Devlabs91\TravelgatePushApi\StructType\RestrictionStatus $restrictionStatus
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
     */
    public function setRestrictionStatus(\Devlabs91\TravelgatePushApi\StructType\RestrictionStatus $restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    /**
     * Get BookingLimit value
     * @return int|null
     */
    public function getBookingLimit()
    {
        return $this->BookingLimit;
    }
    /**
     * Set BookingLimit value
     * @param int $bookingLimit
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
     */
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
     * Get BookingSold value
     * @return int|null
     */
    public function getBookingSold()
    {
        return $this->BookingSold;
    }
    /**
     * Set BookingSold value
     * @param int $bookingSold
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
     */
    public function setBookingSold($bookingSold = null)
    {
        // validation for constraint: int
        if (!is_null($bookingSold) && !is_numeric($bookingSold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bookingSold)), __LINE__);
        }
        $this->BookingSold = $bookingSold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailStatusMessageType
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
