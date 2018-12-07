<?php

namespace Devlabs91\TravelgatePushApi\EnumType;

/**
 * This class stands for TransactionStatusType EnumType
 * @subpackage Enumerations
 */
class TransactionStatusType
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Modified'
     * @return string 'Modified'
     */
    const VALUE_MODIFIED = 'Modified';
    /**
     * Constant for value 'Committed'
     * @return string 'Committed'
     */
    const VALUE_COMMITTED = 'Committed';
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
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_MODIFIED
     * @uses self::VALUE_COMMITTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_CANCELLED,
            self::VALUE_MODIFIED,
            self::VALUE_COMMITTED,
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
