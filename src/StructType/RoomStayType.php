<?php

namespace Devlabs91\TravelgatePushApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayType StructType
 * @subpackage Structs
 */
class RoomStayType extends AbstractStructBase
{
    /**
     * The RoomTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType
     */
    public $RoomTypes;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType
     */
    public $RatePlans;
    /**
     * The RoomRates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\RoomRates
     */
    public $RoomRates;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\GuestCountType
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType
     */
    public $TimeSpan;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType
     */
    public $CancelPenalties;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public $Total;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo
     */
    public $BasicPropertyInfo;
    /**
     * Constructor method for RoomStayType
     * @uses RoomStayType::setRoomTypes()
     * @uses RoomStayType::setRatePlans()
     * @uses RoomStayType::setRoomRates()
     * @uses RoomStayType::setGuestCounts()
     * @uses RoomStayType::setTimeSpan()
     * @uses RoomStayType::setCancelPenalties()
     * @uses RoomStayType::setTotal()
     * @uses RoomStayType::setBasicPropertyInfo()
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType $roomTypes
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType $ratePlans
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomRates $roomRates
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @param \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $timeSpan
     * @param \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPenalties
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     * @param \Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo $basicPropertyInfo
     */
    public function __construct(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType $roomTypes = null, \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType $ratePlans = null, \Devlabs91\TravelgatePushApi\StructType\RoomRates $roomRates = null, \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null, \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $timeSpan = null, \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPenalties = null, \Devlabs91\TravelgatePushApi\StructType\TotalType $total = null, \Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo $basicPropertyInfo = null)
    {
        $this
            ->setRoomTypes($roomTypes)
            ->setRatePlans($ratePlans)
            ->setRoomRates($roomRates)
            ->setGuestCounts($guestCounts)
            ->setTimeSpan($timeSpan)
            ->setCancelPenalties($cancelPenalties)
            ->setTotal($total)
            ->setBasicPropertyInfo($basicPropertyInfo);
    }
    /**
     * Get RoomTypes value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType $roomTypes
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setRoomTypes(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType $ratePlans
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setRatePlans(\Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get RoomRates value
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomRates|null
     */
    public function getRoomRates()
    {
        return $this->RoomRates;
    }
    /**
     * Set RoomRates value
     * @param \Devlabs91\TravelgatePushApi\StructType\RoomRates $roomRates
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setRoomRates(\Devlabs91\TravelgatePushApi\StructType\RoomRates $roomRates = null)
    {
        $this->RoomRates = $roomRates;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \Devlabs91\TravelgatePushApi\StructType\GuestCountType|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setGuestCounts(\Devlabs91\TravelgatePushApi\StructType\GuestCountType $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpan value
     * @return \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param \Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $timeSpan
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setTimeSpan(\Devlabs91\TravelgatePushApi\StructType\DateTimeSpanType $timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param \Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPenalties
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setCancelPenalties(\Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Total value
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Devlabs91\TravelgatePushApi\StructType\TotalType $total
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setTotal(\Devlabs91\TravelgatePushApi\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return \Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param \Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo $basicPropertyInfo
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
     */
    public function setBasicPropertyInfo(\Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo $basicPropertyInfo = null)
    {
        $this->BasicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\TravelgatePushApi\StructType\RoomStayType
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
