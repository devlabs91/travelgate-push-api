<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelInfoType StructType
 * @subpackage Structs
 */
class HotelInfoType extends AbstractStructBase
{
    /**
     * The CategoryCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CategoryCodesType
     */
    public $CategoryCodes;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Descriptions
     */
    public $Descriptions;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Position
     */
    public $Position;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService
     */
    public $Services;
    /**
     * The WhenBuilt
     * @var string
     */
    public $WhenBuilt;
    /**
     * The LastUpdated
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for HotelInfoType
     * @uses HotelInfoType::setCategoryCodes()
     * @uses HotelInfoType::setDescriptions()
     * @uses HotelInfoType::setPosition()
     * @uses HotelInfoType::setServices()
     * @uses HotelInfoType::setWhenBuilt()
     * @uses HotelInfoType::setLastUpdated()
     * @param \Devlabs91\TravelgatePushApi\StructType\CategoryCodesType $categoryCodes
     * @param \Devlabs91\TravelgatePushApi\StructType\Descriptions $descriptions
     * @param \Devlabs91\TravelgatePushApi\StructType\Position $position
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService $services
     * @param string $whenBuilt
     * @param string $lastUpdated
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\CategoryCodesType $categoryCodes = null, \Devlabs91\TravelgatePushApi\StructType\Descriptions $descriptions = null, \Devlabs91\TravelgatePushApi\StructType\Position $position = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService $services = null, $whenBuilt = null, $lastUpdated = null)
    {
        $this
            ->setCategoryCodes($categoryCodes)
            ->setDescriptions($descriptions)
            ->setPosition($position)
            ->setServices($services)
            ->setWhenBuilt($whenBuilt)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get CategoryCodes value
     * @return \Devlabs91\TravelgatePushApi\StructType\CategoryCodesType|null
     */
    public function getCategoryCodes()
    {
        return $this->CategoryCodes;
    }
    /**
     * Set CategoryCodes value
     * @param \Devlabs91\TravelgatePushApi\StructType\CategoryCodesType $categoryCodes
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setCategoryCodes(\Devlabs91\TravelgatePushApi\StructType\CategoryCodesType $categoryCodes = null)
    {
        $this->CategoryCodes = $categoryCodes;
        return $this;
    }
    /**
     * Get Descriptions value
     * @return \Devlabs91\TravelgatePushApi\StructType\Descriptions|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Devlabs91\TravelgatePushApi\StructType\Descriptions $descriptions
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setDescriptions(\Devlabs91\TravelgatePushApi\StructType\Descriptions $descriptions = null)
    {
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Get Position value
     * @return \Devlabs91\TravelgatePushApi\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Devlabs91\TravelgatePushApi\StructType\Position $position
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setPosition(\Devlabs91\TravelgatePushApi\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Services value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService $services
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setServices(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelInfoTypeService $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Get WhenBuilt value
     * @return string|null
     */
    public function getWhenBuilt()
    {
        return $this->WhenBuilt;
    }
    /**
     * Set WhenBuilt value
     * @param string $whenBuilt
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setWhenBuilt($whenBuilt = null)
    {
        // validation for constraint: string
        if (!is_null($whenBuilt) && !is_string($whenBuilt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($whenBuilt)), __LINE__);
        }
        $this->WhenBuilt = $whenBuilt;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
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
