<?php

namespace Devlabs91\TravelgatePushApi\Models;

class BaseByGuestAmt
{
    /**
     * Total amount for @NumberOfGuests by day indicated. This amount doesn’t include tax.
     * @var float
     */
    public $AmountAfterTax;
    
    /**
     * How many adults are the @AmountAfterTax for day indicated. If @NumberOfGuests is not informed then @Type must be informed. The maximum @NumberOfGuests is the standard occupancy of the room.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfGuests;
    
    /**
     * Amounts are per Room or per Occupancy instead of per Pax. If @Type=25. If @Type=14, price is per occupancy, @Code is mandatory and @NumberOfGuests and AdditionalGuestAmounts are not allowed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    
    /**
     * Mandatory if @Type=14. The occupancy code is defined by AdultNumber-ChildNumber-InfantNumber. @Code for an occupancy of 2 adults, 1 child and 0 babies would be “2-1-0”.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    
    public function __construct( $amountAfterTax, $numberOfGuests = 2, $type = 25, $code = null ) {
        $this->AmountAfterTax = $amountAfterTax;
        $this->NumberOfGuests = $numberOfGuests;
        $this->Type = $type;
        $this->Code = $code;
    }
    
    /**
     * Get AmountAfterTax value
     * @return float|null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param float $amountAfterTax
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public function setAmountAfterTax($amountAfterTax = null)
    {
        $this->AmountAfterTax = $amountAfterTax;
        return $this;
    }
    
    /**
     * Get NumberOfGuests value
     * @return int|null
     */
    public function getNumberOfGuests()
    {
        return $this->NumberOfGuests;
    }
    /**
     * Set NumberOfGuests value
     * @param int $numberOfGuests
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt
     */
    public function setNumberOfGuests($numberOfGuests = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfGuests) && !is_numeric($numberOfGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfGuests)), __LINE__);
        }
        $this->NumberOfGuests = $numberOfGuests;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\TravelgatePushApi\StructType\TotalType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }

}
