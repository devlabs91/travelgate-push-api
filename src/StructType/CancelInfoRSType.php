<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfoRSType StructType
 * @subpackage Structs
 */
class CancelInfoRSType extends AbstractStructBase
{
    /**
     * The CancelRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType
     */
    public $CancelRules;
    /**
     * Constructor method for CancelInfoRSType
     * @uses CancelInfoRSType::setCancelRules()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType $cancelRules
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType $cancelRules = null)
    {
        $this
            ->setCancelRules($cancelRules);
    }
    /**
     * Get CancelRules value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType|null
     */
    public function getCancelRules()
    {
        return $this->CancelRules;
    }
    /**
     * Set CancelRules value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType $cancelRules
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelInfoRSType
     */
    public function setCancelRules(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfCancelRuleType $cancelRules = null)
    {
        $this->CancelRules = $cancelRules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelInfoRSType
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
