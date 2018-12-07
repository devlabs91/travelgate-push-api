<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attraction StructType
 * @subpackage Structs
 */
class Attraction extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Contact
     */
    public $Contact;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule
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
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The AttractionCategoryCode
     * @var string
     */
    public $AttractionCategoryCode;
    /**
     * The AttractionName
     * @var string
     */
    public $AttractionName;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for Attraction
     * @uses Attraction::setContact()
     * @uses Attraction::setOperationSchedules()
     * @uses Attraction::setRefPoints()
     * @uses Attraction::setDescriptiveText()
     * @uses Attraction::setAttractionCategoryCode()
     * @uses Attraction::setAttractionName()
     * @uses Attraction::setCode()
     * @uses Attraction::setLanguage()
     * @param \StructType\Contact $contact
     * @param \ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule $operationSchedules
     * @param \ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints
     * @param string $descriptiveText
     * @param string $attractionCategoryCode
     * @param string $attractionName
     * @param string $code
     * @param string $language
     */
    public function __construct(\StructType\Contact $contact = null, \ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule $operationSchedules = null, \ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null, $descriptiveText = null, $attractionCategoryCode = null, $attractionName = null, $code = null, $language = null)
    {
        $this
            ->setContact($contact)
            ->setOperationSchedules($operationSchedules)
            ->setRefPoints($refPoints)
            ->setDescriptiveText($descriptiveText)
            ->setAttractionCategoryCode($attractionCategoryCode)
            ->setAttractionName($attractionName)
            ->setCode($code)
            ->setLanguage($language);
    }
    /**
     * Get Contact value
     * @return \StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \StructType\Contact $contact
     * @return \StructType\Attraction
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule $operationSchedules
     * @return \StructType\Attraction
     */
    public function setOperationSchedules(\ArrayType\ArrayOfOperationSchedulesPlusChargeTypeOperationSchedule $operationSchedules = null)
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
     * @return \StructType\Attraction
     */
    public function setRefPoints(\ArrayType\ArrayOfRefPointsTypeRefPoint $refPoints = null)
    {
        $this->RefPoints = $refPoints;
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
     * @return \StructType\Attraction
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
     * Get AttractionCategoryCode value
     * @return string|null
     */
    public function getAttractionCategoryCode()
    {
        return $this->AttractionCategoryCode;
    }
    /**
     * Set AttractionCategoryCode value
     * @param string $attractionCategoryCode
     * @return \StructType\Attraction
     */
    public function setAttractionCategoryCode($attractionCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($attractionCategoryCode) && !is_string($attractionCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attractionCategoryCode)), __LINE__);
        }
        $this->AttractionCategoryCode = $attractionCategoryCode;
        return $this;
    }
    /**
     * Get AttractionName value
     * @return string|null
     */
    public function getAttractionName()
    {
        return $this->AttractionName;
    }
    /**
     * Set AttractionName value
     * @param string $attractionName
     * @return \StructType\Attraction
     */
    public function setAttractionName($attractionName = null)
    {
        // validation for constraint: string
        if (!is_null($attractionName) && !is_string($attractionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attractionName)), __LINE__);
        }
        $this->AttractionName = $attractionName;
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
     * @return \StructType\Attraction
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
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\Attraction
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Attraction
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
