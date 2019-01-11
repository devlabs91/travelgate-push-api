<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

use Devlabs91\TravelgatePushApi\Factories\HotelAvailNotifAdapterFactory;
use Devlabs91\TravelgatePushApi\Adapters\HotelAvailNotifAdapter;
use Devlabs91\TravelgatePushApi\Models\Hotel;
use Devlabs91\TravelgatePushApi\Models\AvailStatusMessage;
use Devlabs91\TravelgatePushApi\Models\StatusApplicationControl;
use Devlabs91\TravelgatePushApi\StructType\OTA_HotelAvailNotifRS;
use Devlabs91\TravelgatePushApi\StructType\ErrorType;
use Devlabs91\TravelgatePushApi\StructType\SuccessType;
use Devlabs91\TravelgatePushApi\StructType\ErrorsType;

class HotelAvailNotifTest extends \PHPUnit_Framework_TestCase
{

    const USERNAME = PHPUNIT_TG_USERNAME;
    const PASSWORD = PHPUNIT_TG_PASSWORD;
    const CLIENT_CODE = PHPUNIT_TG_CLIENT_CODE;
    const REQUESTOR_ID = PHPUNIT_TG_REQUESTOR_ID;
    const HOTEL_CODE = PHPUNIT_TG_HOTEL_CODE;
    
    public function testHotelAvailNotifAdapterFactory() {
        $class = HotelAvailNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $this->assertInstanceOf( HotelAvailNotifAdapter::class, $class );
    }

    public function testHotelAvailNotifSuccess() {
        
        $class = HotelAvailNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        $class->hotel->getSoapClient()->setMockResponse( file_get_contents(__DIR__ . '/../../resources/HotelAvailNotifRS/Success.xml') );
        
        $hotel = new Hotel( "1" );
        $availStatusMessage = new AvailStatusMessage( 10 );
        $availStatusMessage->setStatusApplicationControl( new StatusApplicationControl( new \DateTime( '2019-01-01' ), new \DateTime( '2019-01-02' ), 'ABC1234', 'INV1234' ) );
        $hotel->addToAvailStatusMessages( $availStatusMessage );
        
        $response = $class->retrieve( $hotel );
        
        $this->assertInstanceOf(OTA_HotelAvailNotifRS::class, $response);
        
        $this->assertNull($response->getErrors());
        $this->assertInstanceOf(SuccessType::class, $response->getSuccess());
        
    }
    
    public function testHotelAvailNotifError() {
        
        $class = HotelAvailNotifAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $class->setHotel( new HotelSoapClient( $class->getOptions() ) );
        $class->hotel->getSoapClient()->setMockResponse( file_get_contents(__DIR__ . '/../../resources/HotelAvailNotifRS/Error.xml') );
        
        $hotel = new Hotel( "1" );
        $availStatusMessage = new AvailStatusMessage( 10 );
        $availStatusMessage->setStatusApplicationControl( new StatusApplicationControl( new \DateTime( '2019-01-01' ), new \DateTime( '2019-01-02' ), 'ABC1234', 'INV1234' ) );
        $hotel->addToAvailStatusMessages( $availStatusMessage );
        
        $response = $class->retrieve( $hotel );
        
        $this->assertInstanceOf(OTA_HotelAvailNotifRS::class, $response);
        
        $this->assertNull($response->getSuccess());
        $this->assertInstanceOf(ErrorsType::class, $response->getErrors());
        
        $this->assertInternalType( 'array', $response->getErrors()->getError() );
        foreach( $response->getErrors()->getError() AS $error ) {
            $this->assertInstanceOf(ErrorType::class, $error);
            $this->assertInternalType( 'string', $error->getShortText() );
            $this->assertEquals('AvailStatusMessages not found', $error->getShortText());
            $this->assertEquals(2, $error->getCode());
        }
        
    }
}