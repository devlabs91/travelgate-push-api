<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckFluxResponse StructType
 * @subpackage Structs
 */
class CheckFluxResponse extends AbstractStructBase
{
    /**
     * The CheckFluxResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Devlabs91\TravelgatePushApi\StructType\CheckFluxRS
     */
    public $CheckFluxResult;
    /**
     * Constructor method for CheckFluxResponse
     * @uses CheckFluxResponse::setCheckFluxResult()
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckFluxRS $checkFluxResult
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CheckFluxRS $checkFluxResult = null)
    {
        $this
            ->setCheckFluxResult($checkFluxResult);
    }
    /**
     * Get CheckFluxResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRS|null
     */
    public function getCheckFluxResult()
    {
        return isset($this->CheckFluxResult) ? $this->CheckFluxResult : null;
    }
    /**
     * Set CheckFluxResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckFluxRS $checkFluxResult
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxResponse
     */
    public function setCheckFluxResult(\Devlabs91\TravelgatePushApi\StructType\CheckFluxRS $checkFluxResult = null)
    {
        if (is_null($checkFluxResult) || (is_array($checkFluxResult) && empty($checkFluxResult))) {
            unset($this->CheckFluxResult);
        } else {
            $this->CheckFluxResult = $checkFluxResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxResponse
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
