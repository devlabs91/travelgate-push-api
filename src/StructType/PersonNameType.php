<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonNameType StructType
 * @subpackage Structs
 */
class PersonNameType extends AbstractStructBase
{
    /**
     * The NamePrefix
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NamePrefix;
    /**
     * The GivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $GivenName;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * Constructor method for PersonNameType
     * @uses PersonNameType::setNamePrefix()
     * @uses PersonNameType::setGivenName()
     * @uses PersonNameType::setSurname()
     * @param string[] $namePrefix
     * @param string[] $givenName
     * @param string $surname
     */
    public function __construct(array $namePrefix = array(), array $givenName = array(), $surname = null)
    {
        $this
            ->setNamePrefix($namePrefix)
            ->setGivenName($givenName)
            ->setSurname($surname);
    }
    /**
     * Get NamePrefix value
     * @return string[]|null
     */
    public function getNamePrefix()
    {
        return $this->NamePrefix;
    }
    /**
     * Set NamePrefix value
     * @throws \InvalidArgumentException
     * @param string[] $namePrefix
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
     */
    public function setNamePrefix(array $namePrefix = array())
    {
        foreach ($namePrefix as $personNameTypeNamePrefixItem) {
            // validation for constraint: itemType
            if (!is_string($personNameTypeNamePrefixItem)) {
                throw new \InvalidArgumentException(sprintf('The NamePrefix property can only contain items of string, "%s" given', is_object($personNameTypeNamePrefixItem) ? get_class($personNameTypeNamePrefixItem) : gettype($personNameTypeNamePrefixItem)), __LINE__);
            }
        }
        $this->NamePrefix = $namePrefix;
        return $this;
    }
    /**
     * Add item to NamePrefix value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
     */
    public function addToNamePrefix($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The NamePrefix property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NamePrefix[] = $item;
        return $this;
    }
    /**
     * Get GivenName value
     * @return string[]|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @throws \InvalidArgumentException
     * @param string[] $givenName
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
     */
    public function setGivenName(array $givenName = array())
    {
        foreach ($givenName as $personNameTypeGivenNameItem) {
            // validation for constraint: itemType
            if (!is_string($personNameTypeGivenNameItem)) {
                throw new \InvalidArgumentException(sprintf('The GivenName property can only contain items of string, "%s" given', is_object($personNameTypeGivenNameItem) ? get_class($personNameTypeGivenNameItem) : gettype($personNameTypeGivenNameItem)), __LINE__);
            }
        }
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Add item to GivenName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
     */
    public function addToGivenName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The GivenName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GivenName[] = $item;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType
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
