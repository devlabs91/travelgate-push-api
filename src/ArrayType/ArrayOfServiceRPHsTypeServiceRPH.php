<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceRPHsTypeServiceRPH ArrayType
 * @subpackage Arrays
 */
class ArrayOfServiceRPHsTypeServiceRPH extends AbstractStructArrayBase
{
    /**
     * The ServiceRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ServiceRPH[]
     */
    public $ServiceRPH;
    /**
     * Constructor method for ArrayOfServiceRPHsTypeServiceRPH
     * @uses ArrayOfServiceRPHsTypeServiceRPH::setServiceRPH()
     * @param \Devlabs91\TravelgatePushApi\StructType\ServiceRPH[] $serviceRPH
     */
    public function __construct(array $serviceRPH = array())
    {
        $this
            ->setServiceRPH($serviceRPH);
    }
    /**
     * Get ServiceRPH value
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH[]|null
     */
    public function getServiceRPH()
    {
        return $this->ServiceRPH;
    }
    /**
     * Set ServiceRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ServiceRPH[] $serviceRPH
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfServiceRPHsTypeServiceRPH
     */
    public function setServiceRPH(array $serviceRPH = array())
    {
        foreach ($serviceRPH as $arrayOfServiceRPHsTypeServiceRPHServiceRPHItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceRPHsTypeServiceRPHServiceRPHItem instanceof \Devlabs91\TravelgatePushApi\StructType\ServiceRPH) {
                throw new \InvalidArgumentException(sprintf('The ServiceRPH property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ServiceRPH, "%s" given', is_object($arrayOfServiceRPHsTypeServiceRPHServiceRPHItem) ? get_class($arrayOfServiceRPHsTypeServiceRPHServiceRPHItem) : gettype($arrayOfServiceRPHsTypeServiceRPHServiceRPHItem)), __LINE__);
            }
        }
        $this->ServiceRPH = $serviceRPH;
        return $this;
    }
    /**
     * Add item to ServiceRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\ServiceRPH $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfServiceRPHsTypeServiceRPH
     */
    public function addToServiceRPH(\Devlabs91\TravelgatePushApi\StructType\ServiceRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\ServiceRPH) {
            throw new \InvalidArgumentException(sprintf('The ServiceRPH property can only contain items of \Devlabs91\TravelgatePushApi\StructType\ServiceRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceRPH[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\ServiceRPH|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceRPH
     */
    public function getAttributeName()
    {
        return 'ServiceRPH';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfServiceRPHsTypeServiceRPH
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
