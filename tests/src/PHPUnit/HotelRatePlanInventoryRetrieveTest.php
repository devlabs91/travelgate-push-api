<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

use Devlabs91\TravelgatePushApi\Factories\HotelRatePlanInventoryRetrieveAdapterFactory;
use Devlabs91\TravelgatePushApi\Adapters\HotelRatePlanInventoryRetrieveAdapter;
use Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanRS;
use Devlabs91\TravelgatePushApi\StructType\ErrorType;
use Devlabs91\TravelgatePushApi\StructType\RatePlans;
use Devlabs91\TravelgatePushApi\StructType\HotelRatePlanType;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfSellableProductsTypeSellableProduct;
use Devlabs91\TravelgatePushApi\StructType\SellableProduct;

class HotelRatePlanInventoryRetrieveTest extends \PHPUnit_Framework_TestCase
{

    const USERNAME = PHPUNIT_TG_USERNAME;
    const PASSWORD = PHPUNIT_TG_PASSWORD;
    const CLIENT_CODE = PHPUNIT_TG_CLIENT_CODE;
    const REQUESTOR_ID = PHPUNIT_TG_REQUESTOR_ID;
    const HOTEL_CODE = PHPUNIT_TG_HOTEL_CODE;
    
    public function testHotelRatePlanInventoryRetrieveAdapterFactory() {
        $class = HotelRatePlanInventoryRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $this->assertInstanceOf( HotelRatePlanInventoryRetrieveAdapter::class, $class );
    }

    public function testHotelRatePlanInventoryRetrieve() {
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelRatePlanInventoryRetrieveRS/HotelRatePlanInventoryRetrieveRS.xml') );
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelRatePlanInventoryRetrieveRS/DerivedRatePlan.xml') );
    }
    
    public function retrieveAndAssertHotelRatePlanInventoryRetrieve( $mockResponse ) {
        
        $class = HotelRatePlanInventoryRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        $class->hotel->getSoapClient()->setMockResponse( $mockResponse );
        
        $response = $class->retrieve();
        if(!$response) {
            $lastError = $class->hotel->getLastError();
            $this->assertInternalType( 'array', $lastError );
            foreach($lastError AS $key => $error) {
                $this->assertInstanceOf(\SoapFault::class, $error);
                $this->assertInternalType( 'string', $error->getMessage() );
                echo(PHP_EOL.$key.PHP_EOL);
                echo($error->getMessage().PHP_EOL);
            }
        } else {
            $this->assertInstanceOf(OTA_HotelRatePlanRS::class, $response);
            if( $response->getErrors() ) {
                $this->assertInternalType( 'array', $response->getErrors()->getError() );
                foreach( $response->getErrors()->getError() AS $error ) {
                    $this->assertInstanceOf(ErrorType::class, $error);
                    $this->assertInternalType( 'string', $error->getShortText() );
                    echo(PHP_EOL.$error->getShortText().PHP_EOL);
                }
            }
            if( $response->getRatePlans() ) {
                $this->assertRatePlans( $response );
            }
        }
    }
    
    public function assertRatePlans( OTA_HotelRatePlanRS $response) {

        /* Present when sucess */
        $this->assertInternalType( 'array', $response->getRatePlans() );
        foreach($response->getRatePlans() AS $ratePlans) {
            $this->assertInstanceOf(RatePlans::class, $ratePlans);

            /* Hotel code whose information is provided by the method. */
            $this->assertInternalType( 'string', $ratePlans->getHotelCode() );
            
            /* Hotel name. */
            $this->assertInternalType( 'string', $ratePlans->getHotelName() );
            
            /* Present when rates exists. */
            $this->assertInternalType( 'array', $ratePlans->getRatePlan() );
            foreach($ratePlans->getRatePlan() AS $ratePlan) {
                $this->assertInstanceOf(HotelRatePlanType::class, $ratePlan);

                /* Rate plan code. */
                $this->assertInternalType( 'string', $ratePlan->getRatePlanCode() );

                /* Active or Deactivated. */
                $this->assertInternalType( 'string', $ratePlan->getRatePlanStatusType() );

                /* OTA RPT Code (11 - Package). */
                if( $ratePlan->getRatePlanType() ) {
                    $this->assertInternalType( 'string', $ratePlan->getRatePlanType() );
                }

                /* Used to indicate the rate plan is subject to yield management logic. 
                 * When false, the rate plan is not yieldable. When true or it’s not returned, the rate plan is yieldable.*/
                if( $ratePlan->getYieldableIndicator() ) {
                    $this->assertInternalType( 'boolean', $ratePlan->getYieldableIndicator() );
                }

                /* ISO Currency (EUR). Only null for derived rates. */
                if( $ratePlan->getCurrencyCode() ) {
                    $this->assertInternalType( 'string', $ratePlan->getCurrencyCode() );
                }

                /* Start date of the rate booking window (Booking Dates for wich the rate will be available). */
                if( $ratePlan->getStart() ) {
                    $this->assertInternalType( 'string', $ratePlan->getStart() );
                }

                /* End date of the rate booking window (Booking Dates for wich the rate will be available). */
                if( $ratePlan->getEnd() ) {
                    $this->assertInternalType( 'string', $ratePlan->getEnd() );
                }
                
                /* Duration of the rate booking window. Only present if Start and End are not. 
                 * When present value is always 0 and means the rate has no booking window (available all dates).*/
                if( $ratePlan->getDuration() ) {
                    $this->assertInternalType( 'string', $ratePlan->getDuration() );
                }
                
                /* List of sellable products. In derived rates, if it is not present it applies to all rooms. 
                 * In other cases, it informs the rooms that applies. */
                if( $ratePlan->getSellableProducts() ) {
                    
                    $this->assertInternalType( 'string', $ratePlan->getDescription()[0]->getText()[0]->get_() );
                    $this->assertInstanceOf(ArrayOfSellableProductsTypeSellableProduct::class, $ratePlan->getSellableProducts());
                    $this->assertInternalType( 'array', $ratePlan->getSellableProducts()->getSellableProduct() );
                    foreach($ratePlan->getSellableProducts()->getSellableProduct() AS $sellableProduct) {
                        
                        /* Present if rooms associed with this rate. */
                        $this->assertInstanceOf(SellableProduct::class, $sellableProduct);
                        
                        /* */
                        if( $sellableProduct->getGuestRoom() ) {
                            
                            /* Room description. */
                            $this->assertInternalType( 'string', $sellableProduct->getGuestRoom()->getDescription()->getText()[0]->get_() );
                            
                            /* Sellers internal Product Code. Channels can ignore. */
                            $this->assertInternalType( 'string', $sellableProduct->getInvCode() );
                            
                            /* */
                            $this->assertInternalType( 'array', $sellableProduct->getGuestRoom()->getOccupancy() );
                            foreach($sellableProduct->getGuestRoom()->getOccupancy() AS $occupancy ) {
                                
                                /* (10 - Adult,8 - Child,7 - Infant). */
                                if($occupancy->getAgeQualifyingCode()==10) {
                                    
                                    /* Min occupation. */
                                    $this->assertInternalType( 'int', $occupancy->getMinOccupancy() );
                                    
                                    /* Max occupation. */
                                    $this->assertInternalType( 'int', $occupancy->getMaxOccupancy() );
                                    
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
}