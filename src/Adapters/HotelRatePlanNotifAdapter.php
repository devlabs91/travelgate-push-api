<?php 

namespace Devlabs91\TravelgatePushApi\Adapters;

use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSourceType;
use Devlabs91\TravelgatePushApi\StructType\RatePlan;
use Devlabs91\TravelgatePushApi\StructType\HotelRef;
use Devlabs91\TravelgatePushApi\StructType\HotelRatePlanNotif;
use Devlabs91\TravelgatePushApi\StructType\RatePlans;
use Devlabs91\TravelgatePushApi\Models\Hotel;
use Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType;
use Devlabs91\TravelgatePushApi\StructType\Rate;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelRatePlanTypeRate;
use Devlabs91\TravelgatePushApi\StructType\BaseByGuestAmt;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateUploadTypeBaseByGuestAmt;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateUploadTypeAdditionalGuestAmount;
use Devlabs91\TravelgatePushApi\Models\AdditionalGuestAmount;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct;
use Devlabs91\TravelgatePushApi\Models\SellableProduct;

class HotelRatePlanNotifAdapter extends BaseAdapter {

    /** @var \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRQ */
    public $request;
    
    public $hotelCode;
    
    public function __construct( $username, $password, $clientCode, $requestorId, $hotelCode, $primaryLangID ) {
        parent::__construct( $username, $password, $clientCode, $requestorId, $primaryLangID );
        
        $this->hotelCode = $hotelCode;
        $this->request = new \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRQ( new ArrayOfSourceType(), new RatePlans(), null, $primaryLangID );
        
        $this->addPOS( $this->request );
        $this->addSoapHeaderSecurity( $this->hotel );
    }

//    public function 
    
    /**
     * 
     * @return \Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS|NULL|NULL
     */
    public function retrieve( Hotel $hotel ) {
        $this->buildRequest($hotel);
        $parameters = new HotelRatePlanNotif( $this->request );
        
        if ( $this->hotel->HotelRatePlanNotif( $parameters ) !== false ) {
            return $this->hotel->getResult()->getHotelRatePlanNotifResult();
//            print_r($hotel->getResult());
        } else {
//            print_r($hotel->getLastError());
        }
        return null;
    }
    
    public function buildRequest( Hotel $hotel ) {
        
        $ratePlans = new RatePlans();$ratePlans->setHotelCode( $hotel->getHotelCode() );
        foreach( $hotel->getRatePlans() AS $ratePlan ) {
            
            $item = new HotelRatePlanType();
            $item->setRatePlanCode( $ratePlan->getRatePlanCode() );
            if( $ratePlan->getRatePlanStatusType() ) {
                $item->setRatePlanStatusType( $ratePlan->getRatePlanStatusType() );
            }
            if( $ratePlan->getBaseRatePlanCode() ) {
                $item->setBaseRatePlanCode( $ratePlan->getBaseRatePlanCode() );
            }
            if($ratePlan->getCurrencyCode() ) {
                $item->setCurrencyCode( $ratePlan->getCurrencyCode() );
            }

            $item->setRates( new ArrayOfHotelRatePlanTypeRate() );
            foreach( $ratePlan->getRates() AS $rate ) {
                $item->getRates()->addToRate( $this->createRate( $rate ) );
            }

            $item->setSellableProducts( new ArrayOfSellableProductsTypeSellableProduct() );
            foreach( $ratePlan->getSellableProducts() AS $sellableProcuct ) {
                $item->getSellableProducts()->addToSellableProduct( $this->createSellableProcuct( $sellableProcuct ) );
            }
            
            $ratePlans->addToRatePlan($item);
            
        }
        $this->request->setRatePlans($ratePlans);
        
    }
    
    public function createRate( \Devlabs91\TravelgatePushApi\Models\Rate $rate ) {
        $item = new Rate();
        $item->setStart( $rate->getStart() );
        $item->setEnd( $rate->getEnd() );
        if($rate->getAdjustedPercentage()) {
            $item->setAdjustedPercentage( $rate->getAdjustedPercentage() );
        }
        if($rate->getAdjustedAmount()) {
            $item->setAdjustedAmount( $rate->getAdjustedAmount() );
        }
        if($rate->getAdjustUpIndicator()) {
            $item->setAdjustUpIndicator( $rate->getAdjustUpIndicator() );
        }
        
        $baseByGuestAmts = new ArrayOfRateUploadTypeBaseByGuestAmt();
        foreach($rate->getBaseByGuestAmts() AS $baseByGuestAmt) {
            $baseByGuestAmts->addToBaseByGuestAmt( $this->createBaseByGuestAmt($baseByGuestAmt) );
        }
        $item->setBaseByGuestAmts( $baseByGuestAmts );
        
        if( $rate->getAdditionalGuestAmounts() ) {
            $additionalGuestAmounts = new ArrayOfRateUploadTypeAdditionalGuestAmount();
            foreach($rate->getAdditionalGuestAmounts() AS $additionalGuestAmount ) {
                $baseByGuestAmts->addToBaseByGuestAmt( $this->createBaseByGuestAmt( $additionalGuestAmount ) );
            }
            $item->setAdditionalGuestAmounts( $additionalGuestAmounts );
        }
        return $item;
    }
    
    public function createBaseByGuestAmt( \Devlabs91\TravelgatePushApi\Models\BaseByGuestAmt $baseByGuestAmt ) {
        $item = new BaseByGuestAmt();
        $item->setAmountAfterTax( $baseByGuestAmt->getAmountAfterTax() );
        if( $baseByGuestAmt->getNumberOfGuests() ) {
            $item->setNumberOfGuests( $baseByGuestAmt->getNumberOfGuests() );
        }
        if( $baseByGuestAmt->getType() ) {
            $item->setType( (string) $baseByGuestAmt->getType() );
        }
        if( $baseByGuestAmt->getCode() ) {
            $item->setCode( $baseByGuestAmt->getCode() );
        }
        return $item;
    }
    
    public function createAdditionalGuestAmounts( AdditionalGuestAmount $additionalGuestAmount ) {
        $item = new \Devlabs91\TravelgatePushApi\StructType\AdditionalGuestAmount();
        $item->setMaxAdditionalGuests( $additionalGuestAmount->getMaxAdditionalGuests() );
        if( $additionalGuestAmount->getType() ) {
            $item->setType( (string) $additionalGuestAmount->getType() );
        }
        $item->setAgeQualifyingCode( $additionalGuestAmount->getAgeQualifyingCode() );
        if($additionalGuestAmount->getAmount() ) {
            $item->setAmount( $additionalGuestAmount->getAmount() );
        }
        if($additionalGuestAmount->getPercent() ) {
            $item->setPercent( $additionalGuestAmount->getPercent() );
        }
        return $item;
    }
    
    public function createSellableProcuct( SellableProduct $sellableProcuct ) {
        $item = new \Devlabs91\TravelgatePushApi\StructType\SellableProduct();
        $item->setInvCode( $sellableProcuct->getInvCode() );
        $item->setInvType( $sellableProcuct->getInvType() );
        return $item;
    }
}