<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRates StructType
 * @subpackage Structs
 */
class RoomRates extends AbstractStructBase
{
    /**
     * The RoomRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RoomRate[]
     */
    public $RoomRate;
    /**
     * The MoreRatesExistInd
     * @var string
     */
    public $MoreRatesExistInd;
    /**
     * Constructor method for RoomRates
     * @uses RoomRates::setRoomRate()
     * @uses RoomRates::setMoreRatesExistInd()
     * @param \StructType\RoomRate[] $roomRate
     * @param string $moreRatesExistInd
     */
    public function __construct(array $roomRate = array(), $moreRatesExistInd = null)
    {
        $this
            ->setRoomRate($roomRate)
            ->setMoreRatesExistInd($moreRatesExistInd);
    }
    /**
     * Get RoomRate value
     * @return \StructType\RoomRate[]|null
     */
    public function getRoomRate()
    {
        return $this->RoomRate;
    }
    /**
     * Set RoomRate value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomRate[] $roomRate
     * @return \StructType\RoomRates
     */
    public function setRoomRate(array $roomRate = array())
    {
        foreach ($roomRate as $roomRatesRoomRateItem) {
            // validation for constraint: itemType
            if (!$roomRatesRoomRateItem instanceof \StructType\RoomRate) {
                throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of \StructType\RoomRate, "%s" given', is_object($roomRatesRoomRateItem) ? get_class($roomRatesRoomRateItem) : gettype($roomRatesRoomRateItem)), __LINE__);
            }
        }
        $this->RoomRate = $roomRate;
        return $this;
    }
    /**
     * Add item to RoomRate value
     * @throws \InvalidArgumentException
     * @param \StructType\RoomRate $item
     * @return \StructType\RoomRates
     */
    public function addToRoomRate(\StructType\RoomRate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RoomRate) {
            throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of \StructType\RoomRate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomRate[] = $item;
        return $this;
    }
    /**
     * Get MoreRatesExistInd value
     * @return string|null
     */
    public function getMoreRatesExistInd()
    {
        return $this->MoreRatesExistInd;
    }
    /**
     * Set MoreRatesExistInd value
     * @param string $moreRatesExistInd
     * @return \StructType\RoomRates
     */
    public function setMoreRatesExistInd($moreRatesExistInd = null)
    {
        // validation for constraint: string
        if (!is_null($moreRatesExistInd) && !is_string($moreRatesExistInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moreRatesExistInd)), __LINE__);
        }
        $this->MoreRatesExistInd = $moreRatesExistInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RoomRates
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
