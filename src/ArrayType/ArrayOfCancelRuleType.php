<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancelRuleType ArrayType
 * @subpackage Arrays
 */
class ArrayOfCancelRuleType extends AbstractStructArrayBase
{
    /**
     * The CancelRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CancelRuleType[]
     */
    public $CancelRule;
    /**
     * Constructor method for ArrayOfCancelRuleType
     * @uses ArrayOfCancelRuleType::setCancelRule()
     * @param \StructType\CancelRuleType[] $cancelRule
     */
    public function __construct(array $cancelRule = array())
    {
        $this
            ->setCancelRule($cancelRule);
    }
    /**
     * Get CancelRule value
     * @return \StructType\CancelRuleType[]|null
     */
    public function getCancelRule()
    {
        return $this->CancelRule;
    }
    /**
     * Set CancelRule value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelRuleType[] $cancelRule
     * @return \ArrayType\ArrayOfCancelRuleType
     */
    public function setCancelRule(array $cancelRule = array())
    {
        foreach ($cancelRule as $arrayOfCancelRuleTypeCancelRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancelRuleTypeCancelRuleItem instanceof \StructType\CancelRuleType) {
                throw new \InvalidArgumentException(sprintf('The CancelRule property can only contain items of \StructType\CancelRuleType, "%s" given', is_object($arrayOfCancelRuleTypeCancelRuleItem) ? get_class($arrayOfCancelRuleTypeCancelRuleItem) : gettype($arrayOfCancelRuleTypeCancelRuleItem)), __LINE__);
            }
        }
        $this->CancelRule = $cancelRule;
        return $this;
    }
    /**
     * Add item to CancelRule value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelRuleType $item
     * @return \ArrayType\ArrayOfCancelRuleType
     */
    public function addToCancelRule(\StructType\CancelRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CancelRuleType) {
            throw new \InvalidArgumentException(sprintf('The CancelRule property can only contain items of \StructType\CancelRuleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CancelRuleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CancelRuleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CancelRuleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CancelRuleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CancelRuleType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CancelRule
     */
    public function getAttributeName()
    {
        return 'CancelRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfCancelRuleType
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
