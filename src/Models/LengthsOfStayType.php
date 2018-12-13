<?php

namespace Devlabs91\TravelgatePushApi\Models;

class LengthsOfStayType
{
    /**
     * When its true, the minimum and maximum stay is checked ONLY the first day of the availability, when false or not indicated,
     * the minimum and maximum stay is checked all the availability days. If both values are needed two AvailStatusMessage must be send.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ArrivalDateBased;
    
    /**
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var LengthOfStay[]
     */
    public $LengthOfStay;
    
    public function __construct( $arrivalDateBased = null ) {
        $this->ArrivalDateBased = $arrivalDateBased;
        $this->LengthOfStay = [];
    }
    
    /**
     * Get ArrivalDateBased value
     * @return bool|null
     */
    public function getArrivalDateBased()
    {
        return $this->ArrivalDateBased;
    }
    
    /**
     * Set ArrivalDateBased value
     * @param bool $arrivalDateBased
     * @return LengthsOfStayType
     */
    public function setArrivalDateBased($arrivalDateBased = null)
    {
        // validation for constraint: boolean
        if (!is_null($arrivalDateBased) && !is_bool($arrivalDateBased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($arrivalDateBased)), __LINE__);
        }
        $this->ArrivalDateBased = $arrivalDateBased;
        return $this;
    }
    
    /**
     * Get LengthOfStay value
     * @return LengthOfStay[]|null
     */
    public function getLengthOfStay()
    {
        return $this->LengthOfStay;
    }
    
    public function addToLengthOfStay( LengthOfStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof LengthOfStay) {
            throw new \InvalidArgumentException(sprintf('The LengthOfStay property can only contain items of \Devlabs91\TravelgatePushApi\Models\LengthOfStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LengthOfStay[] = $item;
        return $this;
    }
    
}
