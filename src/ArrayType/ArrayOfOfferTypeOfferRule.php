<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferTypeOfferRule ArrayType
 * @subpackage Arrays
 */
class ArrayOfOfferTypeOfferRule extends AbstractStructArrayBase
{
    /**
     * The OfferRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OfferRule[]
     */
    public $OfferRule;
    /**
     * Constructor method for ArrayOfOfferTypeOfferRule
     * @uses ArrayOfOfferTypeOfferRule::setOfferRule()
     * @param \Devlabs91\TravelgatePushApi\StructType\OfferRule[] $offerRule
     */
    public function __construct(array $offerRule = array())
    {
        $this
            ->setOfferRule($offerRule);
    }
    /**
     * Get OfferRule value
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule[]|null
     */
    public function getOfferRule()
    {
        return $this->OfferRule;
    }
    /**
     * Set OfferRule value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OfferRule[] $offerRule
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule
     */
    public function setOfferRule(array $offerRule = array())
    {
        foreach ($offerRule as $arrayOfOfferTypeOfferRuleOfferRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferTypeOfferRuleOfferRuleItem instanceof \Devlabs91\TravelgatePushApi\StructType\OfferRule) {
                throw new \InvalidArgumentException(sprintf('The OfferRule property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OfferRule, "%s" given', is_object($arrayOfOfferTypeOfferRuleOfferRuleItem) ? get_class($arrayOfOfferTypeOfferRuleOfferRuleItem) : gettype($arrayOfOfferTypeOfferRuleOfferRuleItem)), __LINE__);
            }
        }
        $this->OfferRule = $offerRule;
        return $this;
    }
    /**
     * Add item to OfferRule value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OfferRule $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule
     */
    public function addToOfferRule(\Devlabs91\TravelgatePushApi\StructType\OfferRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\OfferRule) {
            throw new \InvalidArgumentException(sprintf('The OfferRule property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OfferRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OfferRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\OfferRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferRule
     */
    public function getAttributeName()
    {
        return 'OfferRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRule
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
