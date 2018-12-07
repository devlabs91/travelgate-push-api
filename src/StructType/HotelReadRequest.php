<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReadRequest StructType
 * @subpackage Structs
 */
class HotelReadRequest extends AbstractStructBase
{
    /**
     * The SelectionCriteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SelectionCriteria
     */
    public $SelectionCriteria;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * Constructor method for HotelReadRequest
     * @uses HotelReadRequest::setSelectionCriteria()
     * @uses HotelReadRequest::setHotelCode()
     * @param \StructType\SelectionCriteria $selectionCriteria
     * @param string $hotelCode
     */
    public function __construct(\StructType\SelectionCriteria $selectionCriteria = null, $hotelCode = null)
    {
        $this
            ->setSelectionCriteria($selectionCriteria)
            ->setHotelCode($hotelCode);
    }
    /**
     * Get SelectionCriteria value
     * @return \StructType\SelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }
    /**
     * Set SelectionCriteria value
     * @param \StructType\SelectionCriteria $selectionCriteria
     * @return \StructType\HotelReadRequest
     */
    public function setSelectionCriteria(\StructType\SelectionCriteria $selectionCriteria = null)
    {
        $this->SelectionCriteria = $selectionCriteria;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \StructType\HotelReadRequest
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReadRequest
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
