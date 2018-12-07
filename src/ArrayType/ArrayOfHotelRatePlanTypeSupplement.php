<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHotelRatePlanTypeSupplement ArrayType
 * @subpackage Arrays
 */
class ArrayOfHotelRatePlanTypeSupplement extends AbstractStructArrayBase
{
    /**
     * The Supplement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Supplement[]
     */
    public $Supplement;
    /**
     * Constructor method for ArrayOfHotelRatePlanTypeSupplement
     * @uses ArrayOfHotelRatePlanTypeSupplement::setSupplement()
     * @param \StructType\Supplement[] $supplement
     */
    public function __construct(array $supplement = array())
    {
        $this
            ->setSupplement($supplement);
    }
    /**
     * Get Supplement value
     * @return \StructType\Supplement[]|null
     */
    public function getSupplement()
    {
        return $this->Supplement;
    }
    /**
     * Set Supplement value
     * @throws \InvalidArgumentException
     * @param \StructType\Supplement[] $supplement
     * @return \ArrayType\ArrayOfHotelRatePlanTypeSupplement
     */
    public function setSupplement(array $supplement = array())
    {
        foreach ($supplement as $arrayOfHotelRatePlanTypeSupplementSupplementItem) {
            // validation for constraint: itemType
            if (!$arrayOfHotelRatePlanTypeSupplementSupplementItem instanceof \StructType\Supplement) {
                throw new \InvalidArgumentException(sprintf('The Supplement property can only contain items of \StructType\Supplement, "%s" given', is_object($arrayOfHotelRatePlanTypeSupplementSupplementItem) ? get_class($arrayOfHotelRatePlanTypeSupplementSupplementItem) : gettype($arrayOfHotelRatePlanTypeSupplementSupplementItem)), __LINE__);
            }
        }
        $this->Supplement = $supplement;
        return $this;
    }
    /**
     * Add item to Supplement value
     * @throws \InvalidArgumentException
     * @param \StructType\Supplement $item
     * @return \ArrayType\ArrayOfHotelRatePlanTypeSupplement
     */
    public function addToSupplement(\StructType\Supplement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Supplement) {
            throw new \InvalidArgumentException(sprintf('The Supplement property can only contain items of \StructType\Supplement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Supplement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Supplement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Supplement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Supplement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Supplement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Supplement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Supplement
     */
    public function getAttributeName()
    {
        return 'Supplement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHotelRatePlanTypeSupplement
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
