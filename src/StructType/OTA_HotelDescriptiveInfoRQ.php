<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelDescriptiveInfoRQ StructType
 * @subpackage Structs
 */
class OTA_HotelDescriptiveInfoRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType
     */
    public $POS;
    /**
     * The HotelDescriptiveInfos
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos
     */
    public $HotelDescriptiveInfos;
    /**
     * Constructor method for OTA_HotelDescriptiveInfoRQ
     * @uses OTA_HotelDescriptiveInfoRQ::setPOS()
     * @uses OTA_HotelDescriptiveInfoRQ::setHotelDescriptiveInfos()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos $hotelDescriptiveInfos
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null, \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos $hotelDescriptiveInfos = null)
    {
        $this
            ->setPOS($pOS)
            ->setHotelDescriptiveInfos($hotelDescriptiveInfos);
    }
    /**
     * Get POS value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ
     */
    public function setPOS(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get HotelDescriptiveInfos value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos|null
     */
    public function getHotelDescriptiveInfos()
    {
        return $this->HotelDescriptiveInfos;
    }
    /**
     * Set HotelDescriptiveInfos value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos $hotelDescriptiveInfos
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ
     */
    public function setHotelDescriptiveInfos(\Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos $hotelDescriptiveInfos = null)
    {
        $this->HotelDescriptiveInfos = $hotelDescriptiveInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQ
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
