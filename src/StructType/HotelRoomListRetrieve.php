<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomListRetrieve StructType
 * @subpackage Structs
 */
class HotelRoomListRetrieve extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OTA_HotelRoomListRQ
     */
    public $request;
    /**
     * Constructor method for HotelRoomListRetrieve
     * @uses HotelRoomListRetrieve::setRequest()
     * @param \StructType\OTA_HotelRoomListRQ $request
     */
    public function __construct(\StructType\OTA_HotelRoomListRQ $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\OTA_HotelRoomListRQ|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\OTA_HotelRoomListRQ $request
     * @return \StructType\HotelRoomListRetrieve
     */
    public function setRequest(\StructType\OTA_HotelRoomListRQ $request = null)
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
     * @return \StructType\HotelRoomListRetrieve
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
