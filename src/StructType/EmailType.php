<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailType StructType
 * @subpackage Structs
 */
class EmailType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The DefaultInd
     * @var bool
     */
    public $DefaultInd;
    /**
     * The EmailType
     * @var string
     */
    public $EmailType;
    /**
     * Constructor method for EmailType
     * @uses EmailType::set_()
     * @uses EmailType::setDefaultInd()
     * @uses EmailType::setEmailType()
     * @param string $_
     * @param bool $defaultInd
     * @param string $emailType
     */
    public function __construct($_ = null, $defaultInd = null, $emailType = null)
    {
        $this
            ->set_($_)
            ->setDefaultInd($defaultInd)
            ->setEmailType($emailType);
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
     * @return \StructType\EmailType
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
     * Get DefaultInd value
     * @return bool|null
     */
    public function getDefaultInd()
    {
        return $this->DefaultInd;
    }
    /**
     * Set DefaultInd value
     * @param bool $defaultInd
     * @return \StructType\EmailType
     */
    public function setDefaultInd($defaultInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultInd) && !is_bool($defaultInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultInd)), __LINE__);
        }
        $this->DefaultInd = $defaultInd;
        return $this;
    }
    /**
     * Get EmailType value
     * @return string|null
     */
    public function getEmailType()
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @param string $emailType
     * @return \StructType\EmailType
     */
    public function setEmailType($emailType = null)
    {
        // validation for constraint: string
        if (!is_null($emailType) && !is_string($emailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailType)), __LINE__);
        }
        $this->EmailType = $emailType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EmailType
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
