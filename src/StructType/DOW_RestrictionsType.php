<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOW_RestrictionsType StructType
 * @subpackage Structs
 */
class DOW_RestrictionsType extends AbstractStructBase
{
    /**
     * The AvailableDaysOfWeek
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AvailableDaysOfWeek
     */
    public $AvailableDaysOfWeek;
    /**
     * Constructor method for DOW_RestrictionsType
     * @uses DOW_RestrictionsType::setAvailableDaysOfWeek()
     * @param \StructType\AvailableDaysOfWeek $availableDaysOfWeek
     */
    public function __construct(\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null)
    {
        $this
            ->setAvailableDaysOfWeek($availableDaysOfWeek);
    }
    /**
     * Get AvailableDaysOfWeek value
     * @return \StructType\AvailableDaysOfWeek|null
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->AvailableDaysOfWeek;
    }
    /**
     * Set AvailableDaysOfWeek value
     * @param \StructType\AvailableDaysOfWeek $availableDaysOfWeek
     * @return \StructType\DOW_RestrictionsType
     */
    public function setAvailableDaysOfWeek(\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null)
    {
        $this->AvailableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DOW_RestrictionsType
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
