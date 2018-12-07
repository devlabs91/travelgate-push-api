<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBoolean1 ArrayType
 * @subpackage Arrays
 */
class ArrayOfBoolean1 extends AbstractStructArrayBase
{
    /**
     * The RecreationDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var bool[]
     */
    public $RecreationDetail;
    /**
     * Constructor method for ArrayOfBoolean1
     * @uses ArrayOfBoolean1::setRecreationDetail()
     * @param bool[] $recreationDetail
     */
    public function __construct(array $recreationDetail = array())
    {
        $this
            ->setRecreationDetail($recreationDetail);
    }
    /**
     * Get RecreationDetail value
     * @return bool[]|null
     */
    public function getRecreationDetail()
    {
        return $this->RecreationDetail;
    }
    /**
     * Set RecreationDetail value
     * @throws \InvalidArgumentException
     * @param bool[] $recreationDetail
     * @return \ArrayType\ArrayOfBoolean1
     */
    public function setRecreationDetail(array $recreationDetail = array())
    {
        foreach ($recreationDetail as $arrayOfBoolean1RecreationDetailItem) {
            // validation for constraint: itemType
            if (!is_bool($arrayOfBoolean1RecreationDetailItem)) {
                throw new \InvalidArgumentException(sprintf('The RecreationDetail property can only contain items of boolean, "%s" given', is_object($arrayOfBoolean1RecreationDetailItem) ? get_class($arrayOfBoolean1RecreationDetailItem) : gettype($arrayOfBoolean1RecreationDetailItem)), __LINE__);
            }
        }
        $this->RecreationDetail = $recreationDetail;
        return $this;
    }
    /**
     * Add item to RecreationDetail value
     * @throws \InvalidArgumentException
     * @param bool $item
     * @return \ArrayType\ArrayOfBoolean1
     */
    public function addToRecreationDetail($item)
    {
        // validation for constraint: itemType
        if (!is_bool($item)) {
            throw new \InvalidArgumentException(sprintf('The RecreationDetail property can only contain items of boolean, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecreationDetail[] = $item;
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
     * @return string RecreationDetail
     */
    public function getAttributeName()
    {
        return 'RecreationDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfBoolean1
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
