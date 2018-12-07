<?php

namespace Devlabs91\TravelgatePushApi\EnumType;

/**
 * This class stands for AvailabilityStatusType EnumType
 * @subpackage Enumerations
 */
class AvailabilityStatusType
{
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Close'
     * @return string 'Close'
     */
    const VALUE_CLOSE = 'Close';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_CLOSE,
        );
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
