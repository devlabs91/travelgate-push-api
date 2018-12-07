<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelRatePlanTypeRate ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelRatePlanTypeRate extends AbstractStructArrayBase
{
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Rate[]
     */
    public $Rate;
    /**
     * Constructor method for ArrayOfHotelRatePlanTypeRate
     * @uses ArrayOfHotelRatePlanTypeRate::setRate()
     * @param \StructType\Rate[] $rate
     */
    public function __construct(array $rate = array())
    {
        $this
            ->setRate($rate);
    }
    /**
     * Get Rate value
     * @return \StructType\Rate[]|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @throws \InvalidArgumentException
     * @param \StructType\Rate[] $rate
     * @return \ArrayType\ArrayOfHotelRatePlanTypeRate
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $arrayOfHotelRatePlanTypeRateRateItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelRatePlanTypeRateRateItem instanceof \StructType\Rate) {
                throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \StructType\Rate, "%s" given', is_object($arrayOfHotelRatePlanTypeRateRateItem) ? get_class($arrayOfHotelRatePlanTypeRateRateItem) : gettype($arrayOfHotelRatePlanTypeRateRateItem)), __LINE__);
            }
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Add item to Rate value
     * @throws \InvalidArgumentException
     * @param \StructType\Rate $item
     * @return \ArrayType\ArrayOfHotelRatePlanTypeRate
     */
    public function addToRate(\StructType\Rate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Rate) {
            throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \StructType\Rate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Rate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Rate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Rate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Rate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Rate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Rate
     */
    public function getAttributeName()
    {
        return 'Rate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelRatePlanTypeRate
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
