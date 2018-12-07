<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AddressLine;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\StateProvType
     */
    public $StateProv;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CountryNameType
     */
    public $CountryName;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCityName()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setStateProv()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setType()
     * @param string[] $addressLine
     * @param string $cityName
     * @param string $postalCode
     * @param \Devlabs91\TravelgatePushApi\StructType\StateProvType $stateProv
     * @param \Devlabs91\TravelgatePushApi\StructType\CountryNameType $countryName
     * @param string $type
     */
    public function __construct(array $addressLine = array(), $cityName = null, $postalCode = null, \Devlabs91\TravelgatePushApi\StructType\StateProvType $stateProv = null, \Devlabs91\TravelgatePushApi\StructType\CountryNameType $countryName = null, $type = null)
    {
        $this
            ->setAddressLine($addressLine)
            ->setCityName($cityName)
            ->setPostalCode($postalCode)
            ->setStateProv($stateProv)
            ->setCountryName($countryName)
            ->setType($type);
    }
    /**
     * Get AddressLine value
     * @return string[]|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @throws \InvalidArgumentException
     * @param string[] $addressLine
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressTypeAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($addressTypeAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of string, "%s" given', is_object($addressTypeAddressLineItem) ? get_class($addressTypeAddressLineItem) : gettype($addressTypeAddressLineItem)), __LINE__);
            }
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Add item to AddressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function addToAddressLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressLine[] = $item;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get StateProv value
     * @return \Devlabs91\TravelgatePushApi\StructType\StateProvType|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param \Devlabs91\TravelgatePushApi\StructType\StateProvType $stateProv
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setStateProv(\Devlabs91\TravelgatePushApi\StructType\StateProvType $stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryName value
     * @return \Devlabs91\TravelgatePushApi\StructType\CountryNameType|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param \Devlabs91\TravelgatePushApi\StructType\CountryNameType $countryName
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setCountryName(\Devlabs91\TravelgatePushApi\StructType\CountryNameType $countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\AddressType
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
