<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRatePlanCandidatesTypeRatePlanCandidate ArrayType
 * @subpackage Arrays
 */
class ArrayOfRatePlanCandidatesTypeRatePlanCandidate extends AbstractStructArrayBase
{
    /**
     * The RatePlanCandidate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RatePlanCandidate[]
     */
    public $RatePlanCandidate;
    /**
     * Constructor method for ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     * @uses ArrayOfRatePlanCandidatesTypeRatePlanCandidate::setRatePlanCandidate()
     * @param \StructType\RatePlanCandidate[] $ratePlanCandidate
     */
    public function __construct(array $ratePlanCandidate = array())
    {
        $this
            ->setRatePlanCandidate($ratePlanCandidate);
    }
    /**
     * Get RatePlanCandidate value
     * @return \StructType\RatePlanCandidate[]|null
     */
    public function getRatePlanCandidate()
    {
        return $this->RatePlanCandidate;
    }
    /**
     * Set RatePlanCandidate value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlanCandidate[] $ratePlanCandidate
     * @return \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public function setRatePlanCandidate(array $ratePlanCandidate = array())
    {
        foreach ($ratePlanCandidate as $arrayOfRatePlanCandidatesTypeRatePlanCandidateRatePlanCandidateItem) {
            // validation for constraint: itemType
            if (!$arrayOfRatePlanCandidatesTypeRatePlanCandidateRatePlanCandidateItem instanceof \StructType\RatePlanCandidate) {
                throw new \InvalidArgumentException(sprintf('The RatePlanCandidate property can only contain items of \StructType\RatePlanCandidate, "%s" given', is_object($arrayOfRatePlanCandidatesTypeRatePlanCandidateRatePlanCandidateItem) ? get_class($arrayOfRatePlanCandidatesTypeRatePlanCandidateRatePlanCandidateItem) : gettype($arrayOfRatePlanCandidatesTypeRatePlanCandidateRatePlanCandidateItem)), __LINE__);
            }
        }
        $this->RatePlanCandidate = $ratePlanCandidate;
        return $this;
    }
    /**
     * Add item to RatePlanCandidate value
     * @throws \InvalidArgumentException
     * @param \StructType\RatePlanCandidate $item
     * @return \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
     */
    public function addToRatePlanCandidate(\StructType\RatePlanCandidate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RatePlanCandidate) {
            throw new \InvalidArgumentException(sprintf('The RatePlanCandidate property can only contain items of \StructType\RatePlanCandidate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlanCandidate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RatePlanCandidate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RatePlanCandidate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RatePlanCandidate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RatePlanCandidate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RatePlanCandidate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RatePlanCandidate
     */
    public function getAttributeName()
    {
        return 'RatePlanCandidate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRatePlanCandidatesTypeRatePlanCandidate
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
