<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfo StructType
 * @subpackage Structs
 */
class PolicyInfo extends AbstractStructBase
{
    /**
     * The MaxChildAge
     * @var int
     */
    public $MaxChildAge;
    /**
     * Constructor method for PolicyInfo
     * @uses PolicyInfo::setMaxChildAge()
     * @param int $maxChildAge
     */
    public function __construct($maxChildAge = null)
    {
        $this
            ->setMaxChildAge($maxChildAge);
    }
    /**
     * Get MaxChildAge value
     * @return int|null
     */
    public function getMaxChildAge()
    {
        return $this->MaxChildAge;
    }
    /**
     * Set MaxChildAge value
     * @param int $maxChildAge
     * @return \StructType\PolicyInfo
     */
    public function setMaxChildAge($maxChildAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxChildAge) && !is_numeric($maxChildAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxChildAge)), __LINE__);
        }
        $this->MaxChildAge = $maxChildAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PolicyInfo
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
