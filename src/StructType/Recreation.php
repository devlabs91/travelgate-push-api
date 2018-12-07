<?php

namespace StructType;

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
     * @var \StructType\ContactInfoType
     */
    public $Contact;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBoolean
     */
    public $OperationSchedules;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRefPointsTypeRefPoint
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
     * @var \ArrayType\ArrayOfBoolean1
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
     * @param \StructType\ContactInfoType $contact
     * @param \ArrayType\ArrayOfBoolean $operationSchedules
     * @param \ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints
     * @param bool $multimediaDescriptions
     * @param \ArrayType\ArrayOfBoolean1 $recreationDetails
     * @param string $descriptiveText
     * @param string $code
     * @param string $name
     * @param string $proximityCode
     * @param bool $included
     */
    public function __construct(\StructType\ContactInfoType $contact = null, \ArrayType\ArrayOfBoolean $operationSchedules = null, \ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null, $multimediaDescriptions = null, \ArrayType\ArrayOfBoolean1 $recreationDetails = null, $descriptiveText = null, $code = null, $name = null, $proximityCode = null, $included = null)
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
     * @return \StructType\ContactInfoType|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \StructType\ContactInfoType $contact
     * @return \StructType\Recreation
     */
    public function setContact(\StructType\ContactInfoType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \ArrayType\ArrayOfBoolean|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \ArrayType\ArrayOfBoolean $operationSchedules
     * @return \StructType\Recreation
     */
    public function setOperationSchedules(\ArrayType\ArrayOfBoolean $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get RefPoints value
     * @return \ArrayType\ArrayOfRefPointsTypeRefPoint|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param \ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints
     * @return \StructType\Recreation
     */
    public function setRefPoints(\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null)
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
     * @return \StructType\Recreation
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
     * @return \ArrayType\ArrayOfBoolean1|null
     */
    public function getRecreationDetails()
    {
        return $this->RecreationDetails;
    }
    /**
     * Set RecreationDetails value
     * @param \ArrayType\ArrayOfBoolean1 $recreationDetails
     * @return \StructType\Recreation
     */
    public function setRecreationDetails(\ArrayType\ArrayOfBoolean1 $recreationDetails = null)
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
     * @return \StructType\Recreation
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
     * @return \StructType\Recreation
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
     * @return \StructType\Recreation
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
     * @return \StructType\Recreation
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
     * @return \StructType\Recreation
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
     * @return \StructType\Recreation
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
