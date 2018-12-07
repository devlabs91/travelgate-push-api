<?php

namespace EnumType;

/**
 * This class stands for TransactionActionType EnumType
 * @subpackage Enumerations
 */
class TransactionActionType
{
    /**
     * Constant for value 'Initiate'
     * @return string 'Initiate'
     */
    const VALUE_INITIATE = 'Initiate';
    /**
     * Constant for value 'Commit'
     * @return string 'Commit'
     */
    const VALUE_COMMIT = 'Commit';
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
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
     * @uses self::VALUE_INITIATE
     * @uses self::VALUE_COMMIT
     * @uses self::VALUE_CANCEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INITIATE,
            self::VALUE_COMMIT,
            self::VALUE_CANCEL,
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
