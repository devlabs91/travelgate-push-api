<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URL StructType
 * @subpackage Structs
 */
class URL extends URL_Type
{
    /**
     * The _
     * @var \StructType\URL_Type
     */
    public $_;
    /**
     * Constructor method for URL
     * @uses URL::set_()
     * @param \StructType\URL_Type $_
     */
    public function __construct(\StructType\URL_Type $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return \StructType\URL_Type|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\URL_Type $_
     * @return \StructType\URL
     */
    public function set_(\StructType\URL_Type $_ = null)
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
     * @return \StructType\URL
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
