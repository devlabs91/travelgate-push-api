<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhonesTypePhone ArrayType
 * @subpackage Arrays
 */
class ArrayOfPhonesTypePhone extends AbstractStructArrayBase
{
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Phone[]
     */
    public $Phone;
    /**
     * Constructor method for ArrayOfPhonesTypePhone
     * @uses ArrayOfPhonesTypePhone::setPhone()
     * @param \StructType\Phone[] $phone
     */
    public function __construct(array $phone = array())
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \StructType\Phone[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \StructType\Phone[] $phone
     * @return \ArrayType\ArrayOfPhonesTypePhone
     */
    public function setPhone(array $phone = array())
    {
        foreach ($phone as $arrayOfPhonesTypePhonePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhonesTypePhonePhoneItem instanceof \StructType\Phone) {
                throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \StructType\Phone, "%s" given', is_object($arrayOfPhonesTypePhonePhoneItem) ? get_class($arrayOfPhonesTypePhonePhoneItem) : gettype($arrayOfPhonesTypePhonePhoneItem)), __LINE__);
            }
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \StructType\Phone $item
     * @return \ArrayType\ArrayOfPhonesTypePhone
     */
    public function addToPhone(\StructType\Phone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Phone) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \StructType\Phone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Phone|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Phone|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Phone|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Phone|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Phone|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Phone
     */
    public function getAttributeName()
    {
        return 'Phone';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfPhonesTypePhone
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
