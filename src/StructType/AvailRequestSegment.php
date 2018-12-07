<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailRequestSegment StructType
 * @subpackage Structs
 */
class AvailRequestSegment extends AbstractStructBase
{
    /**
     * The HotelSearchCriteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria
     */
    public $HotelSearchCriteria;
    /**
     * The StayDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType
     */
    public $StayDateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public $RatePlanCandidates;
    /**
     * The RoomStayCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
     */
    public $RoomStayCandidates;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * Constructor method for AvailRequestSegment
     * @uses AvailRequestSegment::setHotelSearchCriteria()
     * @uses AvailRequestSegment::setStayDateRange()
     * @uses AvailRequestSegment::setRatePlanCandidates()
     * @uses AvailRequestSegment::setRoomStayCandidates()
     * @uses AvailRequestSegment::setTPA_Extensions()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria $hotelSearchCriteria
     * @param \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $stayDateRange
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria $hotelSearchCriteria = null, \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $stayDateRange = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates = null, \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this
            ->setHotelSearchCriteria($hotelSearchCriteria)
            ->setStayDateRange($stayDateRange)
            ->setRatePlanCandidates($ratePlanCandidates)
            ->setRoomStayCandidates($roomStayCandidates)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get HotelSearchCriteria value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria|null
     */
    public function getHotelSearchCriteria()
    {
        return $this->HotelSearchCriteria;
    }
    /**
     * Set HotelSearchCriteria value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria $hotelSearchCriteria
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
     */
    public function setHotelSearchCriteria(\Devlabs91\TravelgatePushApi\StructType\HotelSearchCriteria $hotelSearchCriteria = null)
    {
        $this->HotelSearchCriteria = $hotelSearchCriteria;
        return $this;
    }
    /**
     * Get StayDateRange value
     * @return \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType|null
     */
    public function getStayDateRange()
    {
        return $this->StayDateRange;
    }
    /**
     * Set StayDateRange value
     * @param \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $stayDateRange
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
     */
    public function setStayDateRange(\Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $stayDateRange = null)
    {
        $this->StayDateRange = $stayDateRange;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
     */
    public function setRatePlanCandidates(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get RoomStayCandidates value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate|null
     */
    public function getRoomStayCandidates()
    {
        return $this->RoomStayCandidates;
    }
    /**
     * Set RoomStayCandidates value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
     */
    public function setRoomStayCandidates(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates = null)
    {
        $this->RoomStayCandidates = $roomStayCandidates;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
     */
    public function setTPA_Extensions(\Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AvailRequestSegment
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
