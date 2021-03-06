<?php

namespace Devlabs91\TravelgatePushApi\EnumType;

/**
 * This class stands for TimeUnitType EnumType
 * @subpackage Enumerations
 */
class TimeUnitType
{
    /**
     * Constant for value 'Year'
     * @return string 'Year'
     */
    const VALUE_YEAR = 'Year';
    /**
     * Constant for value 'Month'
     * @return string 'Month'
     */
    const VALUE_MONTH = 'Month';
    /**
     * Constant for value 'Week'
     * @return string 'Week'
     */
    const VALUE_WEEK = 'Week';
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'Hour'
     * @return string 'Hour'
     */
    const VALUE_HOUR = 'Hour';
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
     * @uses self::VALUE_YEAR
     * @uses self::VALUE_MONTH
     * @uses self::VALUE_WEEK
     * @uses self::VALUE_DAY
     * @uses self::VALUE_HOUR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_YEAR,
            self::VALUE_MONTH,
            self::VALUE_WEEK,
            self::VALUE_DAY,
            self::VALUE_HOUR,
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
