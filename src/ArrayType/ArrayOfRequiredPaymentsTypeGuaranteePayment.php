<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequiredPaymentsTypeGuaranteePayment ArrayType
 * @subpackage Arrays
 */
class ArrayOfRequiredPaymentsTypeGuaranteePayment extends AbstractStructArrayBase
{
    /**
     * The GuaranteePayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\GuaranteePayment[]
     */
    public $GuaranteePayment;
    /**
     * Constructor method for ArrayOfRequiredPaymentsTypeGuaranteePayment
     * @uses ArrayOfRequiredPaymentsTypeGuaranteePayment::setGuaranteePayment()
     * @param \StructType\GuaranteePayment[] $guaranteePayment
     */
    public function __construct(array $guaranteePayment = array())
    {
        $this
            ->setGuaranteePayment($guaranteePayment);
    }
    /**
     * Get GuaranteePayment value
     * @return \StructType\GuaranteePayment[]|null
     */
    public function getGuaranteePayment()
    {
        return $this->GuaranteePayment;
    }
    /**
     * Set GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \StructType\GuaranteePayment[] $guaranteePayment
     * @return \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment
     */
    public function setGuaranteePayment(array $guaranteePayment = array())
    {
        foreach ($guaranteePayment as $arrayOfRequiredPaymentsTypeGuaranteePaymentGuaranteePaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequiredPaymentsTypeGuaranteePaymentGuaranteePaymentItem instanceof \StructType\GuaranteePayment) {
                throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \StructType\GuaranteePayment, "%s" given', is_object($arrayOfRequiredPaymentsTypeGuaranteePaymentGuaranteePaymentItem) ? get_class($arrayOfRequiredPaymentsTypeGuaranteePaymentGuaranteePaymentItem) : gettype($arrayOfRequiredPaymentsTypeGuaranteePaymentGuaranteePaymentItem)), __LINE__);
            }
        }
        $this->GuaranteePayment = $guaranteePayment;
        return $this;
    }
    /**
     * Add item to GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \StructType\GuaranteePayment $item
     * @return \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment
     */
    public function addToGuaranteePayment(\StructType\GuaranteePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GuaranteePayment) {
            throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \StructType\GuaranteePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteePayment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GuaranteePayment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GuaranteePayment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GuaranteePayment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GuaranteePayment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GuaranteePayment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GuaranteePayment
     */
    public function getAttributeName()
    {
        return 'GuaranteePayment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRequiredPaymentsTypeGuaranteePayment
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
