<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueID_Type StructType
 * @subpackage Structs
 */
class UniqueID_Type extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CompanyNameType
     */
    public $CompanyName;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The ID_Context
     * @var string
     */
    public $ID_Context;
    /**
     * Constructor method for UniqueID_Type
     * @uses UniqueID_Type::setCompanyName()
     * @uses UniqueID_Type::setType()
     * @uses UniqueID_Type::setID()
     * @uses UniqueID_Type::setID_Context()
     * @param \Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName
     * @param string $type
     * @param string $iD
     * @param string $iD_Context
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName = null, $type = null, $iD = null, $iD_Context = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setType($type)
            ->setID($iD)
            ->setID_Context($iD_Context);
    }
    /**
     * Get CompanyName value
     * @return \Devlabs91\TravelgatePushApi\StructType\CompanyNameType|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
     */
    public function setCompanyName(\Devlabs91\TravelgatePushApi\StructType\CompanyNameType $companyName = null)
    {
        $this->CompanyName = $companyName;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
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
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ID_Context value
     * @return string|null
     */
    public function getID_Context()
    {
        return $this->ID_Context;
    }
    /**
     * Set ID_Context value
     * @param string $iD_Context
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
     */
    public function setID_Context($iD_Context = null)
    {
        // validation for constraint: string
        if (!is_null($iD_Context) && !is_string($iD_Context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD_Context)), __LINE__);
        }
        $this->ID_Context = $iD_Context;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\UniqueID_Type
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
