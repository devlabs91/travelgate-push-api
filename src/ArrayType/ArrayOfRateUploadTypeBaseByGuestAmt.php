<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRateUploadTypeBaseByGuestAmt ArrayType
 * @subpackage Arrays
 */
class ArrayOfRateUploadTypeBaseByGuestAmt extends AbstractStructArrayBase
{
    /**
     * The BaseByGuestAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BaseByGuestAmt[]
     */
    public $BaseByGuestAmt;
    /**
     * Constructor method for ArrayOfRateUploadTypeBaseByGuestAmt
     * @uses ArrayOfRateUploadTypeBaseByGuestAmt::setBaseByGuestAmt()
     * @param \StructType\BaseByGuestAmt[] $baseByGuestAmt
     */
    public function __construct(array $baseByGuestAmt = array())
    {
        $this
            ->setBaseByGuestAmt($baseByGuestAmt);
    }
    /**
     * Get BaseByGuestAmt value
     * @return \StructType\BaseByGuestAmt[]|null
     */
    public function getBaseByGuestAmt()
    {
        return $this->BaseByGuestAmt;
    }
    /**
     * Set BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \StructType\BaseByGuestAmt[] $baseByGuestAmt
     * @return \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt = array())
    {
        foreach ($baseByGuestAmt as $arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) {
            // validation for constraint: itemType
            if (!$arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem instanceof \StructType\BaseByGuestAmt) {
                throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \StructType\BaseByGuestAmt, "%s" given', is_object($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) ? get_class($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) : gettype($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem)), __LINE__);
            }
        }
        $this->BaseByGuestAmt = $baseByGuestAmt;
        return $this;
    }
    /**
     * Add item to BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \StructType\BaseByGuestAmt $item
     * @return \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
     */
    public function addToBaseByGuestAmt(\StructType\BaseByGuestAmt $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BaseByGuestAmt) {
            throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \StructType\BaseByGuestAmt, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BaseByGuestAmt[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BaseByGuestAmt|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BaseByGuestAmt|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BaseByGuestAmt|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BaseByGuestAmt|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BaseByGuestAmt|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BaseByGuestAmt
     */
    public function getAttributeName()
    {
        return 'BaseByGuestAmt';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
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
