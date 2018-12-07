<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthsOfStayType StructType
 * @subpackage Structs
 */
class LengthsOfStayType extends AbstractStructBase
{
    /**
     * The LengthOfStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\LengthOfStay[]
     */
    public $LengthOfStay;
    /**
     * The ArrivalDateBased
     * @var bool
     */
    public $ArrivalDateBased;
    /**
     * Constructor method for LengthsOfStayType
     * @uses LengthsOfStayType::setLengthOfStay()
     * @uses LengthsOfStayType::setArrivalDateBased()
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthOfStay[] $lengthOfStay
     * @param bool $arrivalDateBased
     */
    public function __construct(array $lengthOfStay = array(), $arrivalDateBased = null)
    {
        $this
            ->setLengthOfStay($lengthOfStay)
            ->setArrivalDateBased($arrivalDateBased);
    }
    /**
     * Get LengthOfStay value
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthOfStay[]|null
     */
    public function getLengthOfStay()
    {
        return $this->LengthOfStay;
    }
    /**
     * Set LengthOfStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthOfStay[] $lengthOfStay
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
     */
    public function setLengthOfStay(array $lengthOfStay = array())
    {
        foreach ($lengthOfStay as $lengthsOfStayTypeLengthOfStayItem) {
            // validation for constraint: itemType
            if (!$lengthsOfStayTypeLengthOfStayItem instanceof \Devlabs91\TravelgatePushApi\StructType\LengthOfStay) {
                throw new \InvalidArgumentException(sprintf('The LengthOfStay property can only contain items of \Devlabs91\TravelgatePushApi\StructType\LengthOfStay, "%s" given', is_object($lengthsOfStayTypeLengthOfStayItem) ? get_class($lengthsOfStayTypeLengthOfStayItem) : gettype($lengthsOfStayTypeLengthOfStayItem)), __LINE__);
            }
        }
        $this->LengthOfStay = $lengthOfStay;
        return $this;
    }
    /**
     * Add item to LengthOfStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\LengthOfStay $item
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
     */
    public function addToLengthOfStay(\Devlabs91\TravelgatePushApi\StructType\LengthOfStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\LengthOfStay) {
            throw new \InvalidArgumentException(sprintf('The LengthOfStay property can only contain items of \Devlabs91\TravelgatePushApi\StructType\LengthOfStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LengthOfStay[] = $item;
        return $this;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\LengthsOfStayType
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
