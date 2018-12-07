<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateRestriction StructType
 * @subpackage Structs
 */
class DateRestriction extends AbstractStructBase
{
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * Constructor method for DateRestriction
     * @uses DateRestriction::setStart()
     * @uses DateRestriction::setDuration()
     * @uses DateRestriction::setEnd()
     * @param string $start
     * @param string $duration
     * @param string $end
     */
    public function __construct($start = null, $duration = null, $end = null)
    {
        $this
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end);
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
     * @return \StructType\DateRestriction
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
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \StructType\DateRestriction
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \StructType\DateRestriction
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DateRestriction
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
