<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerType StructType
 * @subpackage Structs
 */
class CustomerType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\PersonNameType[]
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Telephone[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Email[]
     */
    public $Email;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Address[]
     */
    public $Address;
    /**
     * Constructor method for CustomerType
     * @uses CustomerType::setPersonName()
     * @uses CustomerType::setTelephone()
     * @uses CustomerType::setEmail()
     * @uses CustomerType::setAddress()
     * @param \Devlabs91\TravelgatePushApi\StructType\PersonNameType[] $personName
     * @param \Devlabs91\TravelgatePushApi\StructType\Telephone[] $telephone
     * @param \Devlabs91\TravelgatePushApi\StructType\Email[] $email
     * @param \Devlabs91\TravelgatePushApi\StructType\Address[] $address
     */
    public function __construct(array $personName = array(), array $telephone = array(), array $email = array(), array $address = array())
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address);
    }
    /**
     * Get PersonName value
     * @return \Devlabs91\TravelgatePushApi\StructType\PersonNameType[]|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\PersonNameType[] $personName
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function setPersonName(array $personName = array())
    {
        foreach ($personName as $customerTypePersonNameItem) {
            // validation for constraint: itemType
            if (!$customerTypePersonNameItem instanceof \Devlabs91\TravelgatePushApi\StructType\PersonNameType) {
                throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of \Devlabs91\TravelgatePushApi\StructType\PersonNameType, "%s" given', is_object($customerTypePersonNameItem) ? get_class($customerTypePersonNameItem) : gettype($customerTypePersonNameItem)), __LINE__);
            }
        }
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Add item to PersonName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\PersonNameType $item
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function addToPersonName(\Devlabs91\TravelgatePushApi\StructType\PersonNameType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\PersonNameType) {
            throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of \Devlabs91\TravelgatePushApi\StructType\PersonNameType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PersonName[] = $item;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\TravelgatePushApi\StructType\Telephone[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Telephone[] $telephone
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $customerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$customerTypeTelephoneItem instanceof \Devlabs91\TravelgatePushApi\StructType\Telephone) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Telephone, "%s" given', is_object($customerTypeTelephoneItem) ? get_class($customerTypeTelephoneItem) : gettype($customerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Telephone $item
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function addToTelephone(\Devlabs91\TravelgatePushApi\StructType\Telephone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Telephone) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Telephone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return \Devlabs91\TravelgatePushApi\StructType\Email[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Email[] $email
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $customerTypeEmailItem) {
            // validation for constraint: itemType
            if (!$customerTypeEmailItem instanceof \Devlabs91\TravelgatePushApi\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Email, "%s" given', is_object($customerTypeEmailItem) ? get_class($customerTypeEmailItem) : gettype($customerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Email $item
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function addToEmail(\Devlabs91\TravelgatePushApi\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Email, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Get Address value
     * @return \Devlabs91\TravelgatePushApi\StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Address[] $address
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $customerTypeAddressItem) {
            // validation for constraint: itemType
            if (!$customerTypeAddressItem instanceof \Devlabs91\TravelgatePushApi\StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Address, "%s" given', is_object($customerTypeAddressItem) ? get_class($customerTypeAddressItem) : gettype($customerTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Address $item
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
     */
    public function addToAddress(\Devlabs91\TravelgatePushApi\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\CustomerType
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
