<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Renovation StructType
 * @subpackage Structs
 */
class Renovation extends AbstractStructBase
{
    /**
     * The RenovationCompletionDate
     * @var string
     */
    public $RenovationCompletionDate;
    /**
     * Constructor method for Renovation
     * @uses Renovation::setRenovationCompletionDate()
     * @param string $renovationCompletionDate
     */
    public function __construct($renovationCompletionDate = null)
    {
        $this
            ->setRenovationCompletionDate($renovationCompletionDate);
    }
    /**
     * Get RenovationCompletionDate value
     * @return string|null
     */
    public function getRenovationCompletionDate()
    {
        return $this->RenovationCompletionDate;
    }
    /**
     * Set RenovationCompletionDate value
     * @param string $renovationCompletionDate
     * @return \Devlabs91\TravelgatePushApi\StructType\Renovation
     */
    public function setRenovationCompletionDate($renovationCompletionDate = null)
    {
        // validation for constraint: string
        if (!is_null($renovationCompletionDate) && !is_string($renovationCompletionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($renovationCompletionDate)), __LINE__);
        }
        $this->RenovationCompletionDate = $renovationCompletionDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\Renovation
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
