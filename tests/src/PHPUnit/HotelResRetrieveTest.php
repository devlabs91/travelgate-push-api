<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

use Devlabs91\TravelgatePushApi\Factories\HotelResRetrieveAdapterFactory;
use Devlabs91\TravelgatePushApi\Adapters\HotelResRetrieveAdapter;
use Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS;
use Devlabs91\TravelgatePushApi\StructType\ErrorType;
use Devlabs91\TravelgatePushApi\StructType\HotelReservationsType;
use Devlabs91\TravelgatePushApi\StructType\HotelReservation;

class HotelResRetrieveTest extends \PHPUnit_Framework_TestCase
{

    const USERNAME = PHPUNIT_TG_USERNAME;
    const PASSWORD = PHPUNIT_TG_PASSWORD;
    const CLIENT_CODE = PHPUNIT_TG_CLIENT_CODE;
    const REQUESTOR_ID = PHPUNIT_TG_REQUESTOR_ID;
    const HOTEL_CODE = PHPUNIT_TG_HOTEL_CODE;
    
    /**
     * @var string
     */
    const OPTION_PREFIX = 'wsdl_';
    
    /**
     * Option key to define WSDL url
     * @var string
     */
    const WSDL_URL = 'wsdl_url';
    
    public function testHotelResRetrieveAdapterFactory() {
        
        $class = HotelResRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $this->assertInstanceOf( HotelResRetrieveAdapter::class, $class );
        
    }

    public function testHotelRatePlanInventoryRetrieve() {
        
        $class = HotelResRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
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
            $this->assertInstanceOf(OTA_HotelResRS::class, $response);
            if( $response->getErrors() ) {
                $this->assertInternalType( 'array', $response->getErrors()->getError() );
                foreach( $response->getErrors()->getError() AS $error ) {
                    $this->assertInstanceOf(ErrorType::class, $error);
                    $this->assertInternalType( 'string', $error->getShortText() );
                    echo(PHP_EOL.$error->getShortText().PHP_EOL);
                }
            }
            /** @var OTA_HotelResRS $response */
            if($response->getHotelReservations()) {
                $this->assertInternalType( 'array', $response->getHotelReservations() );
                foreach($response->getHotelReservations() AS $hotelReservations) {
                    $this->assertInstanceOf(HotelReservationsType::class, $hotelReservations);
                    $this->assertInternalType( 'array', $hotelReservations->getHotelReservation() );
                    foreach($hotelReservations->getHotelReservation() AS $hotelReservation) {
                        $this->assertInstanceOf(HotelReservation::class, $hotelReservation);
                    }
                }
            }
        }
        
    }
    
    public function testHotelRatePlanInventoryRetrieveMockup() {
        return;
        $class = HotelResRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        
        $response = $class->retrieve();
        
        print_r($response);
        
        echo("OK");exit;
        
    }
    
}