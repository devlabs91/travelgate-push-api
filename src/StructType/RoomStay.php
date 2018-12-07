<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStay StructType
 * @subpackage Structs
 */
class RoomStay extends RoomStayType
{
    /**
     * The RoomStayCandidateRPH
     * @var string
     */
    public $RoomStayCandidateRPH;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfCommentTypeComment
     */
    public $Comments;
    /**
     * The ServiceRPHs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfServiceRPHsTypeServiceRPH
     */
    public $ServiceRPHs;
    /**
     * Constructor method for RoomStay
     * @uses RoomStay::setRoomStayCandidateRPH()
     * @uses RoomStay::setComments()
     * @uses RoomStay::setServiceRPHs()
     * @param string $roomStayCandidateRPH
     * @param \ArrayType\ArrayOfCommentTypeComment $comments
     * @param \ArrayType\ArrayOfServiceRPHsTypeServiceRPH $serviceRPHs
     */
    public function __construct($roomStayCandidateRPH = null, \ArrayType\ArrayOfCommentTypeComment $comments = null, \ArrayType\ArrayOfServiceRPHsTypeServiceRPH $serviceRPHs = null)
    {
        $this
            ->setRoomStayCandidateRPH($roomStayCandidateRPH)
            ->setComments($comments)
            ->setServiceRPHs($serviceRPHs);
    }
    /**
     * Get RoomStayCandidateRPH value
     * @return string|null
     */
    public function getRoomStayCandidateRPH()
    {
        return $this->RoomStayCandidateRPH;
    }
    /**
     * Set RoomStayCandidateRPH value
     * @param string $roomStayCandidateRPH
     * @return \StructType\RoomStay
     */
    public function setRoomStayCandidateRPH($roomStayCandidateRPH = null)
    {
        // validation for constraint: string
        if (!is_null($roomStayCandidateRPH) && !is_string($roomStayCandidateRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayCandidateRPH)), __LINE__);
        }
        $this->RoomStayCandidateRPH = $roomStayCandidateRPH;
        return $this;
    }
    /**
     * Get Comments value
     * @return \ArrayType\ArrayOfCommentTypeComment|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \ArrayType\ArrayOfCommentTypeComment $comments
     * @return \StructType\RoomStay
     */
    public function setComments(\ArrayType\ArrayOfCommentTypeComment $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get ServiceRPHs value
     * @return \ArrayType\ArrayOfServiceRPHsTypeServiceRPH|null
     */
    public function getServiceRPHs()
    {
        return $this->ServiceRPHs;
    }
    /**
     * Set ServiceRPHs value
     * @param \ArrayType\ArrayOfServiceRPHsTypeServiceRPH $serviceRPHs
     * @return \StructType\RoomStay
     */
    public function setServiceRPHs(\ArrayType\ArrayOfServiceRPHsTypeServiceRPH $serviceRPHs = null)
    {
        $this->ServiceRPHs = $serviceRPHs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RoomStay
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
