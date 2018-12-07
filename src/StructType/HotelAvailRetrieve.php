<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAvailRetrieve StructType
 * @subpackage Structs
 */
class HotelAvailRetrieve extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelAvailGetRQ
     */
    public $request;
    /**
     * Constructor method for HotelAvailRetrieve
     * @uses HotelAvailRetrieve::setRequest()
     * @param \StructType\OTA_HotelAvailGetRQ $request
     */
    public function __construct(\StructType\OTA_HotelAvailGetRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\OTA_HotelAvailGetRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\OTA_HotelAvailGetRQ $request
     * @return \StructType\HotelAvailRetrieve
     */
    public function setRequest(\StructType\OTA_HotelAvailGetRQ $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelAvailRetrieve
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
