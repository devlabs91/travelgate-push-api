<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBoolean ArrayType
 * @subpackage Arrays
 */
class ArrayOfBoolean extends AbstractStructArrayBase
{
    /**
     * The OperationSchedule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var bool[]
     */
    public $OperationSchedule;
    /**
     * Constructor method for ArrayOfBoolean
     * @uses ArrayOfBoolean::setOperationSchedule()
     * @param bool[] $operationSchedule
     */
    public function __construct(array $operationSchedule = array())
    {
        $this
            ->setOperationSchedule($operationSchedule);
    }
    /**
     * Get OperationSchedule value
     * @return bool[]|null
     */
    public function getOperationSchedule()
    {
        return $this->OperationSchedule;
    }
    /**
     * Set OperationSchedule value
     * @throws \InvalidArgumentException
     * @param bool[] $operationSchedule
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean
     */
    public function setOperationSchedule(array $operationSchedule = array())
    {
        foreach ($operationSchedule as $arrayOfBooleanOperationScheduleItem) {
            // validation for constraint: itemType
            if (!is_bool($arrayOfBooleanOperationScheduleItem)) {
                throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of boolean, "%s" given', is_object($arrayOfBooleanOperationScheduleItem) ? get_class($arrayOfBooleanOperationScheduleItem) : gettype($arrayOfBooleanOperationScheduleItem)), __LINE__);
            }
        }
        $this->OperationSchedule = $operationSchedule;
        return $this;
    }
    /**
     * Add item to OperationSchedule value
     * @throws \InvalidArgumentException
     * @param bool $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean
     */
    public function addToOperationSchedule($item)
    {
        // validation for constraint: itemType
        if (!is_bool($item)) {
            throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of boolean, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationSchedule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return bool|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return bool|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return bool|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return bool|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return bool|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OperationSchedule
     */
    public function getAttributeName()
    {
        return 'OperationSchedule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean
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
