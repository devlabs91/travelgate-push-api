<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CompanyShortName
     * @var string
     */
    public $CompanyShortName;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::set_()
     * @uses CompanyNameType::setCompanyShortName()
     * @uses CompanyNameType::setCode()
     * @param string $_
     * @param string $companyShortName
     * @param string $code
     */
    public function __construct($_ = null, $companyShortName = null, $code = null)
    {
        $this
            ->set_($_)
            ->setCompanyShortName($companyShortName)
            ->setCode($code);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\CompanyNameType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CompanyShortName value
     * @return string|null
     */
    public function getCompanyShortName()
    {
        return $this->CompanyShortName;
    }
    /**
     * Set CompanyShortName value
     * @param string $companyShortName
     * @return \StructType\CompanyNameType
     */
    public function setCompanyShortName($companyShortName = null)
    {
        // validation for constraint: string
        if (!is_null($companyShortName) && !is_string($companyShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyShortName)), __LINE__);
        }
        $this->CompanyShortName = $companyShortName;
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
     * @return \StructType\CompanyNameType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CompanyNameType
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
