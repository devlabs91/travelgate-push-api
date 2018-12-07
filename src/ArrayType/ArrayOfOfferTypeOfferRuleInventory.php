<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferTypeOfferRuleInventory ArrayType
 * @subpackage Arrays
 */
class ArrayOfOfferTypeOfferRuleInventory extends AbstractStructArrayBase
{
    /**
     * The Inventory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Inventory[]
     */
    public $Inventory;
    /**
     * Constructor method for ArrayOfOfferTypeOfferRuleInventory
     * @uses ArrayOfOfferTypeOfferRuleInventory::setInventory()
     * @param \Devlabs91\TravelgatePushApi\StructType\Inventory[] $inventory
     */
    public function __construct(array $inventory = array())
    {
        $this
            ->setInventory($inventory);
    }
    /**
     * Get Inventory value
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory[]|null
     */
    public function getInventory()
    {
        return $this->Inventory;
    }
    /**
     * Set Inventory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Inventory[] $inventory
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory
     */
    public function setInventory(array $inventory = array())
    {
        foreach ($inventory as $arrayOfOfferTypeOfferRuleInventoryInventoryItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferTypeOfferRuleInventoryInventoryItem instanceof \Devlabs91\TravelgatePushApi\StructType\Inventory) {
                throw new \InvalidArgumentException(sprintf('The Inventory property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Inventory, "%s" given', is_object($arrayOfOfferTypeOfferRuleInventoryInventoryItem) ? get_class($arrayOfOfferTypeOfferRuleInventoryInventoryItem) : gettype($arrayOfOfferTypeOfferRuleInventoryInventoryItem)), __LINE__);
            }
        }
        $this->Inventory = $inventory;
        return $this;
    }
    /**
     * Add item to Inventory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Inventory $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory
     */
    public function addToInventory(\Devlabs91\TravelgatePushApi\StructType\Inventory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Inventory) {
            throw new \InvalidArgumentException(sprintf('The Inventory property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Inventory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Inventory[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Inventory|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Inventory
     */
    public function getAttributeName()
    {
        return 'Inventory';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfOfferTypeOfferRuleInventory
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
