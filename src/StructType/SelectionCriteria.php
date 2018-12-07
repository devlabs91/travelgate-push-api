<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectionCriteria StructType
 * @subpackage Structs
 */
class SelectionCriteria extends AbstractStructBase
{
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The DateType
     * @var string
     */
    public $DateType;
    /**
     * Constructor method for SelectionCriteria
     * @uses SelectionCriteria::setStart()
     * @uses SelectionCriteria::setEnd()
     * @uses SelectionCriteria::setDateType()
     * @param string $start
     * @param string $end
     * @param string $dateType
     */
    public function __construct($start = null, $end = null, $dateType = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setDateType($dateType);
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Devlabs91\TravelgatePushApi\StructType\SelectionCriteria
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Devlabs91\TravelgatePushApi\StructType\SelectionCriteria
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get DateType value
     * @return string|null
     */
    public function getDateType()
    {
        return $this->DateType;
    }
    /**
     * Set DateType value
     * @param string $dateType
     * @return \Devlabs91\TravelgatePushApi\StructType\SelectionCriteria
     */
    public function setDateType($dateType = null)
    {
        // validation for constraint: string
        if (!is_null($dateType) && !is_string($dateType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateType)), __LINE__);
        }
        $this->DateType = $dateType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\SelectionCriteria
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
