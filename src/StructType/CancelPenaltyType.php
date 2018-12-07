<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltyType StructType
 * @subpackage Structs
 */
class CancelPenaltyType extends AbstractStructBase
{
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Deadline
     */
    public $Deadline;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AmountPercentType
     */
    public $AmountPercent;
    /**
     * The PolicyCode
     * @var string
     */
    public $PolicyCode;
    /**
     * The NonRefundable
     * @var bool
     */
    public $NonRefundable;
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
     * Constructor method for CancelPenaltyType
     * @uses CancelPenaltyType::setDeadline()
     * @uses CancelPenaltyType::setAmountPercent()
     * @uses CancelPenaltyType::setPolicyCode()
     * @uses CancelPenaltyType::setNonRefundable()
     * @uses CancelPenaltyType::setStart()
     * @uses CancelPenaltyType::setDuration()
     * @uses CancelPenaltyType::setEnd()
     * @param \StructType\Deadline $deadline
     * @param \StructType\AmountPercentType $amountPercent
     * @param string $policyCode
     * @param bool $nonRefundable
     * @param string $start
     * @param string $duration
     * @param string $end
     */
    public function __construct(\StructType\Deadline $deadline = null, \StructType\AmountPercentType $amountPercent = null, $policyCode = null, $nonRefundable = null, $start = null, $duration = null, $end = null)
    {
        $this
            ->setDeadline($deadline)
            ->setAmountPercent($amountPercent)
            ->setPolicyCode($policyCode)
            ->setNonRefundable($nonRefundable)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end);
    }
    /**
     * Get Deadline value
     * @return \StructType\Deadline|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param \StructType\Deadline $deadline
     * @return \StructType\CancelPenaltyType
     */
    public function setDeadline(\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return \StructType\AmountPercentType|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param \StructType\AmountPercentType $amountPercent
     * @return \StructType\CancelPenaltyType
     */
    public function setAmountPercent(\StructType\AmountPercentType $amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get PolicyCode value
     * @return string|null
     */
    public function getPolicyCode()
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param string $policyCode
     * @return \StructType\CancelPenaltyType
     */
    public function setPolicyCode($policyCode = null)
    {
        // validation for constraint: string
        if (!is_null($policyCode) && !is_string($policyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyCode)), __LINE__);
        }
        $this->PolicyCode = $policyCode;
        return $this;
    }
    /**
     * Get NonRefundable value
     * @return bool|null
     */
    public function getNonRefundable()
    {
        return $this->NonRefundable;
    }
    /**
     * Set NonRefundable value
     * @param bool $nonRefundable
     * @return \StructType\CancelPenaltyType
     */
    public function setNonRefundable($nonRefundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundable) && !is_bool($nonRefundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonRefundable)), __LINE__);
        }
        $this->NonRefundable = $nonRefundable;
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
     * @return \StructType\CancelPenaltyType
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
     * @return \StructType\CancelPenaltyType
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
     * @return \StructType\CancelPenaltyType
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
     * @return \StructType\CancelPenaltyType
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
