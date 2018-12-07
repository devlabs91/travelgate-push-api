<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcceptedPaymentsTypeAcceptedPayment ArrayType
 * @subpackage Arrays
 */
class ArrayOfAcceptedPaymentsTypeAcceptedPayment extends AbstractStructArrayBase
{
    /**
     * The AcceptedPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AcceptedPayment[]
     */
    public $AcceptedPayment;
    /**
     * Constructor method for ArrayOfAcceptedPaymentsTypeAcceptedPayment
     * @uses ArrayOfAcceptedPaymentsTypeAcceptedPayment::setAcceptedPayment()
     * @param \StructType\AcceptedPayment[] $acceptedPayment
     */
    public function __construct(array $acceptedPayment = array())
    {
        $this
            ->setAcceptedPayment($acceptedPayment);
    }
    /**
     * Get AcceptedPayment value
     * @return \StructType\AcceptedPayment[]|null
     */
    public function getAcceptedPayment()
    {
        return $this->AcceptedPayment;
    }
    /**
     * Set AcceptedPayment value
     * @throws \InvalidArgumentException
     * @param \StructType\AcceptedPayment[] $acceptedPayment
     * @return \ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment
     */
    public function setAcceptedPayment(array $acceptedPayment = array())
    {
        foreach ($acceptedPayment as $arrayOfAcceptedPaymentsTypeAcceptedPaymentAcceptedPaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcceptedPaymentsTypeAcceptedPaymentAcceptedPaymentItem instanceof \StructType\AcceptedPayment) {
                throw new \InvalidArgumentException(sprintf('The AcceptedPayment property can only contain items of \StructType\AcceptedPayment, "%s" given', is_object($arrayOfAcceptedPaymentsTypeAcceptedPaymentAcceptedPaymentItem) ? get_class($arrayOfAcceptedPaymentsTypeAcceptedPaymentAcceptedPaymentItem) : gettype($arrayOfAcceptedPaymentsTypeAcceptedPaymentAcceptedPaymentItem)), __LINE__);
            }
        }
        $this->AcceptedPayment = $acceptedPayment;
        return $this;
    }
    /**
     * Add item to AcceptedPayment value
     * @throws \InvalidArgumentException
     * @param \StructType\AcceptedPayment $item
     * @return \ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment
     */
    public function addToAcceptedPayment(\StructType\AcceptedPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcceptedPayment) {
            throw new \InvalidArgumentException(sprintf('The AcceptedPayment property can only contain items of \StructType\AcceptedPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcceptedPayment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcceptedPayment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcceptedPayment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcceptedPayment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcceptedPayment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcceptedPayment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcceptedPayment
     */
    public function getAttributeName()
    {
        return 'AcceptedPayment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAcceptedPaymentsTypeAcceptedPayment
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
