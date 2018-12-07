<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommentTypeComment ArrayType
 * @subpackage Arrays
 */
class ArrayOfCommentTypeComment extends AbstractStructArrayBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Comment[]
     */
    public $Comment;
    /**
     * Constructor method for ArrayOfCommentTypeComment
     * @uses ArrayOfCommentTypeComment::setComment()
     * @param \Devlabs91\TravelgatePushApi\StructType\Comment[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Comment[] $comment
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCommentTypeComment
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $arrayOfCommentTypeCommentCommentItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommentTypeCommentCommentItem instanceof \Devlabs91\TravelgatePushApi\StructType\Comment) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Comment, "%s" given', is_object($arrayOfCommentTypeCommentCommentItem) ? get_class($arrayOfCommentTypeCommentCommentItem) : gettype($arrayOfCommentTypeCommentCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Comment $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCommentTypeComment
     */
    public function addToComment(\Devlabs91\TravelgatePushApi\StructType\Comment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Comment) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Comment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Comment
     */
    public function getAttributeName()
    {
        return 'Comment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCommentTypeComment
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
