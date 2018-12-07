<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingRule StructType
 * @subpackage Structs
 */
class BookingRule extends AbstractStructBase
{
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CancelPenaltiesType
     */
    public $CancelPenalties;
    /**
     * The Viewerships
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfViewershipsTypeViewership
     */
    public $Viewerships;
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
     * Constructor method for BookingRule
     * @uses BookingRule::setCancelPenalties()
     * @uses BookingRule::setViewerships()
     * @uses BookingRule::setStart()
     * @uses BookingRule::setEnd()
     * @param \StructType\CancelPenaltiesType $cancelPenalties
     * @param \ArrayType\ArrayOfViewershipsTypeViewership $viewerships
     * @param string $start
     * @param string $end
     */
    public function __construct(\StructType\CancelPenaltiesType $cancelPenalties = null, \ArrayType\ArrayOfViewershipsTypeViewership $viewerships = null, $start = null, $end = null)
    {
        $this
            ->setCancelPenalties($cancelPenalties)
            ->setViewerships($viewerships)
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get CancelPenalties value
     * @return \StructType\CancelPenaltiesType|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param \StructType\CancelPenaltiesType $cancelPenalties
     * @return \StructType\BookingRule
     */
    public function setCancelPenalties(\StructType\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Viewerships value
     * @return \ArrayType\ArrayOfViewershipsTypeViewership|null
     */
    public function getViewerships()
    {
        return $this->Viewerships;
    }
    /**
     * Set Viewerships value
     * @param \ArrayType\ArrayOfViewershipsTypeViewership $viewerships
     * @return \StructType\BookingRule
     */
    public function setViewerships(\ArrayType\ArrayOfViewershipsTypeViewership $viewerships = null)
    {
        $this->Viewerships = $viewerships;
        return $this;
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
     * @return \StructType\BookingRule
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
     * @return \StructType\BookingRule
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
     * @return \StructType\BookingRule
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
