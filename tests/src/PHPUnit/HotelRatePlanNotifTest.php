<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;


use Devlabs91\TravelgatePushApi\Factories\HotelRatePlanNotifAdapterFactory;
use Devlabs91\TravelgatePushApi\Adapters\HotelRatePlanNotifAdapter;
use Devlabs91\TravelgatePushApi\Models\Hotel;
use Devlabs91\TravelgatePushApi\StructType\OTA_HotelRatePlanNotifRS;
use Devlabs91\TravelgatePushApi\StructType\SuccessType;
use Devlabs91\TravelgatePushApi\StructType\ErrorsType;
use Devlabs91\TravelgatePushApi\StructType\ErrorType;

class HotelRatePlanNotifTest extends \PHPUnit_Framework_TestCase
{

    const USERNAME = PHPUNIT_TG_USERNAME;
    const PASSWORD = PHPUNIT_TG_PASSWORD;
    const CLIENT_CODE = PHPUNIT_TG_CLIENT_CODE;
    const REQUESTOR_ID = PHPUNIT_TG_REQUESTOR_ID;
    const HOTEL_CODE = PHPUNIT_TG_HOTEL_CODE;
    
    public function testHotelRatePlanNotifAdapterFactory() {
        $class = HotelRatePlanNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $this->assertInstanceOf( HotelRatePlanNotifAdapter::class, $class );
    }

    public function testHotelRatePlanNotifSuccess() {
        
        $class = HotelRatePlanNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        $class->hotel->getSoapClient()->setMockResponse( file_get_contents(__DIR__ . '/../../resources/HotelRatePlanNotifRS/Success.xml') );
        
        $hotel = new Hotel( "1" );
        
        $response = $class->retrieve( $hotel );
        
        $this->assertInstanceOf(OTA_HotelRatePlanNotifRS::class, $response);
        
        $this->assertNull($response->getErrors());
        $this->assertInstanceOf(SuccessType::class, $response->getSuccess());
        
    }
    
    public function testHotelRatePlanNotifError() {
        
        $class = HotelRatePlanNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        $class->hotel->getSoapClient()->setMockResponse( file_get_contents(__DIR__ . '/../../resources/HotelRatePlanNotifRS/Error.xml') );
        
        $hotel = new Hotel( "1" );
        
        $response = $class->retrieve( $hotel );
        
        $this->assertInstanceOf(OTA_HotelRatePlanNotifRS::class, $response);
        
        $this->assertNull($response->getSuccess());
        $this->assertInstanceOf(ErrorsType::class, $response->getErrors());
        
        $this->assertInternalType( 'array', $response->getErrors()->getError() );
        foreach( $response->getErrors()->getError() AS $error ) {
            $this->assertInstanceOf(ErrorType::class, $error);
            $this->assertInternalType( 'string', $error->getShortText() );
            $this->assertEquals('Incomplete AdditionalGuestAmount values', $error->getShortText());
            $this->assertEquals(7, $error->getCode());
        }
        
    }
}