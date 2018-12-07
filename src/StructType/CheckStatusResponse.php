<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckStatusResponse StructType
 * @subpackage Structs
 */
class CheckStatusResponse extends AbstractStructBase
{
    /**
     * The CheckStatusResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Devlabs91\TravelgatePushApi\StructType\Response
     */
    public $CheckStatusResult;
    /**
     * Constructor method for CheckStatusResponse
     * @uses CheckStatusResponse::setCheckStatusResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\Response $checkStatusResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\Response $checkStatusResult = null)
    {
        $this
            ->setCheckStatusResult($checkStatusResult);
    }
    /**
     * Get CheckStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Devlabs91\TravelgatePushApi\StructType\Response|null
     */
    public function getCheckStatusResult()
    {
        return isset($this->CheckStatusResult) ? $this->CheckStatusResult : null;
    }
    /**
     * Set CheckStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Devlabs91\TravelgatePushApi\StructType\Response $checkStatusResult
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckStatusResponse
     */
    public function setCheckStatusResult(\Devlabs91\TravelgatePushApi\StructType\Response $checkStatusResult = null)
    {
        if (is_null($checkStatusResult) || (is_array($checkStatusResult) && empty($checkStatusResult))) {
            unset($this->CheckStatusResult);
        } else {
            $this->CheckStatusResult = $checkStatusResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckStatusResponse
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
