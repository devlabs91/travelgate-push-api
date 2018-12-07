<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckFluxRQ StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckFluxRQ
 * @subpackage Structs
 */
class CheckFluxRQ extends AbstractStructBase
{
    /**
     * The client
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $client;
    /**
     * The hotel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $hotel;
    /**
     * The provider
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $provider;
    /**
     * Constructor method for CheckFluxRQ
     * @uses CheckFluxRQ::setClient()
     * @uses CheckFluxRQ::setHotel()
     * @uses CheckFluxRQ::setProvider()
     * @param string $client
     * @param string $hotel
     * @param string $provider
     */
    public function __construct($client = null, $hotel = null, $provider = null)
    {
        $this
            ->setClient($client)
            ->setHotel($hotel)
            ->setProvider($provider);
    }
    /**
     * Get client value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClient()
    {
        return isset($this->client) ? $this->client : null;
    }
    /**
     * Set client value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $client
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ
     */
    public function setClient($client = null)
    {
        // validation for constraint: string
        if (!is_null($client) && !is_string($client)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client)), __LINE__);
        }
        if (is_null($client) || (is_array($client) && empty($client))) {
            unset($this->client);
        } else {
            $this->client = $client;
        }
        return $this;
    }
    /**
     * Get hotel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHotel()
    {
        return isset($this->hotel) ? $this->hotel : null;
    }
    /**
     * Set hotel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hotel
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ
     */
    public function setHotel($hotel = null)
    {
        // validation for constraint: string
        if (!is_null($hotel) && !is_string($hotel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotel)), __LINE__);
        }
        if (is_null($hotel) || (is_array($hotel) && empty($hotel))) {
            unset($this->hotel);
        } else {
            $this->hotel = $hotel;
        }
        return $this;
    }
    /**
     * Get provider value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvider()
    {
        return isset($this->provider) ? $this->provider : null;
    }
    /**
     * Set provider value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $provider
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ
     */
    public function setProvider($provider = null)
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provider)), __LINE__);
        }
        if (is_null($provider) || (is_array($provider) && empty($provider))) {
            unset($this->provider);
        } else {
            $this->provider = $provider;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CheckFluxRQ
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
