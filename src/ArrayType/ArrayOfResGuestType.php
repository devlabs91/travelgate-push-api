<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResGuestType ArrayType
 * @subpackage Arrays
 */
class ArrayOfResGuestType extends AbstractStructArrayBase
{
    /**
     * The ResGuest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResGuestType[]
     */
    public $ResGuest;
    /**
     * Constructor method for ArrayOfResGuestType
     * @uses ArrayOfResGuestType::setResGuest()
     * @param \StructType\ResGuestType[] $resGuest
     */
    public function __construct(array $resGuest = array())
    {
        $this
            ->setResGuest($resGuest);
    }
    /**
     * Get ResGuest value
     * @return \StructType\ResGuestType[]|null
     */
    public function getResGuest()
    {
        return $this->ResGuest;
    }
    /**
     * Set ResGuest value
     * @throws \InvalidArgumentException
     * @param \StructType\ResGuestType[] $resGuest
     * @return \ArrayType\ArrayOfResGuestType
     */
    public function setResGuest(array $resGuest = array())
    {
        foreach ($resGuest as $arrayOfResGuestTypeResGuestItem) {
            // validation for constraint: itemType
            if (!$arrayOfResGuestTypeResGuestItem instanceof \StructType\ResGuestType) {
                throw new \InvalidArgumentException(sprintf('The ResGuest property can only contain items of \StructType\ResGuestType, "%s" given', is_object($arrayOfResGuestTypeResGuestItem) ? get_class($arrayOfResGuestTypeResGuestItem) : gettype($arrayOfResGuestTypeResGuestItem)), __LINE__);
            }
        }
        $this->ResGuest = $resGuest;
        return $this;
    }
    /**
     * Add item to ResGuest value
     * @throws \InvalidArgumentException
     * @param \StructType\ResGuestType $item
     * @return \ArrayType\ArrayOfResGuestType
     */
    public function addToResGuest(\StructType\ResGuestType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResGuestType) {
            throw new \InvalidArgumentException(sprintf('The ResGuest property can only contain items of \StructType\ResGuestType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResGuest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ResGuestType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ResGuestType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ResGuestType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ResGuestType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ResGuestType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResGuest
     */
    public function getAttributeName()
    {
        return 'ResGuest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfResGuestType
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
