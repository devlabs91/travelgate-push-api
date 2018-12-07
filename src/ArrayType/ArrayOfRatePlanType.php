<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRatePlanType ArrayType
 * @subpackage Arrays
 */
class ArrayOfRatePlanType extends AbstractStructArrayBase
{
    /**
     * The RatePlan
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RatePlanType[]
     */
    public $RatePlan;
    /**
     * Constructor method for ArrayOfRatePlanType
     * @uses ArrayOfRatePlanType::setRatePlan()
     * @param \StructType\RatePlanType[] $ratePlan
     */
    public function __construct(array $ratePlan = array())
    {
        $this
            ->setRatePlan($ratePlan);
    }
    /**
     * Get RatePlan value
     * @return \StructType\RatePlanType[]|null
     */
    public function getRatePlan()
    {
        return $this->RatePlan;
    }
    /**
     * Set RatePlan value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlanType[] $ratePlan
     * @return \ArrayType\ArrayOfRatePlanType
     */
    public function setRatePlan(array $ratePlan = array())
    {
        foreach ($ratePlan as $arrayOfRatePlanTypeRatePlanItem) {
            // validation for constraint: itemType
            if (!$arrayOfRatePlanTypeRatePlanItem instanceof \StructType\RatePlanType) {
                throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of \StructType\RatePlanType, "%s" given', is_object($arrayOfRatePlanTypeRatePlanItem) ? get_class($arrayOfRatePlanTypeRatePlanItem) : gettype($arrayOfRatePlanTypeRatePlanItem)), __LINE__);
            }
        }
        $this->RatePlan = $ratePlan;
        return $this;
    }
    /**
     * Add item to RatePlan value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlanType $item
     * @return \ArrayType\ArrayOfRatePlanType
     */
    public function addToRatePlan(\StructType\RatePlanType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RatePlanType) {
            throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of \StructType\RatePlanType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlan[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RatePlanType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RatePlanType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RatePlanType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RatePlanType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RatePlanType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RatePlan
     */
    public function getAttributeName()
    {
        return 'RatePlan';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRatePlanType
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
