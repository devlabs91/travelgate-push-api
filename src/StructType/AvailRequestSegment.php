<?php

namespace StructType;

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
     * @var \StructType\HotelSearchCriteria
     */
    public $HotelSearchCriteria;
    /**
     * The StayDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DateTimeSpanType
     */
    public $StayDateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public $RatePlanCandidates;
    /**
     * The RoomStayCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
     */
    public $RoomStayCandidates;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * Constructor method for AvailRequestSegment
     * @uses AvailRequestSegment::setHotelSearchCriteria()
     * @uses AvailRequestSegment::setStayDateRange()
     * @uses AvailRequestSegment::setRatePlanCandidates()
     * @uses AvailRequestSegment::setRoomStayCandidates()
     * @uses AvailRequestSegment::setTPA_Extensions()
     * @param \StructType\HotelSearchCriteria $hotelSearchCriteria
     * @param \StructType\DateTimeSpanType $stayDateRange
     * @param \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @param \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     */
    public function __construct(\StructType\HotelSearchCriteria $hotelSearchCriteria = null, \StructType\DateTimeSpanType $stayDateRange = null, \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null, \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates = null, \StructType\TPA_ExtensionsType $tPA_Extensions = null)
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
     * @return \StructType\HotelSearchCriteria|null
     */
    public function getHotelSearchCriteria()
    {
        return $this->HotelSearchCriteria;
    }
    /**
     * Set HotelSearchCriteria value
     * @param \StructType\HotelSearchCriteria $hotelSearchCriteria
     * @return \StructType\AvailRequestSegment
     */
    public function setHotelSearchCriteria(\StructType\HotelSearchCriteria $hotelSearchCriteria = null)
    {
        $this->HotelSearchCriteria = $hotelSearchCriteria;
        return $this;
    }
    /**
     * Get StayDateRange value
     * @return \StructType\DateTimeSpanType|null
     */
    public function getStayDateRange()
    {
        return $this->StayDateRange;
    }
    /**
     * Set StayDateRange value
     * @param \StructType\DateTimeSpanType $stayDateRange
     * @return \StructType\AvailRequestSegment
     */
    public function setStayDateRange(\StructType\DateTimeSpanType $stayDateRange = null)
    {
        $this->StayDateRange = $stayDateRange;
        return $this;
    }
    /**
     * Get RatePlanCandidates value
     * @return \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate|null
     */
    public function getRatePlanCandidates()
    {
        return $this->RatePlanCandidates;
    }
    /**
     * Set RatePlanCandidates value
     * @param \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @return \StructType\AvailRequestSegment
     */
    public function setRatePlanCandidates(\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get RoomStayCandidates value
     * @return \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate|null
     */
    public function getRoomStayCandidates()
    {
        return $this->RoomStayCandidates;
    }
    /**
     * Set RoomStayCandidates value
     * @param \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates
     * @return \StructType\AvailRequestSegment
     */
    public function setRoomStayCandidates(\ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate $roomStayCandidates = null)
    {
        $this->RoomStayCandidates = $roomStayCandidates;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \StructType\AvailRequestSegment
     */
    public function setTPA_Extensions(\StructType\TPA_ExtensionsType $tPA_Extensions = null)
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
     * @return \StructType\AvailRequestSegment
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
