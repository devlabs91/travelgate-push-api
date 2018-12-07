<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlan StructType
 * @subpackage Structs
 */
class RatePlan extends AbstractStructBase
{
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DateRange
     */
    public $DateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public $RatePlanCandidates;
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\HotelRef
     */
    public $HotelRef;
    /**
     * Constructor method for RatePlan
     * @uses RatePlan::setDateRange()
     * @uses RatePlan::setRatePlanCandidates()
     * @uses RatePlan::setHotelRef()
     * @param \StructType\DateRange $dateRange
     * @param \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates
     * @param \StructType\HotelRef $hotelRef
     */
    public function __construct(\StructType\DateRange $dateRange = null, \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null, \StructType\HotelRef $hotelRef = null)
    {
        $this
            ->setDateRange($dateRange)
            ->setRatePlanCandidates($ratePlanCandidates)
            ->setHotelRef($hotelRef);
    }
    /**
     * Get DateRange value
     * @return \StructType\DateRange|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param \StructType\DateRange $dateRange
     * @return \StructType\RatePlan
     */
    public function setDateRange(\StructType\DateRange $dateRange = null)
    {
        $this->DateRange = $dateRange;
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
     * @return \StructType\RatePlan
     */
    public function setRatePlanCandidates(\ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate $ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \StructType\HotelRef $hotelRef
     * @return \StructType\RatePlan
     */
    public function setHotelRef(\StructType\HotelRef $hotelRef = null)
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
     * @return \StructType\RatePlan
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
