<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\Phone[]
     */
    public $Phone;
    /**
     * Constructor method for ArrayOfPhonesTypePhone
     * @uses ArrayOfPhonesTypePhone::setPhone()
     * @param \Devlabs91\TravelgatePushApi\StructType\Phone[] $phone
     */
    public function __construct(array $phone = array())
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Phone[] $phone
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone
     */
    public function setPhone(array $phone = array())
    {
        foreach ($phone as $arrayOfPhonesTypePhonePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhonesTypePhonePhoneItem instanceof \Devlabs91\TravelgatePushApi\StructType\Phone) {
                throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Phone, "%s" given', is_object($arrayOfPhonesTypePhonePhoneItem) ? get_class($arrayOfPhonesTypePhonePhoneItem) : gettype($arrayOfPhonesTypePhonePhoneItem)), __LINE__);
            }
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Phone $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone
     */
    public function addToPhone(\Devlabs91\TravelgatePushApi\StructType\Phone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Phone) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Phone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Phone|null
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
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone
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
