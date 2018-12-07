<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRefPointsTypeRefPoint ArrayType
 * @subpackage Arrays
 */
class ArrayOfRefPointsTypeRefPoint extends AbstractStructArrayBase
{
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RefPoint[]
     */
    public $RefPoint;
    /**
     * Constructor method for ArrayOfRefPointsTypeRefPoint
     * @uses ArrayOfRefPointsTypeRefPoint::setRefPoint()
     * @param \Devlabs91\TravelgatePushApi\StructType\RefPoint[] $refPoint
     */
    public function __construct(array $refPoint = array())
    {
        $this
            ->setRefPoint($refPoint);
    }
    /**
     * Get RefPoint value
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint[]|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RefPoint[] $refPoint
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint
     */
    public function setRefPoint(array $refPoint = array())
    {
        foreach ($refPoint as $arrayOfRefPointsTypeRefPointRefPointItem) {
            // validation for constraint: itemType
            if (!$arrayOfRefPointsTypeRefPointRefPointItem instanceof \Devlabs91\TravelgatePushApi\StructType\RefPoint) {
                throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RefPoint, "%s" given', is_object($arrayOfRefPointsTypeRefPointRefPointItem) ? get_class($arrayOfRefPointsTypeRefPointRefPointItem) : gettype($arrayOfRefPointsTypeRefPointRefPointItem)), __LINE__);
            }
        }
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Add item to RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\RefPoint $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint
     */
    public function addToRefPoint(\Devlabs91\TravelgatePushApi\StructType\RefPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\RefPoint) {
            throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\TravelgatePushApi\StructType\RefPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefPoint[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\RefPoint|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RefPoint
     */
    public function getAttributeName()
    {
        return 'RefPoint';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint
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
