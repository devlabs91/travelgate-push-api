<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResRequestType StructType
 * @subpackage Structs
 */
class HotelResRequestType extends AbstractStructBase
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
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType
     */
    public $HotelReservations;
    /**
     * The ResStatus
     * @var string
     */
    public $ResStatus;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * Constructor method for HotelResRequestType
     * @uses HotelResRequestType::setPOS()
     * @uses HotelResRequestType::setHotelReservations()
     * @uses HotelResRequestType::setResStatus()
     * @uses HotelResRequestType::setPrimaryLangID()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations
     * @param string $resStatus
     * @param string $primaryLangID
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null, \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations = null, $resStatus = null, $primaryLangID = null)
    {
        $this
            ->setPOS($pOS)
            ->setHotelReservations($hotelReservations)
            ->setResStatus($resStatus)
            ->setPrimaryLangID($primaryLangID);
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
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRequestType
     */
    public function setPOS(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param \Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRequestType
     */
    public function setHotelReservations(\Devlabs91\TravelgatePushApi\StructType\HotelReservationsType $hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
        return $this;
    }
    /**
     * Get ResStatus value
     * @return string|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TransactionActionType::valueIsValid()
     * @uses \Devlabs91\TravelgatePushApi\EnumType\TransactionActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resStatus
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRequestType
     */
    public function setResStatus($resStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\TravelgatePushApi\EnumType\TransactionActionType::valueIsValid($resStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resStatus, implode(', ', \Devlabs91\TravelgatePushApi\EnumType\TransactionActionType::getValidValues())), __LINE__);
        }
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Get PrimaryLangID value
     * @return string|null
     */
    public function getPrimaryLangID()
    {
        return $this->PrimaryLangID;
    }
    /**
     * Set PrimaryLangID value
     * @param string $primaryLangID
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRequestType
     */
    public function setPrimaryLangID($primaryLangID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryLangID) && !is_string($primaryLangID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryLangID)), __LINE__);
        }
        $this->PrimaryLangID = $primaryLangID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\HotelResRequestType
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
