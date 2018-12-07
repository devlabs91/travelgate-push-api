<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGuaranteeTypeGuaranteeAccepted ArrayType
 * @subpackage Arrays
 */
class ArrayOfGuaranteeTypeGuaranteeAccepted extends AbstractStructArrayBase
{
    /**
     * The GuaranteeAccepted
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted[]
     */
    public $GuaranteeAccepted;
    /**
     * Constructor method for ArrayOfGuaranteeTypeGuaranteeAccepted
     * @uses ArrayOfGuaranteeTypeGuaranteeAccepted::setGuaranteeAccepted()
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted[] $guaranteeAccepted
     */
    public function __construct(array $guaranteeAccepted = array())
    {
        $this
            ->setGuaranteeAccepted($guaranteeAccepted);
    }
    /**
     * Get GuaranteeAccepted value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted[]|null
     */
    public function getGuaranteeAccepted()
    {
        return $this->GuaranteeAccepted;
    }
    /**
     * Set GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted[] $guaranteeAccepted
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted = array())
    {
        foreach ($guaranteeAccepted as $arrayOfGuaranteeTypeGuaranteeAcceptedGuaranteeAcceptedItem) {
            // validation for constraint: itemType
            if (!$arrayOfGuaranteeTypeGuaranteeAcceptedGuaranteeAcceptedItem instanceof \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted) {
                throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted, "%s" given', is_object($arrayOfGuaranteeTypeGuaranteeAcceptedGuaranteeAcceptedItem) ? get_class($arrayOfGuaranteeTypeGuaranteeAcceptedGuaranteeAcceptedItem) : gettype($arrayOfGuaranteeTypeGuaranteeAcceptedGuaranteeAcceptedItem)), __LINE__);
            }
        }
        $this->GuaranteeAccepted = $guaranteeAccepted;
        return $this;
    }
    /**
     * Add item to GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted
     */
    public function addToGuaranteeAccepted(\Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted) {
            throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteeAccepted[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GuaranteeAccepted
     */
    public function getAttributeName()
    {
        return 'GuaranteeAccepted';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted
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
