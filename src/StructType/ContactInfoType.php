<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactInfoType StructType
 * @subpackage Structs
 */
class ContactInfoType extends AbstractStructBase
{
    /**
     * The Addresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress
     */
    public $Addresses;
    /**
     * The Phones
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone
     */
    public $Phones;
    /**
     * The Emails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail
     */
    public $Emails;
    /**
     * The URLs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL
     */
    public $URLs;
    /**
     * Constructor method for ContactInfoType
     * @uses ContactInfoType::setAddresses()
     * @uses ContactInfoType::setPhones()
     * @uses ContactInfoType::setEmails()
     * @uses ContactInfoType::setURLs()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress $addresses
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone $phones
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail $emails
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL $uRLs
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress $addresses = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone $phones = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail $emails = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL $uRLs = null)
    {
        $this
            ->setAddresses($addresses)
            ->setPhones($phones)
            ->setEmails($emails)
            ->setURLs($uRLs);
    }
    /**
     * Get Addresses value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress $addresses
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
     */
    public function setAddresses(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfAddressesTypeAddress $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get Phones value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone|null
     */
    public function getPhones()
    {
        return $this->Phones;
    }
    /**
     * Set Phones value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone $phones
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
     */
    public function setPhones(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfPhonesTypePhone $phones = null)
    {
        $this->Phones = $phones;
        return $this;
    }
    /**
     * Get Emails value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail|null
     */
    public function getEmails()
    {
        return $this->Emails;
    }
    /**
     * Set Emails value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail $emails
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
     */
    public function setEmails(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfEmailsTypeEmail $emails = null)
    {
        $this->Emails = $emails;
        return $this;
    }
    /**
     * Get URLs value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL|null
     */
    public function getURLs()
    {
        return $this->URLs;
    }
    /**
     * Set URLs value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL $uRLs
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
     */
    public function setURLs(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfURLsTypeURL $uRLs = null)
    {
        $this->URLs = $uRLs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
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
