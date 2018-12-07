<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
 * StructType
 * @subpackage Structs
 */
class OTA_HotelDescriptiveInfoRSHotelDescriptiveContents extends AbstractStructBase
{
    /**
     * The HotelDescriptiveContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent[]
     */
    public $HotelDescriptiveContent;
    /**
     * The HotelCodeCode
     * @var string
     */
    public $HotelCodeCode;
    /**
     * Constructor method for OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
     * @uses OTA_HotelDescriptiveInfoRSHotelDescriptiveContents::setHotelDescriptiveContent()
     * @uses OTA_HotelDescriptiveInfoRSHotelDescriptiveContents::setHotelCodeCode()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent[] $hotelDescriptiveContent
     * @param string $hotelCodeCode
     */
    public function __construct(array $hotelDescriptiveContent = array(), $hotelCodeCode = null)
    {
        $this
            ->setHotelDescriptiveContent($hotelDescriptiveContent)
            ->setHotelCodeCode($hotelCodeCode);
    }
    /**
     * Get HotelDescriptiveContent value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent[]|null
     */
    public function getHotelDescriptiveContent()
    {
        return $this->HotelDescriptiveContent;
    }
    /**
     * Set HotelDescriptiveContent value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent[] $hotelDescriptiveContent
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
     */
    public function setHotelDescriptiveContent(array $hotelDescriptiveContent = array())
    {
        foreach ($hotelDescriptiveContent as $oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsHotelDescriptiveContentItem) {
            // validation for constraint: itemType
            if (!$oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsHotelDescriptiveContentItem instanceof \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent) {
                throw new \InvalidArgumentException(sprintf('The HotelDescriptiveContent property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent, "%s" given', is_object($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsHotelDescriptiveContentItem) ? get_class($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsHotelDescriptiveContentItem) : gettype($oTA_HotelDescriptiveInfoRSHotelDescriptiveContentsHotelDescriptiveContentItem)), __LINE__);
            }
        }
        $this->HotelDescriptiveContent = $hotelDescriptiveContent;
        return $this;
    }
    /**
     * Add item to HotelDescriptiveContent value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent $item
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
     */
    public function addToHotelDescriptiveContent(\Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent) {
            throw new \InvalidArgumentException(sprintf('The HotelDescriptiveContent property can only contain items of \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelDescriptiveContent[] = $item;
        return $this;
    }
    /**
     * Get HotelCodeCode value
     * @return string|null
     */
    public function getHotelCodeCode()
    {
        return $this->HotelCodeCode;
    }
    /**
     * Set HotelCodeCode value
     * @param string $hotelCodeCode
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
     */
    public function setHotelCodeCode($hotelCodeCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCodeCode) && !is_string($hotelCodeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCodeCode)), __LINE__);
        }
        $this->HotelCodeCode = $hotelCodeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelDescriptiveInfoRSHotelDescriptiveContents
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
