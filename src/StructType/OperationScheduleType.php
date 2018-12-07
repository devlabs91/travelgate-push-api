<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationScheduleType StructType
 * @subpackage Structs
 */
class OperationScheduleType extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\FeeType
     */
    public $Charge;
    /**
     * Constructor method for OperationScheduleType
     * @uses OperationScheduleType::setCharge()
     * @param \Devlabs91\TravelgatePushApi\StructType\FeeType $charge
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\FeeType $charge = null)
    {
        $this
            ->setCharge($charge);
    }
    /**
     * Get Charge value
     * @return \Devlabs91\TravelgatePushApi\StructType\FeeType|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param \Devlabs91\TravelgatePushApi\StructType\FeeType $charge
     * @return \Devlabs91\TravelgatePushApi\StructType\OperationScheduleType
     */
    public function setCharge(\Devlabs91\TravelgatePushApi\StructType\FeeType $charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OperationScheduleType
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
