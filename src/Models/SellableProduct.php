<?php

namespace Devlabs91\TravelgatePushApi\Models;

class SellableProduct
{
    /**
     * Sellable Product Code.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $InvCode;
    
    /**
     * Sellable product type (ROOM).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $InvType;
    
    public function __construct( $invCode, $invType = 'ROOM' ) {
        $this->InvCode = $invCode;
        $this->InvType = $invType;
    }
    
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode() {
        return $this->InvCode;
    }
    
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvCode($invCode = null) {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    
    /**
     * Get InvType value
     * @return string|null
     */
    public function getInvType() {
        return $this->InvType;
    }
    
    /**
     * Set InvType value
     * @param string $invType
     * @return \Devlabs91\TravelgatePushApi\StructType\SellableProduct
     */
    public function setInvType($invType = null) {
        // validation for constraint: string
        if (!is_null($invType) && !is_string($invType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invType)), __LINE__);
        }
        $this->InvType = $invType;
        return $this;
    }
    
}
