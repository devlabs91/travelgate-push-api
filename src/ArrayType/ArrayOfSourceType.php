<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSourceType ArrayType
 * @subpackage Arrays
 */
class ArrayOfSourceType extends AbstractStructArrayBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\SourceType[]
     */
    public $Source;
    /**
     * Constructor method for ArrayOfSourceType
     * @uses ArrayOfSourceType::setSource()
     * @param \Devlabs91\TravelgatePushApi\StructType\SourceType[] $source
     */
    public function __construct(array $source = array())
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType[]|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\SourceType[] $source
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
     */
    public function setSource(array $source = array())
    {
        foreach ($source as $arrayOfSourceTypeSourceItem) {
            // validation for constraint: itemType
            if (!$arrayOfSourceTypeSourceItem instanceof \Devlabs91\TravelgatePushApi\StructType\SourceType) {
                throw new \InvalidArgumentException(sprintf('The Source property can only contain items of \Devlabs91\TravelgatePushApi\StructType\SourceType, "%s" given', is_object($arrayOfSourceTypeSourceItem) ? get_class($arrayOfSourceTypeSourceItem) : gettype($arrayOfSourceTypeSourceItem)), __LINE__);
            }
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Add item to Source value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\SourceType $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
     */
    public function addToSource(\Devlabs91\TravelgatePushApi\StructType\SourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\SourceType) {
            throw new \InvalidArgumentException(sprintf('The Source property can only contain items of \Devlabs91\TravelgatePushApi\StructType\SourceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Source[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Source
     */
    public function getAttributeName()
    {
        return 'Source';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
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
