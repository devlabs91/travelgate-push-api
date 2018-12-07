<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContactInfoRootType ArrayType
 * @subpackage Arrays
 */
class ArrayOfContactInfoRootType extends AbstractStructArrayBase
{
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType[]
     */
    public $ContactInfo;
    /**
     * Constructor method for ArrayOfContactInfoRootType
     * @uses ArrayOfContactInfoRootType::setContactInfo()
     * @param \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType[] $contactInfo
     */
    public function __construct(array $contactInfo = array())
    {
        $this
            ->setContactInfo($contactInfo);
    }
    /**
     * Get ContactInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType[]|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType[] $contactInfo
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType
     */
    public function setContactInfo(array $contactInfo = array())
    {
        foreach ($contactInfo as $arrayOfContactInfoRootTypeContactInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactInfoRootTypeContactInfoItem instanceof \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType) {
                throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType, "%s" given', is_object($arrayOfContactInfoRootTypeContactInfoItem) ? get_class($arrayOfContactInfoRootTypeContactInfoItem) : gettype($arrayOfContactInfoRootTypeContactInfoItem)), __LINE__);
            }
        }
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Add item to ContactInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType
     */
    public function addToContactInfo(\Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType) {
            throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoRootType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContactInfo
     */
    public function getAttributeName()
    {
        return 'ContactInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType
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
