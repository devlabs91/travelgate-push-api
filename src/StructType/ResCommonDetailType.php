<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResCommonDetailType StructType
 * @subpackage Structs
 */
class ResCommonDetailType extends AbstractStructBase
{
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TimeSpan
     */
    public $TimeSpan;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GuaranteeType
     */
    public $Guarantee;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * Constructor method for ResCommonDetailType
     * @uses ResCommonDetailType::setTimeSpan()
     * @uses ResCommonDetailType::setGuarantee()
     * @uses ResCommonDetailType::setTotal()
     * @param \StructType\TimeSpan $timeSpan
     * @param \StructType\GuaranteeType $guarantee
     * @param \StructType\TotalType $total
     */
    public function __construct(\StructType\TimeSpan $timeSpan = null, \StructType\GuaranteeType $guarantee = null, \StructType\TotalType $total = null)
    {
        $this
            ->setTimeSpan($timeSpan)
            ->setGuarantee($guarantee)
            ->setTotal($total);
    }
    /**
     * Get TimeSpan value
     * @return \StructType\TimeSpan|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param \StructType\TimeSpan $timeSpan
     * @return \StructType\ResCommonDetailType
     */
    public function setTimeSpan(\StructType\TimeSpan $timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \StructType\GuaranteeType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \StructType\GuaranteeType $guarantee
     * @return \StructType\ResCommonDetailType
     */
    public function setGuarantee(\StructType\GuaranteeType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\ResCommonDetailType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ResCommonDetailType
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
