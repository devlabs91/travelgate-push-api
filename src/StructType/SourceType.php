<?php

namespace StructType;

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
     * @var \StructType\RequestorID
     */
    public $RequestorID;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BookingChannel
     */
    public $BookingChannel;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TPA_ExtensionsType
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
     * @param \StructType\RequestorID $requestorID
     * @param \StructType\BookingChannel $bookingChannel
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     * @param string $iSOCountry
     */
    public function __construct(\StructType\RequestorID $requestorID = null, \StructType\BookingChannel $bookingChannel = null, \StructType\TPA_ExtensionsType $tPA_Extensions = null, $iSOCountry = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setBookingChannel($bookingChannel)
            ->setTPA_Extensions($tPA_Extensions)
            ->setISOCountry($iSOCountry);
    }
    /**
     * Get RequestorID value
     * @return \StructType\RequestorID|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param \StructType\RequestorID $requestorID
     * @return \StructType\SourceType
     */
    public function setRequestorID(\StructType\RequestorID $requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return \StructType\BookingChannel|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @param \StructType\BookingChannel $bookingChannel
     * @return \StructType\SourceType
     */
    public function setBookingChannel(\StructType\BookingChannel $bookingChannel = null)
    {
        $this->BookingChannel = $bookingChannel;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return \StructType\TPA_ExtensionsType|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param \StructType\TPA_ExtensionsType $tPA_Extensions
     * @return \StructType\SourceType
     */
    public function setTPA_Extensions(\StructType\TPA_ExtensionsType $tPA_Extensions = null)
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
     * @return \StructType\SourceType
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
     * @return \StructType\SourceType
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
