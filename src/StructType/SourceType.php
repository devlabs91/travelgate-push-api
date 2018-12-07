<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceType StructType
 * @subpackage Structs
 */
class SourceType extends AbstractStructBase
{
    /**
     * The RequestorID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RequestorID
     */
    public $RequestorID;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\BookingChannel
     */
    public $BookingChannel;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType
     */
    public $TPA_Extensions;
    /**
     * The ISOCountry
     * @var string
     */
    public $ISOCountry;
    /**
     * Constructor method for SourceType
     * @uses SourceType::setRequestorID()
     * @uses SourceType::setBookingChannel()
     * @uses SourceType::setTPA_Extensions()
     * @uses SourceType::setISOCountry()
     * @param \Devlabs91\TravelgatePushApi\StructType\RequestorID $requestorID
     * @param \Devlabs91\TravelgatePushApi\StructType\BookingChannel $bookingChannel
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @param string $iSOCountry
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\RequestorID $requestorID = null, \Devlabs91\TravelgatePushApi\StructType\BookingChannel $bookingChannel = null, \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null, $iSOCountry = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setBookingChannel($bookingChannel)
            ->setTPA_Extensions($tPA_Extensions)
            ->setISOCountry($iSOCountry);
    }
    /**
     * Get RequestorID value
     * @return \Devlabs91\TravelgatePushApi\StructType\RequestorID|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param \Devlabs91\TravelgatePushApi\StructType\RequestorID $requestorID
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType
     */
    public function setRequestorID(\Devlabs91\TravelgatePushApi\StructType\RequestorID $requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return \Devlabs91\TravelgatePushApi\StructType\BookingChannel|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @param \Devlabs91\TravelgatePushApi\StructType\BookingChannel $bookingChannel
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType
     */
    public function setBookingChannel(\Devlabs91\TravelgatePushApi\StructType\BookingChannel $bookingChannel = null)
    {
        $this->BookingChannel = $bookingChannel;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType
     */
    public function setTPA_Extensions(\Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType $tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ISOCountry value
     * @return string|null
     */
    public function getISOCountry()
    {
        return $this->ISOCountry;
    }
    /**
     * Set ISOCountry value
     * @param string $iSOCountry
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType
     */
    public function setISOCountry($iSOCountry = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCountry) && !is_string($iSOCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCountry)), __LINE__);
        }
        $this->ISOCountry = $iSOCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\SourceType
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
