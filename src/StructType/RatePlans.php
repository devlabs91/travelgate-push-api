<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlans StructType
 * @subpackage Structs
 */
class RatePlans extends AbstractStructBase
{
    /**
     * The RatePlan
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\HotelRatePlanType[]
     */
    public $RatePlan;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * Constructor method for RatePlans
     * @uses RatePlans::setRatePlan()
     * @uses RatePlans::setHotelCode()
     * @uses RatePlans::setHotelName()
     * @param \StructType\HotelRatePlanType[] $ratePlan
     * @param string $hotelCode
     * @param string $hotelName
     */
    public function __construct(array $ratePlan = array(), $hotelCode = null, $hotelName = null)
    {
        $this
            ->setRatePlan($ratePlan)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName);
    }
    /**
     * Get RatePlan value
     * @return \StructType\HotelRatePlanType[]|null
     */
    public function getRatePlan()
    {
        return $this->RatePlan;
    }
    /**
     * Set RatePlan value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRatePlanType[] $ratePlan
     * @return \StructType\RatePlans
     */
    public function setRatePlan(array $ratePlan = array())
    {
        foreach ($ratePlan as $ratePlansRatePlanItem) {
            // validation for constraint: itemType
            if (!$ratePlansRatePlanItem instanceof \StructType\HotelRatePlanType) {
                throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of \StructType\HotelRatePlanType, "%s" given', is_object($ratePlansRatePlanItem) ? get_class($ratePlansRatePlanItem) : gettype($ratePlansRatePlanItem)), __LINE__);
            }
        }
        $this->RatePlan = $ratePlan;
        return $this;
    }
    /**
     * Add item to RatePlan value
     * @throws \InvalidArgumentException
     * @param \StructType\HotelRatePlanType $item
     * @return \StructType\RatePlans
     */
    public function addToRatePlan(\StructType\HotelRatePlanType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelRatePlanType) {
            throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of \StructType\HotelRatePlanType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlan[] = $item;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \StructType\RatePlans
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \StructType\RatePlans
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RatePlans
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
