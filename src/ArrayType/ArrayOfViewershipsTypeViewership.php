<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViewershipsTypeViewership ArrayType
 * @subpackage Arrays
 */
class ArrayOfViewershipsTypeViewership extends AbstractStructArrayBase
{
    /**
     * The Viewership
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Viewership[]
     */
    public $Viewership;
    /**
     * Constructor method for ArrayOfViewershipsTypeViewership
     * @uses ArrayOfViewershipsTypeViewership::setViewership()
     * @param \Devlabs91\TravelgatePushApi\StructType\Viewership[] $viewership
     */
    public function __construct(array $viewership = array())
    {
        $this
            ->setViewership($viewership);
    }
    /**
     * Get Viewership value
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership[]|null
     */
    public function getViewership()
    {
        return $this->Viewership;
    }
    /**
     * Set Viewership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Viewership[] $viewership
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfViewershipsTypeViewership
     */
    public function setViewership(array $viewership = array())
    {
        foreach ($viewership as $arrayOfViewershipsTypeViewershipViewershipItem) {
            // validation for constraint: itemType
            if (!$arrayOfViewershipsTypeViewershipViewershipItem instanceof \Devlabs91\TravelgatePushApi\StructType\Viewership) {
                throw new \InvalidArgumentException(sprintf('The Viewership property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Viewership, "%s" given', is_object($arrayOfViewershipsTypeViewershipViewershipItem) ? get_class($arrayOfViewershipsTypeViewershipViewershipItem) : gettype($arrayOfViewershipsTypeViewershipViewershipItem)), __LINE__);
            }
        }
        $this->Viewership = $viewership;
        return $this;
    }
    /**
     * Add item to Viewership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Viewership $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfViewershipsTypeViewership
     */
    public function addToViewership(\Devlabs91\TravelgatePushApi\StructType\Viewership $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Viewership) {
            throw new \InvalidArgumentException(sprintf('The Viewership property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Viewership, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Viewership[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Viewership|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Viewership
     */
    public function getAttributeName()
    {
        return 'Viewership';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfViewershipsTypeViewership
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
