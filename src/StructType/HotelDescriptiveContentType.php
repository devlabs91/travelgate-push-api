<?php

namespace StructType;

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
     * @var \StructType\HotelInfoType
     */
    public $HotelInfo;
    /**
     * The FacilityInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FacilityInfoType
     */
    public $FacilityInfo;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Policies
     */
    public $Policies;
    /**
     * The AreaInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AreaInfoType
     */
    public $AreaInfo;
    /**
     * The AffiliationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AffiliationInfoType
     */
    public $AffiliationInfo;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultimediaDescriptionsType
     */
    public $MultimediaDescriptions;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfContactInfoRootType
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
     * @param \StructType\HotelInfoType $hotelInfo
     * @param \StructType\FacilityInfoType $facilityInfo
     * @param \StructType\Policies $policies
     * @param \StructType\AreaInfoType $areaInfo
     * @param \StructType\AffiliationInfoType $affiliationInfo
     * @param \StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @param \ArrayType\ArrayOfContactInfoRootType $contactInfos
     */
    public function __construct(\StructType\HotelInfoType $hotelInfo = null, \StructType\FacilityInfoType $facilityInfo = null, \StructType\Policies $policies = null, \StructType\AreaInfoType $areaInfo = null, \StructType\AffiliationInfoType $affiliationInfo = null, \StructType\MultimediaDescriptionsType $multimediaDescriptions = null, \ArrayType\ArrayOfContactInfoRootType $contactInfos = null)
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
     * @return \StructType\HotelInfoType|null
     */
    public function getHotelInfo()
    {
        return $this->HotelInfo;
    }
    /**
     * Set HotelInfo value
     * @param \StructType\HotelInfoType $hotelInfo
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setHotelInfo(\StructType\HotelInfoType $hotelInfo = null)
    {
        $this->HotelInfo = $hotelInfo;
        return $this;
    }
    /**
     * Get FacilityInfo value
     * @return \StructType\FacilityInfoType|null
     */
    public function getFacilityInfo()
    {
        return $this->FacilityInfo;
    }
    /**
     * Set FacilityInfo value
     * @param \StructType\FacilityInfoType $facilityInfo
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setFacilityInfo(\StructType\FacilityInfoType $facilityInfo = null)
    {
        $this->FacilityInfo = $facilityInfo;
        return $this;
    }
    /**
     * Get Policies value
     * @return \StructType\Policies|null
     */
    public function getPolicies()
    {
        return $this->Policies;
    }
    /**
     * Set Policies value
     * @param \StructType\Policies $policies
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setPolicies(\StructType\Policies $policies = null)
    {
        $this->Policies = $policies;
        return $this;
    }
    /**
     * Get AreaInfo value
     * @return \StructType\AreaInfoType|null
     */
    public function getAreaInfo()
    {
        return $this->AreaInfo;
    }
    /**
     * Set AreaInfo value
     * @param \StructType\AreaInfoType $areaInfo
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setAreaInfo(\StructType\AreaInfoType $areaInfo = null)
    {
        $this->AreaInfo = $areaInfo;
        return $this;
    }
    /**
     * Get AffiliationInfo value
     * @return \StructType\AffiliationInfoType|null
     */
    public function getAffiliationInfo()
    {
        return $this->AffiliationInfo;
    }
    /**
     * Set AffiliationInfo value
     * @param \StructType\AffiliationInfoType $affiliationInfo
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setAffiliationInfo(\StructType\AffiliationInfoType $affiliationInfo = null)
    {
        $this->AffiliationInfo = $affiliationInfo;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return \StructType\MultimediaDescriptionsType|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \StructType\MultimediaDescriptionsType $multimediaDescriptions
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setMultimediaDescriptions(\StructType\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get ContactInfos value
     * @return \ArrayType\ArrayOfContactInfoRootType|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param \ArrayType\ArrayOfContactInfoRootType $contactInfos
     * @return \StructType\HotelDescriptiveContentType
     */
    public function setContactInfos(\ArrayType\ArrayOfContactInfoRootType $contactInfos = null)
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
     * @return \StructType\HotelDescriptiveContentType
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
