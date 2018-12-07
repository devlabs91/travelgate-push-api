<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveContentType StructType
 * @subpackage Structs
 */
class HotelDescriptiveContentType extends AbstractStructBase
{
    /**
     * The HotelInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelInfoType
     */
    public $HotelInfo;
    /**
     * The FacilityInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType
     */
    public $FacilityInfo;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\Policies
     */
    public $Policies;
    /**
     * The AreaInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\AreaInfoType
     */
    public $AreaInfo;
    /**
     * The AffiliationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType
     */
    public $AffiliationInfo;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType
     */
    public $MultimediaDescriptions;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType
     */
    public $ContactInfos;
    /**
     * Constructor method for HotelDescriptiveContentType
     * @uses HotelDescriptiveContentType::setHotelInfo()
     * @uses HotelDescriptiveContentType::setFacilityInfo()
     * @uses HotelDescriptiveContentType::setPolicies()
     * @uses HotelDescriptiveContentType::setAreaInfo()
     * @uses HotelDescriptiveContentType::setAffiliationInfo()
     * @uses HotelDescriptiveContentType::setMultimediaDescriptions()
     * @uses HotelDescriptiveContentType::setContactInfos()
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelInfoType $hotelInfo
     * @param \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType $facilityInfo
     * @param \Devlabs91\TravelgatePushApi\StructType\Policies $policies
     * @param \Devlabs91\TravelgatePushApi\StructType\AreaInfoType $areaInfo
     * @param \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType $affiliationInfo
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType $contactInfos
     */
    public function __construct(\Devlabs91\TravelgatePushApi\StructType\HotelInfoType $hotelInfo = null, \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType $facilityInfo = null, \Devlabs91\TravelgatePushApi\StructType\Policies $policies = null, \Devlabs91\TravelgatePushApi\StructType\AreaInfoType $areaInfo = null, \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType $affiliationInfo = null, \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType $contactInfos = null)
    {
        $this
            ->setHotelInfo($hotelInfo)
            ->setFacilityInfo($facilityInfo)
            ->setPolicies($policies)
            ->setAreaInfo($areaInfo)
            ->setAffiliationInfo($affiliationInfo)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setContactInfos($contactInfos);
    }
    /**
     * Get HotelInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelInfoType|null
     */
    public function getHotelInfo()
    {
        return $this->HotelInfo;
    }
    /**
     * Set HotelInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelInfoType $hotelInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setHotelInfo(\Devlabs91\TravelgatePushApi\StructType\HotelInfoType $hotelInfo = null)
    {
        $this->HotelInfo = $hotelInfo;
        return $this;
    }
    /**
     * Get FacilityInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType|null
     */
    public function getFacilityInfo()
    {
        return $this->FacilityInfo;
    }
    /**
     * Set FacilityInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\FacilityInfoType $facilityInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setFacilityInfo(\Devlabs91\TravelgatePushApi\StructType\FacilityInfoType $facilityInfo = null)
    {
        $this->FacilityInfo = $facilityInfo;
        return $this;
    }
    /**
     * Get Policies value
     * @return \Devlabs91\TravelgatePushApi\StructType\Policies|null
     */
    public function getPolicies()
    {
        return $this->Policies;
    }
    /**
     * Set Policies value
     * @param \Devlabs91\TravelgatePushApi\StructType\Policies $policies
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setPolicies(\Devlabs91\TravelgatePushApi\StructType\Policies $policies = null)
    {
        $this->Policies = $policies;
        return $this;
    }
    /**
     * Get AreaInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\AreaInfoType|null
     */
    public function getAreaInfo()
    {
        return $this->AreaInfo;
    }
    /**
     * Set AreaInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\AreaInfoType $areaInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setAreaInfo(\Devlabs91\TravelgatePushApi\StructType\AreaInfoType $areaInfo = null)
    {
        $this->AreaInfo = $areaInfo;
        return $this;
    }
    /**
     * Get AffiliationInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType|null
     */
    public function getAffiliationInfo()
    {
        return $this->AffiliationInfo;
    }
    /**
     * Set AffiliationInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType $affiliationInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setAffiliationInfo(\Devlabs91\TravelgatePushApi\StructType\AffiliationInfoType $affiliationInfo = null)
    {
        $this->AffiliationInfo = $affiliationInfo;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setMultimediaDescriptions(\Devlabs91\TravelgatePushApi\StructType\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get ContactInfos value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType $contactInfos
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
     */
    public function setContactInfos(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfContactInfoRootType $contactInfos = null)
    {
        $this->ContactInfos = $contactInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelDescriptiveContentType
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
