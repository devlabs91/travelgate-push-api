<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfRoomTypeType
     */
    public $RoomTypes;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRatePlanType
     */
    public $RatePlans;
    /**
     * The RoomRates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RoomRates
     */
    public $RoomRates;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GuestCountType
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DateTimeSpanType
     */
    public $TimeSpan;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CancelPenaltiesType
     */
    public $CancelPenalties;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TotalType
     */
    public $Total;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BasicPropertyInfo
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
     * @param \ArrayType\ArrayOfRoomTypeType $roomTypes
     * @param \ArrayType\ArrayOfRatePlanType $ratePlans
     * @param \StructType\RoomRates $roomRates
     * @param \StructType\GuestCountType $guestCounts
     * @param \StructType\DateTimeSpanType $timeSpan
     * @param \StructType\CancelPenaltiesType $cancelPenalties
     * @param \StructType\TotalType $total
     * @param \StructType\BasicPropertyInfo $basicPropertyInfo
     */
    public function __construct(\ArrayType\ArrayOfRoomTypeType $roomTypes = null, \ArrayType\ArrayOfRatePlanType $ratePlans = null, \StructType\RoomRates $roomRates = null, \StructType\GuestCountType $guestCounts = null, \StructType\DateTimeSpanType $timeSpan = null, \StructType\CancelPenaltiesType $cancelPenalties = null, \StructType\TotalType $total = null, \StructType\BasicPropertyInfo $basicPropertyInfo = null)
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
     * @return \ArrayType\ArrayOfRoomTypeType|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \ArrayType\ArrayOfRoomTypeType $roomTypes
     * @return \StructType\RoomStayType
     */
    public function setRoomTypes(\ArrayType\ArrayOfRoomTypeType $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \ArrayType\ArrayOfRatePlanType|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \ArrayType\ArrayOfRatePlanType $ratePlans
     * @return \StructType\RoomStayType
     */
    public function setRatePlans(\ArrayType\ArrayOfRatePlanType $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get RoomRates value
     * @return \StructType\RoomRates|null
     */
    public function getRoomRates()
    {
        return $this->RoomRates;
    }
    /**
     * Set RoomRates value
     * @param \StructType\RoomRates $roomRates
     * @return \StructType\RoomStayType
     */
    public function setRoomRates(\StructType\RoomRates $roomRates = null)
    {
        $this->RoomRates = $roomRates;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \StructType\GuestCountType|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \StructType\GuestCountType $guestCounts
     * @return \StructType\RoomStayType
     */
    public function setGuestCounts(\StructType\GuestCountType $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpan value
     * @return \StructType\DateTimeSpanType|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param \StructType\DateTimeSpanType $timeSpan
     * @return \StructType\RoomStayType
     */
    public function setTimeSpan(\StructType\DateTimeSpanType $timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return \StructType\CancelPenaltiesType|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param \StructType\CancelPenaltiesType $cancelPenalties
     * @return \StructType\RoomStayType
     */
    public function setCancelPenalties(\StructType\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\TotalType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\TotalType $total
     * @return \StructType\RoomStayType
     */
    public function setTotal(\StructType\TotalType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return \StructType\BasicPropertyInfo|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param \StructType\BasicPropertyInfo $basicPropertyInfo
     * @return \StructType\RoomStayType
     */
    public function setBasicPropertyInfo(\StructType\BasicPropertyInfo $basicPropertyInfo = null)
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
     * @return \StructType\RoomStayType
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
