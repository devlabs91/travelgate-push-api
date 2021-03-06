<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckFlux StructType
 * @subpackage Structs
 */
class CheckFlux extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ
     */
    public $request;
    /**
     * Constructor method for CheckFlux
     * @uses CheckFlux::setRequest()
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ $request
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ $request
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFlux
     */
    public function setRequest(\Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFlux
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
