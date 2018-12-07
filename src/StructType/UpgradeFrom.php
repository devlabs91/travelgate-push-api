<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpgradeFrom StructType
 * @subpackage Structs
 */
class UpgradeFrom extends AbstractStructBase
{
    /**
     * The InvCode
     * @var string
     */
    public $InvCode;
    /**
     * Constructor method for UpgradeFrom
     * @uses UpgradeFrom::setInvCode()
     * @param string $invCode
     */
    public function __construct($invCode = null)
    {
        $this
            ->setInvCode($invCode);
    }
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \StructType\UpgradeFrom
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UpgradeFrom
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
