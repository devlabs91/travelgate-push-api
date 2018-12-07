<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comment StructType
 * @subpackage Structs
 */
class Comment extends ParagraphType
{
    /**
     * The CommentOriginatorCode
     * @var string
     */
    public $CommentOriginatorCode;
    /**
     * Constructor method for Comment
     * @uses Comment::setCommentOriginatorCode()
     * @param string $commentOriginatorCode
     */
    public function __construct($commentOriginatorCode = null)
    {
        $this
            ->setCommentOriginatorCode($commentOriginatorCode);
    }
    /**
     * Get CommentOriginatorCode value
     * @return string|null
     */
    public function getCommentOriginatorCode()
    {
        return $this->CommentOriginatorCode;
    }
    /**
     * Set CommentOriginatorCode value
     * @param string $commentOriginatorCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment
     */
    public function setCommentOriginatorCode($commentOriginatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($commentOriginatorCode) && !is_string($commentOriginatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commentOriginatorCode)), __LINE__);
        }
        $this->CommentOriginatorCode = $commentOriginatorCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Comment
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
