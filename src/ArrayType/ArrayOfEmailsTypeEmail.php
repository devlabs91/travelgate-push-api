<?php

namespace Devlabs91\TravelgatePushApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailsTypeEmail ArrayType
 * @subpackage Arrays
 */
class ArrayOfEmailsTypeEmail extends AbstractStructArrayBase
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Email[]
     */
    public $Email;
    /**
     * Constructor method for ArrayOfEmailsTypeEmail
     * @uses ArrayOfEmailsTypeEmail::setEmail()
     * @param \Devlabs91\TravelgatePushApi\StructType\Email[] $email
     */
    public function __construct(array $email = array())
    {
        $this
            ->setEmail($email);
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
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $arrayOfEmailsTypeEmailEmailItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailsTypeEmailEmailItem instanceof \Devlabs91\TravelgatePushApi\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\TravelgatePushApi\StructType\Email, "%s" given', is_object($arrayOfEmailsTypeEmailEmailItem) ? get_class($arrayOfEmailsTypeEmailEmailItem) : gettype($arrayOfEmailsTypeEmailEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\Email $item
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail
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
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Devlabs91\TravelgatePushApi\StructType\Email|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Devlabs91\TravelgatePushApi\StructType\Email|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Devlabs91\TravelgatePushApi\StructType\Email|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Devlabs91\TravelgatePushApi\StructType\Email|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Devlabs91\TravelgatePushApi\StructType\Email|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Email
     */
    public function getAttributeName()
    {
        return 'Email';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail
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
