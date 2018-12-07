<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelResponse StructType
 * @subpackage Structs
 */
class CancelResponse extends AbstractStructBase
{
    /**
     * The CancelResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS
     */
    public $CancelResult;
    /**
     * Constructor method for CancelResponse
     * @uses CancelResponse::setCancelResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS $cancelResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS $cancelResult = null)
    {
        $this
            ->setCancelResult($cancelResult);
    }
    /**
     * Get CancelResult value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS|null
     */
    public function getCancelResult()
    {
        return $this->CancelResult;
    }
    /**
     * Set CancelResult value
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS $cancelResult
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelResponse
     */
    public function setCancelResult(\Devlabs91\TravelgatePushApi\StructType\OTA_CancelRS $cancelResult = null)
    {
        $this->CancelResult = $cancelResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelResponse
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
