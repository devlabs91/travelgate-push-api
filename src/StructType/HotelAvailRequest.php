<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailRequest StructType
 * @subpackage Structs
 */
class HotelAvailRequest extends AbstractStructBase
{
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\DateRange
     */
    public $DateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public $RatePlanCandidates;
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * Constructor method for HotelAvailRequest
     * @uses HotelAvailRequest::setDateRange()
     * @uses HotelAvailRequest::setRatePlanCandidates()
     * @uses HotelAvailRequest::setHotelRef()
     * @param \Devlabs91\TravelgatePushApi\StructType\DateRange $dateRange
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRef $hotelRef
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\DateRange $dateRange = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null, \Devlabs91\TravelgatePushApi\StructType\HotelRef $hotelRef = null)
    {
        $this
            ->setDateRange($dateRange)
            ->setRatePlanCandidates($ratePlanCandidates)
            ->setHotelRef($hotelRef);
    }
    /**
     * Get DateRange value
     * @return \Devlabs91\TravelgatePushApi\StructType\DateRange|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param \Devlabs91\TravelgatePushApi\StructType\DateRange $dateRange
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest
     */
    public function setDateRange(\Devlabs91\TravelgatePushApi\StructType\DateRange $dateRange = null)
    {
        $this->DateRange = $dateRange;
        return $this;
    }
    /**
     * Get RatePlanCandidates value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate|null
     */
    public function getRatePlanCandidates()
    {
        return $this->RatePlanCandidates;
    }
    /**
     * Set RatePlanCandidates value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest
     */
    public function setRatePlanCandidates(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelRef $hotelRef
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest
     */
    public function setHotelRef(\Devlabs91\TravelgatePushApi\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelAvailRequest
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
