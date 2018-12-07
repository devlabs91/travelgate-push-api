<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddressesTypeAddress ArrayType
 * @subpackage Arrays
 */
class ArrayOfAddressesTypeAddress extends AbstractStructArrayBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Address[]
     */
    public $Address;
    /**
     * Constructor method for ArrayOfAddressesTypeAddress
     * @uses ArrayOfAddressesTypeAddress::setAddress()
     * @param \StructType\Address[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \StructType\Address[] $address
     * @return \ArrayType\ArrayOfAddressesTypeAddress
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $arrayOfAddressesTypeAddressAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressesTypeAddressAddressItem instanceof \StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \StructType\Address, "%s" given', is_object($arrayOfAddressesTypeAddressAddressItem) ? get_class($arrayOfAddressesTypeAddressAddressItem) : gettype($arrayOfAddressesTypeAddressAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \StructType\Address $item
     * @return \ArrayType\ArrayOfAddressesTypeAddress
     */
    public function addToAddress(\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Address|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Address|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Address|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Address|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Address|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Address
     */
    public function getAttributeName()
    {
        return 'Address';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAddressesTypeAddress
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
