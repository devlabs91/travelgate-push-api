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
        
        $class = HotelRatePlanInventoryRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $response = $class->retrieve();
        if($response) {
            $this->assertInstanceOf(OTA_HotelRatePlanRS::class, $response);
            if( $response->getErrors() ) {
                $this->assertInternalType( 'array', $response->getErrors()->getError() );
                foreach( $response->getErrors()->getError() AS $error ) {
                    $this->assertInstanceOf(ErrorType::class, $error);
                    $this->assertInternalType( 'string', $error->getShortText() );
                    echo(PHP_EOL.$error->getShortText().PHP_EOL);
                }
            }
            if($response->getRatePlans()) {
                $this->assertInternalType( 'array', $response->getRatePlans() );
                foreach($response->getRatePlans() AS $ratePlans) {
                    $this->assertInstanceOf(RatePlans::class, $ratePlans);
                    $this->assertInternalType( 'array', $ratePlans->getRatePlan() );
                    foreach($ratePlans->getRatePlan() AS $ratePlan) { 
                        $this->assertInstanceOf(HotelRatePlanType::class, $ratePlan);
                        if( $ratePlan->getSellableProducts() ) {
                            $this->assertInternalType( 'string', $ratePlan->getDescription()[0]->getText()[0]->get_() );
                            $this->assertInternalType( 'string', $ratePlan->getRatePlanCode() );
                            $this->assertInstanceOf(ArrayOfSellableProductsTypeSellableProduct::class, $ratePlan->getSellableProducts());
                            $this->assertInternalType( 'array', $ratePlan->getSellableProducts()->getSellableProduct() );
                            foreach($ratePlan->getSellableProducts()->getSellableProduct() AS $sellableProduct) {
                                $this->assertInstanceOf(SellableProduct::class, $sellableProduct);
                                if( $sellableProduct->getGuestRoom() ) {
                                    $this->assertInternalType( 'string', $sellableProduct->getGuestRoom()->getDescription()->getText()[0]->get_() );
                                    $this->assertInternalType( 'string', $sellableProduct->getInvCode() );
                                    $this->assertInternalType( 'array', $sellableProduct->getGuestRoom()->getOccupancy() );
                                    foreach($sellableProduct->getGuestRoom()->getOccupancy() AS $occupancy ) {
                                        if($occupancy->getAgeQualifyingCode()==10) {
                                            $this->assertInternalType( 'int', $occupancy->getMinOccupancy() );
                                            $this->assertInternalType( 'int', $occupancy->getMaxOccupancy() );
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $lastError = $class->hotel->getLastError();
            $this->assertInternalType( 'array', $lastError );
            foreach($lastError AS $key => $error) {
                $this->assertInstanceOf(\SoapFault::class, $error);
                $this->assertInternalType( 'string', $error->getMessage() );
                echo(PHP_EOL.$key.PHP_EOL);
                echo($error->getMessage().PHP_EOL);
            }
        }
    }
}