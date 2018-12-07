<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRatePlanInclusionsType StructType
 * @subpackage Structs
 */
class HotelRatePlanInclusionsType extends AbstractStructBase
{
    /**
     * The RatePlanInclusionDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RatePlanInclusionDescriptionType
     */
    public $RatePlanInclusionDescription;
    /**
     * Constructor method for HotelRatePlanInclusionsType
     * @uses HotelRatePlanInclusionsType::setRatePlanInclusionDescription()
     * @param \StructType\RatePlanInclusionDescriptionType $ratePlanInclusionDescription
     */
    public function __construct(\StructType\RatePlanInclusionDescriptionType $ratePlanInclusionDescription = null)
    {
        $this
            ->setRatePlanInclusionDescription($ratePlanInclusionDescription);
    }
    /**
     * Get RatePlanInclusionDescription value
     * @return \StructType\RatePlanInclusionDescriptionType|null
     */
    public function getRatePlanInclusionDescription()
    {
        return $this->RatePlanInclusionDescription;
    }
    /**
     * Set RatePlanInclusionDescription value
     * @param \StructType\RatePlanInclusionDescriptionType $ratePlanInclusionDescription
     * @return \StructType\HotelRatePlanInclusionsType
     */
    public function setRatePlanInclusionDescription(\StructType\RatePlanInclusionDescriptionType $ratePlanInclusionDescription = null)
    {
        $this->RatePlanInclusionDescription = $ratePlanInclusionDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelRatePlanInclusionsType
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
