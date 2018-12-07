<?php

namespace Devlabs91\TravelgatePushApi\StructType;

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
     * @var \Devlabs91\TravelgatePushApi\StructType\TimeSpan
     */
    public $TimeSpan;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuaranteeType
     */
    public $Guarantee;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public $Total;
    /**
     * Constructor method for ResCommonDetailType
     * @uses ResCommonDetailType::setTimeSpan()
     * @uses ResCommonDetailType::setGuarantee()
     * @uses ResCommonDetailType::setTotal()
     * @param \Devlabs91\TravelgatePushApi\StructType\TimeSpan $timeSpan
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteeType $guarantee
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\TimeSpan $timeSpan = null, \Devlabs91\TravelgatePushApi\StructType\GuaranteeType $guarantee = null, \Devlabs91\TravelgatePushApi\StructType\TotalType $total = null)
    {
        $this
            ->setTimeSpan($timeSpan)
            ->setGuarantee($guarantee)
            ->setTotal($total);
    }
    /**
     * Get TimeSpan value
     * @return \Devlabs91\TravelgatePushApi\StructType\TimeSpan|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param \Devlabs91\TravelgatePushApi\StructType\TimeSpan $timeSpan
     * @return \Devlabs91\TravelgatePushApi\StructType\ResCommonDetailType
     */
    public function setTimeSpan(\Devlabs91\TravelgatePushApi\StructType\TimeSpan $timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuaranteeType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuaranteeType $guarantee
     * @return \Devlabs91\TravelgatePushApi\StructType\ResCommonDetailType
     */
    public function setGuarantee(\Devlabs91\TravelgatePushApi\StructType\GuaranteeType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get Total value
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     * @return \Devlabs91\TravelgatePushApi\StructType\ResCommonDetailType
     */
    public function setTotal(\Devlabs91\TravelgatePushApi\StructType\TotalType $total = null)
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
     * @return \Devlabs91\TravelgatePushApi\StructType\ResCommonDetailType
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
