<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recreation StructType
 * @subpackage Structs
 */
class Recreation extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\ContactInfoType
     */
    public $Contact;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean
     */
    public $OperationSchedules;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint
     */
    public $RefPoints;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $MultimediaDescriptions;
    /**
     * The RecreationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1
     */
    public $RecreationDetails;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The ProximityCode
     * @var string
     */
    public $ProximityCode;
    /**
     * The Included
     * @var bool
     */
    public $Included;
    /**
     * Constructor method for Recreation
     * @uses Recreation::setContact()
     * @uses Recreation::setOperationSchedules()
     * @uses Recreation::setRefPoints()
     * @uses Recreation::setMultimediaDescriptions()
     * @uses Recreation::setRecreationDetails()
     * @uses Recreation::setDescriptiveText()
     * @uses Recreation::setCode()
     * @uses Recreation::setName()
     * @uses Recreation::setProximityCode()
     * @uses Recreation::setIncluded()
     * @param \Devlabs91\TravelgatePushApi\StructType\ContactInfoType $contact
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean $operationSchedules
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints
     * @param bool $multimediaDescriptions
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1 $recreationDetails
     * @param string $descriptiveText
     * @param string $code
     * @param string $name
     * @param string $proximityCode
     * @param bool $included
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\ContactInfoType $contact = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean $operationSchedules = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null, $multimediaDescriptions = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1 $recreationDetails = null, $descriptiveText = null, $code = null, $name = null, $proximityCode = null, $included = null)
    {
        $this
            ->setContact($contact)
            ->setOperationSchedules($operationSchedules)
            ->setRefPoints($refPoints)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRecreationDetails($recreationDetails)
            ->setDescriptiveText($descriptiveText)
            ->setCode($code)
            ->setName($name)
            ->setProximityCode($proximityCode)
            ->setIncluded($included);
    }
    /**
     * Get Contact value
     * @return \Devlabs91\TravelgatePushApi\StructType\ContactInfoType|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Devlabs91\TravelgatePushApi\StructType\ContactInfoType $contact
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setContact(\Devlabs91\TravelgatePushApi\StructType\ContactInfoType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean $operationSchedules
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setOperationSchedules(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get RefPoints value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setRefPoints(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null)
    {
        $this->RefPoints = $refPoints;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return bool|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param bool $multimediaDescriptions
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        // validation for constraint: boolean
        if (!is_null($multimediaDescriptions) && !is_bool($multimediaDescriptions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($multimediaDescriptions)), __LINE__);
        }
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get RecreationDetails value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1|null
     */
    public function getRecreationDetails()
    {
        return $this->RecreationDetails;
    }
    /**
     * Set RecreationDetails value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1 $recreationDetails
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setRecreationDetails(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfBoolean1 $recreationDetails = null)
    {
        $this->RecreationDetails = $recreationDetails;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ProximityCode value
     * @return string|null
     */
    public function getProximityCode()
    {
        return $this->ProximityCode;
    }
    /**
     * Set ProximityCode value
     * @param string $proximityCode
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setProximityCode($proximityCode = null)
    {
        // validation for constraint: string
        if (!is_null($proximityCode) && !is_string($proximityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proximityCode)), __LINE__);
        }
        $this->ProximityCode = $proximityCode;
        return $this;
    }
    /**
     * Get Included value
     * @return bool|null
     */
    public function getIncluded()
    {
        return $this->Included;
    }
    /**
     * Set Included value
     * @param bool $included
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
     */
    public function setIncluded($included = null)
    {
        // validation for constraint: boolean
        if (!is_null($included) && !is_bool($included)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($included)), __LINE__);
        }
        $this->Included = $included;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Recreation
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
