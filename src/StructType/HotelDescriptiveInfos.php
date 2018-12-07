<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveInfos StructType
 * @subpackage Structs
 */
class HotelDescriptiveInfos extends AbstractStructBase
{
    /**
     * The HotelDescriptiveInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo[]
     */
    public $HotelDescriptiveInfo;
    /**
     * The LangRequested
     * @var string
     */
    public $LangRequested;
    /**
     * Constructor method for HotelDescriptiveInfos
     * @uses HotelDescriptiveInfos::setHotelDescriptiveInfo()
     * @uses HotelDescriptiveInfos::setLangRequested()
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo[] $hotelDescriptiveInfo
     * @param string $langRequested
     */
    public function __construct(array $hotelDescriptiveInfo = array(), $langRequested = null)
    {
        $this
            ->setHotelDescriptiveInfo($hotelDescriptiveInfo)
            ->setLangRequested($langRequested);
    }
    /**
     * Get HotelDescriptiveInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo[]|null
     */
    public function getHotelDescriptiveInfo()
    {
        return $this->HotelDescriptiveInfo;
    }
    /**
     * Set HotelDescriptiveInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo[] $hotelDescriptiveInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos
     */
    public function setHotelDescriptiveInfo(array $hotelDescriptiveInfo = array())
    {
        foreach ($hotelDescriptiveInfo as $hotelDescriptiveInfosHotelDescriptiveInfoItem) {
            // validation for constraint: itemType
            if (!$hotelDescriptiveInfosHotelDescriptiveInfoItem instanceof \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo) {
                throw new \InvalidArgumentException(sprintf('The HotelDescriptiveInfo property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo, "%s" given', is_object($hotelDescriptiveInfosHotelDescriptiveInfoItem) ? get_class($hotelDescriptiveInfosHotelDescriptiveInfoItem) : gettype($hotelDescriptiveInfosHotelDescriptiveInfoItem)), __LINE__);
            }
        }
        $this->HotelDescriptiveInfo = $hotelDescriptiveInfo;
        return $this;
    }
    /**
     * Add item to HotelDescriptiveInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo $item
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos
     */
    public function addToHotelDescriptiveInfo(\Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo) {
            throw new \InvalidArgumentException(sprintf('The HotelDescriptiveInfo property can only contain items of \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRQHotelDescriptiveInfosHotelDescriptiveInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelDescriptiveInfo[] = $item;
        return $this;
    }
    /**
     * Get LangRequested value
     * @return string|null
     */
    public function getLangRequested()
    {
        return $this->LangRequested;
    }
    /**
     * Set LangRequested value
     * @param string $langRequested
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos
     */
    public function setLangRequested($langRequested = null)
    {
        // validation for constraint: string
        if (!is_null($langRequested) && !is_string($langRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($langRequested)), __LINE__);
        }
        $this->LangRequested = $langRequested;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveInfos
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
