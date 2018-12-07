<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt[]
     */
    public $BaseByGuestAmt;
    /**
     * Constructor method for ArrayOfRateUploadTypeBaseByGuestAmt
     * @uses ArrayOfRateUploadTypeBaseByGuestAmt::setBaseByGuestAmt()
     * @param \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt[] $baseByGuestAmt
     */
    public function __construct(array $baseByGuestAmt = array())
    {
        $this
            ->setBaseByGuestAmt($baseByGuestAmt);
    }
    /**
     * Get BaseByGuestAmt value
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt[]|null
     */
    public function getBaseByGuestAmt()
    {
        return $this->BaseByGuestAmt;
    }
    /**
     * Set BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt[] $baseByGuestAmt
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt = array())
    {
        foreach ($baseByGuestAmt as $arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) {
            // validation for constraint: itemType
            if (!$arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem instanceof \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt) {
                throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt, "%s" given', is_object($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) ? get_class($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem) : gettype($arrayOfRateUploadTypeBaseByGuestAmtBaseByGuestAmtItem)), __LINE__);
            }
        }
        $this->BaseByGuestAmt = $baseByGuestAmt;
        return $this;
    }
    /**
     * Add item to BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
     */
    public function addToBaseByGuestAmt(\Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt) {
            throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BaseByGuestAmt[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt|null
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
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt
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
