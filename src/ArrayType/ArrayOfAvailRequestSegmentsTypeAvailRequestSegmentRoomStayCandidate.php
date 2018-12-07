<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for
 * ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate ArrayType
 * @subpackage Arrays
 */
class ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate extends AbstractStructArrayBase
{
    /**
     * The RoomStayCandidate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RoomStayCandidate[]
     */
    public $RoomStayCandidate;
    /**
     * Constructor method for
     * ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
     * @uses ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate::setRoomStayCandidate()
     * @param \StructType\RoomStayCandidate[] $roomStayCandidate
     */
    public function __construct(array $roomStayCandidate = array())
    {
        $this
            ->setRoomStayCandidate($roomStayCandidate);
    }
    /**
     * Get RoomStayCandidate value
     * @return \StructType\RoomStayCandidate[]|null
     */
    public function getRoomStayCandidate()
    {
        return $this->RoomStayCandidate;
    }
    /**
     * Set RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomStayCandidate[] $roomStayCandidate
     * @return \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
     */
    public function setRoomStayCandidate(array $roomStayCandidate = array())
    {
        foreach ($roomStayCandidate as $arrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidateRoomStayCandidateItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidateRoomStayCandidateItem instanceof \StructType\RoomStayCandidate) {
                throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of \StructType\RoomStayCandidate, "%s" given', is_object($arrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidateRoomStayCandidateItem) ? get_class($arrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidateRoomStayCandidateItem) : gettype($arrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidateRoomStayCandidateItem)), __LINE__);
            }
        }
        $this->RoomStayCandidate = $roomStayCandidate;
        return $this;
    }
    /**
     * Add item to RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomStayCandidate $item
     * @return \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
     */
    public function addToRoomStayCandidate(\StructType\RoomStayCandidate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RoomStayCandidate) {
            throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of \StructType\RoomStayCandidate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomStayCandidate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RoomStayCandidate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RoomStayCandidate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RoomStayCandidate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RoomStayCandidate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RoomStayCandidate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoomStayCandidate
     */
    public function getAttributeName()
    {
        return 'RoomStayCandidate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAvailRequestSegmentsTypeAvailRequestSegmentRoomStayCandidate
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
