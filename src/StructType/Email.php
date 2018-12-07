<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * @subpackage Structs
 */
class Email extends EmailType
{
    /**
     * The _
     * @var \StructType\EmailType
     */
    public $_;
    /**
     * Constructor method for Email
     * @uses Email::set_()
     * @param \StructType\EmailType $_
     */
    public function __construct(\StructType\EmailType $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return \StructType\EmailType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\EmailType $_
     * @return \StructType\Email
     */
    public function set_(\StructType\EmailType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Email
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
