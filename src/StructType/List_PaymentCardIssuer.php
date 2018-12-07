<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for List_PaymentCardIssuer StructType
 * @subpackage Structs
 */
class List_PaymentCardIssuer extends \Devlabs91\TravelgatePushApi\EnumType\List_PaymentCardIssuer_Base
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * Constructor method for List_PaymentCardIssuer
     * @uses List_PaymentCardIssuer::set_()
     * @uses List_PaymentCardIssuer::setCode()
     * @param string $_
     * @param string $code
     */
    public function __construct($_ = null, $code = null)
    {
        $this
            ->set_($_)
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
     * @uses \Devlabs91\TravelgatePushApi\EnumType\List_PaymentCardIssuer_Base::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\List_PaymentCardIssuer_Base::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\List_PaymentCardIssuer_Base::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\List_PaymentCardIssuer_Base::getValidValues())), __LINE__);
        }
        $this->_ = $_;
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
     * @return \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer
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
     * @return \Devlabs91\TravelgatePushApi\StructType\List_PaymentCardIssuer
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
