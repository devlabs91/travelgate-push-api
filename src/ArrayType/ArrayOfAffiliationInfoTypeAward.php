<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAffiliationInfoTypeAward ArrayType
 * @subpackage Arrays
 */
class ArrayOfAffiliationInfoTypeAward extends AbstractStructArrayBase
{
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Award[]
     */
    public $Award;
    /**
     * Constructor method for ArrayOfAffiliationInfoTypeAward
     * @uses ArrayOfAffiliationInfoTypeAward::setAward()
     * @param \Devlabs91\TravelgatePushApi\StructType\Award[] $award
     */
    public function __construct(array $award = array())
    {
        $this
            ->setAward($award);
    }
    /**
     * Get Award value
     * @return \Devlabs91\TravelgatePushApi\StructType\Award[]|null
     */
    public function getAward()
    {
        return $this->Award;
    }
    /**
     * Set Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Award[] $award
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $arrayOfAffiliationInfoTypeAwardAwardItem) {
            // validation for constraint: itemType
            if (!$arrayOfAffiliationInfoTypeAwardAwardItem instanceof \Devlabs91\TravelgatePushApi\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Award, "%s" given', is_object($arrayOfAffiliationInfoTypeAwardAwardItem) ? get_class($arrayOfAffiliationInfoTypeAwardAwardItem) : gettype($arrayOfAffiliationInfoTypeAwardAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Award $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward
     */
    public function addToAward(\Devlabs91\TravelgatePushApi\StructType\Award $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Award) {
            throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Award, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Award[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Award|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Award|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Award|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Award|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Award|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Award
     */
    public function getAttributeName()
    {
        return 'Award';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAffiliationInfoTypeAward
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
