<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRateUploadTypeAdditionalGuestAmount ArrayType
 * @subpackage Arrays
 */
class ArrayOfRateUploadTypeAdditionalGuestAmount extends AbstractStructArrayBase
{
    /**
     * The AdditionalGuestAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AdditionalGuestAmount[]
     */
    public $AdditionalGuestAmount;
    /**
     * Constructor method for ArrayOfRateUploadTypeAdditionalGuestAmount
     * @uses ArrayOfRateUploadTypeAdditionalGuestAmount::setAdditionalGuestAmount()
     * @param \StructType\AdditionalGuestAmount[] $additionalGuestAmount
     */
    public function __construct(array $additionalGuestAmount = array())
    {
        $this
            ->setAdditionalGuestAmount($additionalGuestAmount);
    }
    /**
     * Get AdditionalGuestAmount value
     * @return \StructType\AdditionalGuestAmount[]|null
     */
    public function getAdditionalGuestAmount()
    {
        return $this->AdditionalGuestAmount;
    }
    /**
     * Set AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalGuestAmount[] $additionalGuestAmount
     * @return \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = array())
    {
        foreach ($additionalGuestAmount as $arrayOfRateUploadTypeAdditionalGuestAmountAdditionalGuestAmountItem) {
            // validation for constraint: itemType
            if (!$arrayOfRateUploadTypeAdditionalGuestAmountAdditionalGuestAmountItem instanceof \StructType\AdditionalGuestAmount) {
                throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of \StructType\AdditionalGuestAmount, "%s" given', is_object($arrayOfRateUploadTypeAdditionalGuestAmountAdditionalGuestAmountItem) ? get_class($arrayOfRateUploadTypeAdditionalGuestAmountAdditionalGuestAmountItem) : gettype($arrayOfRateUploadTypeAdditionalGuestAmountAdditionalGuestAmountItem)), __LINE__);
            }
        }
        $this->AdditionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
    /**
     * Add item to AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalGuestAmount $item
     * @return \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount
     */
    public function addToAdditionalGuestAmount(\StructType\AdditionalGuestAmount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalGuestAmount) {
            throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of \StructType\AdditionalGuestAmount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalGuestAmount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AdditionalGuestAmount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AdditionalGuestAmount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AdditionalGuestAmount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AdditionalGuestAmount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AdditionalGuestAmount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalGuestAmount
     */
    public function getAttributeName()
    {
        return 'AdditionalGuestAmount';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount
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
