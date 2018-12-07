<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfAddressesTypeAddress
     */
    public $Addresses;
    /**
     * The Phones
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPhonesTypePhone
     */
    public $Phones;
    /**
     * The Emails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfEmailsTypeEmail
     */
    public $Emails;
    /**
     * The URLs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfURLsTypeURL
     */
    public $URLs;
    /**
     * Constructor method for ContactInfoType
     * @uses ContactInfoType::setAddresses()
     * @uses ContactInfoType::setPhones()
     * @uses ContactInfoType::setEmails()
     * @uses ContactInfoType::setURLs()
     * @param \ArrayType\ArrayOfAddressesTypeAddress $addresses
     * @param \ArrayType\ArrayOfPhonesTypePhone $phones
     * @param \ArrayType\ArrayOfEmailsTypeEmail $emails
     * @param \ArrayType\ArrayOfURLsTypeURL $uRLs
     */
    public function __construct(\ArrayType\ArrayOfAddressesTypeAddress $addresses = null, \ArrayType\ArrayOfPhonesTypePhone $phones = null, \ArrayType\ArrayOfEmailsTypeEmail $emails = null, \ArrayType\ArrayOfURLsTypeURL $uRLs = null)
    {
        $this
            ->setAddresses($addresses)
            ->setPhones($phones)
            ->setEmails($emails)
            ->setURLs($uRLs);
    }
    /**
     * Get Addresses value
     * @return \ArrayType\ArrayOfAddressesTypeAddress|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \ArrayType\ArrayOfAddressesTypeAddress $addresses
     * @return \StructType\ContactInfoType
     */
    public function setAddresses(\ArrayType\ArrayOfAddressesTypeAddress $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get Phones value
     * @return \ArrayType\ArrayOfPhonesTypePhone|null
     */
    public function getPhones()
    {
        return $this->Phones;
    }
    /**
     * Set Phones value
     * @param \ArrayType\ArrayOfPhonesTypePhone $phones
     * @return \StructType\ContactInfoType
     */
    public function setPhones(\ArrayType\ArrayOfPhonesTypePhone $phones = null)
    {
        $this->Phones = $phones;
        return $this;
    }
    /**
     * Get Emails value
     * @return \ArrayType\ArrayOfEmailsTypeEmail|null
     */
    public function getEmails()
    {
        return $this->Emails;
    }
    /**
     * Set Emails value
     * @param \ArrayType\ArrayOfEmailsTypeEmail $emails
     * @return \StructType\ContactInfoType
     */
    public function setEmails(\ArrayType\ArrayOfEmailsTypeEmail $emails = null)
    {
        $this->Emails = $emails;
        return $this;
    }
    /**
     * Get URLs value
     * @return \ArrayType\ArrayOfURLsTypeURL|null
     */
    public function getURLs()
    {
        return $this->URLs;
    }
    /**
     * Set URLs value
     * @param \ArrayType\ArrayOfURLsTypeURL $uRLs
     * @return \StructType\ContactInfoType
     */
    public function setURLs(\ArrayType\ArrayOfURLsTypeURL $uRLs = null)
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
     * @return \StructType\ContactInfoType
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
