<?php

namespace Devlabs91\TravelgatePushApi\Tests\PHPUnit;

use Devlabs91\TravelgatePushApi\Factories\HotelResRetrieveAdapterFactory;
use Devlabs91\TravelgatePushApi\Adapters\HotelResRetrieveAdapter;
use Devlabs91\TravelgatePushApi\StructType\OTA_HotelResRS;
use Devlabs91\TravelgatePushApi\StructType\ErrorType;
use Devlabs91\TravelgatePushApi\StructType\HotelReservationsType;
use Devlabs91\TravelgatePushApi\StructType\HotelReservation;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomStaysTypeRoomStay;
use Devlabs91\TravelgatePushApi\StructType\RoomStay;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRatePlanType;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRoomTypeType;
use Devlabs91\TravelgatePushApi\StructType\RoomTypeType;
use Devlabs91\TravelgatePushApi\StructType\RatePlanType;
use Devlabs91\TravelgatePushApi\StructType\CommissionType;
use Devlabs91\TravelgatePushApi\StructType\RoomRates;
use Devlabs91\TravelgatePushApi\StructType\RoomRate;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfRateTypeRate;
use Devlabs91\TravelgatePushApi\StructType\Rate;
use Devlabs91\TravelgatePushApi\StructType\TotalType;
use Devlabs91\TravelgatePushApi\StructType\CancelPenaltiesType;
use Devlabs91\TravelgatePushApi\StructType\CancelPenaltyType;
use Devlabs91\TravelgatePushApi\StructType\Deadline;
use Devlabs91\TravelgatePushApi\StructType\AmountPercentType;
use Devlabs91\TravelgatePushApi\StructType\BasicPropertyInfo;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfServiceRPHsTypeServiceRPH;
use Devlabs91\TravelgatePushApi\StructType\ServiceRPH;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfResGuestType;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfProfilesTypeProfileInfo;
use Devlabs91\TravelgatePushApi\StructType\ProfileInfo;
use Devlabs91\TravelgatePushApi\StructType\ProfileType;
use Devlabs91\TravelgatePushApi\StructType\CustomerType;
use Devlabs91\TravelgatePushApi\StructType\PersonNameType;
use Devlabs91\TravelgatePushApi\StructType\GuestCountType;
use Devlabs91\TravelgatePushApi\StructType\GuestCount;
use Devlabs91\TravelgatePushApi\StructType\ResGlobalInfoType;
use Devlabs91\TravelgatePushApi\StructType\GuaranteeType;
use Devlabs91\TravelgatePushApi\StructType\GuaranteeAccepted;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfGuaranteeTypeGuaranteeAccepted;
use Devlabs91\TravelgatePushApi\StructType\PaymentCardType;
use Devlabs91\TravelgatePushApi\StructType\EncryptionTokenType;
use Devlabs91\TravelgatePushApi\StructType\TPA_ExtensionsType;
use Devlabs91\TravelgatePushApi\ArrayType\ArrayOfHotelReservationIDsTypeHotelReservationID;
use Devlabs91\TravelgatePushApi\StructType\HotelReservationID;
use Devlabs91\TravelgatePushApi\StructType\Telephone;
use Devlabs91\TravelgatePushApi\StructType\Email;
use Devlabs91\TravelgatePushApi\StructType\Address;
use Devlabs91\TravelgatePushApi\StructType\StateProvType;
use Devlabs91\TravelgatePushApi\StructType\CountryNameType;
use Devlabs91\TravelgatePushApi\StructType\ParagraphType;
use Devlabs91\TravelgatePushApi\StructType\ResGuestType;

class HotelResRetrieveTest extends \PHPUnit_Framework_TestCase
{

    const USERNAME = PHPUNIT_TG_USERNAME;
    const PASSWORD = PHPUNIT_TG_PASSWORD;
    const CLIENT_CODE = PHPUNIT_TG_CLIENT_CODE;
    const REQUESTOR_ID = PHPUNIT_TG_REQUESTOR_ID;
    const HOTEL_CODE = PHPUNIT_TG_HOTEL_CODE;
    
    public function testHotelResRetrieveAdapterFactory() {
        $class = HotelResRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
        $this->assertInstanceOf( HotelResRetrieveAdapter::class, $class );
    }

    public function testHotelRatePlanInventoryRetrieve() {
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS/NoReservations.xml') );
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS/GuaranteeMerchantPayment.xml') );
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS/Guarantee.xml') );
        $this->retrieveAndAssertHotelRatePlanInventoryRetrieve( file_get_contents(__DIR__ . '/../../resources/HotelResRetrieveRS/GuaranteeURLCreditCardDetails.xml') );
    }
    
    public function retrieveAndAssertHotelRatePlanInventoryRetrieve( $mockResponse ) {
        
        $class = HotelResRetrieveAdapterFactory::factory( $this::USERNAME, $this::PASSWORD, $this::CLIENT_CODE, $this::REQUESTOR_ID, $this::HOTEL_CODE );
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
            $this->assertInstanceOf(OTA_HotelResRS::class, $response);
            if( $response->getErrors() ) {
                $this->assertInternalType( 'array', $response->getErrors()->getError() );
                foreach( $response->getErrors()->getError() AS $error ) {
                    $this->assertInstanceOf(ErrorType::class, $error);
                    $this->assertInternalType( 'string', $error->getShortText() );
                    echo(PHP_EOL.$error->getShortText().PHP_EOL);
                }
            }
            if( $response->getHotelReservations() ) {
                $this->assertHotelReservations( $response );
            }
        }
    }

    public function assertHotelReservations( OTA_HotelResRS $response ) {
        $this->assertInternalType( 'array', $response->getHotelReservations() );
        foreach($response->getHotelReservations() AS $hotelReservations) {
            $this->assertInstanceOf(HotelReservationsType::class, $hotelReservations);
            $this->assertInternalType( 'array', $hotelReservations->getHotelReservation() );
            foreach($hotelReservations->getHotelReservation() AS $hotelReservation) {
                $this->assertInstanceOf(HotelReservation::class, $hotelReservation);

                /* Node containing information about the reservation. */
                $this->assertHotelReservation($hotelReservation);
                
            }
        }
    }
    
    public function assertHotelReservation( HotelReservation $hotelReservation ) {
        
        /* Status of the reservation. Possible status are: ‘Confirmed’, ‘Requested’ and ‘Cancelled’. **/
        $this->assertInternalType( 'string', $hotelReservation->getResStatus() );
        
        /* Date and time when the reservation was made. */
        $this->assertInternalType( 'string', $hotelReservation->getCreateDateTime() );
        
        /* Date and time when the reservation was modified. Should only be present if the reservation status is ‘Cancelled’. */
        if( $hotelReservation->getLastModifyDateTime() ) {
            $this->assertInternalType( 'string', $hotelReservation->getLastModifyDateTime() );
        }
        
        /* Node containing the RoomStays of the reservation. */
        $this->assertInstanceOf(ArrayOfRoomStaysTypeRoomStay::class, $hotelReservation->getRoomStays() );
        $this->assertInternalType( 'array', $hotelReservation->getRoomStays()->getRoomStay() );
        foreach( $hotelReservation->getRoomStays()->getRoomStay() AS $roomStay ) {
            
            /* Node containing RoomStay information. */
            $this->assertInstanceOf(RoomStay::class, $roomStay );
            $this->assertRoomStay($roomStay);
            
        }
        
        /* Node containing all reservation guests. */
        $this->assertInstanceOf( ArrayOfResGuestType::class, $hotelReservation->getResGuests() );
        $this->assertInternalType( 'array', $hotelReservation->getResGuests()->getResGuest() );
        foreach( $hotelReservation->getResGuests()->getResGuest() AS $resGuest ) {
            
            /* Node containing information about one of the guests. */
            $this->assertInstanceOf(ResGuestType::class, $resGuest );
            
            /* RPH of the guest. */
            $this->assertInternalType( 'string', $resGuest->getResGuestRPH() );
            
            /* Age qualifying code of the guest. */
            $this->assertInternalType( 'string', $resGuest->getAgeQualifyingCode() );
            
            /* Node containing information about the profiles of the guest. */
            $this->assertInstanceOf( ArrayOfProfilesTypeProfileInfo::class, $resGuest->getProfiles() );
            $this->assertInternalType( 'array', $resGuest->getProfiles()->getProfileInfo() );
            foreach($resGuest->getProfiles()->getProfileInfo() AS $profileInfo) {
                
                /* Node containing information about the profile of the guest. */
                $this->assertInstanceOf( ProfileInfo::class, $profileInfo );
                $this->assertInstanceOf( ProfileType::class, $profileInfo->getProfile() );
                
                /* Node containing customer information of the guest. */
                $this->assertInstanceOf( CustomerType::class, $profileInfo->getProfile()->getCustomer() );
                $this->assertInternalType( 'array', $profileInfo->getProfile()->getCustomer()->getPersonName() );
                foreach($profileInfo->getProfile()->getCustomer()->getPersonName() AS $personName) {
                    
                    /* Node containing the person name of the guest. */
                    $this->assertInstanceOf( PersonNameType::class, $personName );
                    
                    /* Prefix/Traitement name of the guest. */
                    $this->assertInternalType( 'array', $personName->getNamePrefix() );
                    foreach($personName->getNamePrefix() AS $namePrefix) {
                        $this->assertInternalType( 'string', $namePrefix );
                    }
                    
                    /* Given name of the guest. */
                    $this->assertInternalType( 'array', $personName->getGivenName() );
                    foreach($personName->getGivenName() AS $givenName) {
                        $this->assertInternalType( 'string', $givenName );
                    }
                    
                    /* Surname of the guest. */
                    $this->assertInternalType( 'string', $personName->getSurname() );
                    
                }
                
            }
            
            /* Node containing quantity informations for the guest. */
            $this->assertInstanceOf( GuestCountType::class, $resGuest->getGuestCounts() );
            $this->assertInternalType( 'array', $resGuest->getGuestCounts()->getGuestCount() );
            foreach( $resGuest->getGuestCounts()->getGuestCount() AS $guestCount ) {
                
                /* Node containing quantity information for the guest. */
                $this->assertInstanceOf( GuestCount::class, $guestCount );
                
                /* Age of the guest. */
                $this->assertInternalType( 'integer', $guestCount->getAge() );
                
            }
            
        }
        
        /* Node containing general information about the reservation. */
        $this->assertInstanceOf( ResGlobalInfoType::class, $hotelReservation->getResGlobalInfo() );
        
        /* Node containing the total price. */
        $this->assertInstanceOf( TotalType::class, $hotelReservation->getResGlobalInfo()->getTotal() );
        
        /* Amount before tax of the Reservation. */
        if($hotelReservation->getResGlobalInfo()->getTotal()->getAmountBeforeTax()) {
            $this->assertInternalType( 'string', $hotelReservation->getResGlobalInfo()->getTotal()->getAmountBeforeTax() );
        }
        
        /* Amount after tax of the Reservation. */
        $this->assertInternalType( 'string', $hotelReservation->getResGlobalInfo()->getTotal()->getAmountAfterTax() );
        
        /* Currency code of the Reservation. */
        $this->assertInternalType( 'string', $hotelReservation->getResGlobalInfo()->getTotal()->getCurrencyCode() );
        
        /* Node containing the Guarantee provided with the reservation. */
        if($hotelReservation->getResGlobalInfo()->getGuarantee()) {
            $this->assertInstanceOf( GuaranteeType::class, $hotelReservation->getResGlobalInfo()->getGuarantee() );
            
            /* Contains the payment method accepted by the rate. See Payment Type Codes list in section 7.6.3. */
            $this->assertInternalType( 'string', $hotelReservation->getResGlobalInfo()->getGuarantee()->getPaymentCode() );
            
            /* Node containing the Guarantee provided with the reservation. */
            if( $hotelReservation->getResGlobalInfo()->getGuarantee()->getGuaranteesAccepted() ) {
                $this->assertInstanceOf( ArrayOfGuaranteeTypeGuaranteeAccepted::class, $hotelReservation->getResGlobalInfo()->getGuarantee()->getGuaranteesAccepted() );
                $this->assertInternalType( 'array', $hotelReservation->getResGlobalInfo()->getGuarantee()->getGuaranteesAccepted()->getGuaranteeAccepted() );
                
                foreach( $hotelReservation->getResGlobalInfo()->getGuarantee()->getGuaranteesAccepted()->getGuaranteeAccepted() AS $guaranteeAccepted ) {
                    
                    /* Node that contains the booking payment details accepted. */
                    $this->assertInstanceOf( GuaranteeAccepted::class, $guaranteeAccepted );
                    
                    /* Node that contains the credit card accepted. 
                     * The credit card information can be a URL with the information(in TPA_Extension tag) or the details in the PaymentCard tags and attributes. */
                    $this->assertInstanceOf( PaymentCardType::class, $guaranteeAccepted->getPaymentCard() );
                    
                    /* Contains the credit card code. See Credit Card Codes list in section 7.6.4. */
                    if($guaranteeAccepted->getPaymentCard()->getCardCode()) {
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getCardCode() );
                    }
                    
                    /* This is the expiry date of the credit card used for deposit/prepayment. Format MMyy. */
                    if($guaranteeAccepted->getPaymentCard()->getExpireDate()) {
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getExpireDate() );
                    }
                    
                    /* PaymentCard / CardHolderName. */
                    if($guaranteeAccepted->getPaymentCard()->getCardHolderName()) {
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getCardHolderName() );
                    }
                    
                    /* This is actual number of the credit card used for deposit/prepayment. */
                    if($guaranteeAccepted->getPaymentCard()->getCardNumber()) {
                        $this->assertInstanceOf( EncryptionTokenType::class, $guaranteeAccepted->getPaymentCard()->getCardNumber() );
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getCardNumber()->getPlainText() );
                    }
                    
                    /* The SeriesCode attribute is used (Optionally) for the security number of the card. */
                    if($guaranteeAccepted->getPaymentCard()->getSeriesCode()) {
                        $this->assertInstanceOf( EncryptionTokenType::class, $guaranteeAccepted->getPaymentCard()->getSeriesCode() );
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getSeriesCode()->getPlainText() );
                    }
                    
                    /* Optional, contains credit card URL. */
                    if($guaranteeAccepted->getPaymentCard()->getTPA_Extensions()) {
                        $this->assertInstanceOf( TPA_ExtensionsType::class, $guaranteeAccepted->getPaymentCard()->getTPA_Extensions() );
                        $this->assertInternalType( 'string', $guaranteeAccepted->getPaymentCard()->getTPA_Extensions()->getAny() );
                    }
                    
                }
                
            }
            
        }
        
        /* Node containing the ids of the reservation. */
        $this->assertInstanceOf( ArrayOfHotelReservationIDsTypeHotelReservationID::class, $hotelReservation->getResGlobalInfo()->getHotelReservationIDs() );
        $this->assertInternalType( 'array', $hotelReservation->getResGlobalInfo()->getHotelReservationIDs()->getHotelReservationID() );
        foreach( $hotelReservation->getResGlobalInfo()->getHotelReservationIDs()->getHotelReservationID() AS $hotelReservationID ) {
            
            /* Node containing information of one reservation id. */
            $this->assertInstanceOf( HotelReservationID::class, $hotelReservationID );
            
            /* Value of the id. */
            $this->assertInternalType( 'string', $hotelReservationID->getResID_Value() );
            
            /* Id context. */
            $this->assertInternalType( 'string', $hotelReservationID->getResID_SourceContext() );
            
        }
        
        /* Node containing information about the profiles of the reservation. */
        $this->assertInstanceOf( ArrayOfProfilesTypeProfileInfo::class, $hotelReservation->getResGlobalInfo()->getProfiles() );
        
        /* Node containing information about the profile of the reservation. */
        $this->assertInternalType( 'array', $hotelReservation->getResGlobalInfo()->getProfiles()->getProfileInfo() );
        foreach($hotelReservation->getResGlobalInfo()->getProfiles()->getProfileInfo() AS $profileInfo) {
            
            /* Node containing information about the profile of the reservation. */
            $this->assertInstanceOf( ProfileInfo::class, $profileInfo );
            $this->assertInstanceOf( ProfileType::class, $profileInfo->getProfile() );
            
            /* Node containing information about the customer of the reservation. 
             * The customer of the reservation can be or not a pax of the reservation. 
             * If it’s a pax will be present in ResGuests node. */
            $this->assertInstanceOf( CustomerType::class, $profileInfo->getProfile()->getCustomer() );
            
            /* Node containing the person name of the customer of the reservation. */
            $this->assertInternalType( 'array', $profileInfo->getProfile()->getCustomer()->getPersonName() );
            foreach($profileInfo->getProfile()->getCustomer()->getPersonName() AS $personName) {
                $this->assertInstanceOf( PersonNameType::class, $personName );
                
                /* Name prefix of the customer. */
                $this->assertInternalType( 'array', $personName->getNamePrefix() );
                foreach($personName->getNamePrefix() AS $namePrefix) {
                    $this->assertInternalType( 'string', $namePrefix );
                }
                
                /* Given name of the customer. */
                $this->assertInternalType( 'array', $personName->getGivenName() );
                foreach($personName->getGivenName() AS $givenName) {
                    $this->assertInternalType( 'string', $givenName );
                }
                
                /* Surname of the customer. */
                $this->assertInternalType( 'string', $personName->getSurname() );
            }
            
            /* Node containing information about the telephone of the customer. */
            $this->assertInternalType( 'array', $profileInfo->getProfile()->getCustomer()->getTelephone() );
            foreach($profileInfo->getProfile()->getCustomer()->getTelephone() AS $telephone) {
                $this->assertInstanceOf( Telephone::class, $telephone );
                
                /* Phone technology type. */
                $this->assertInternalType( 'string', $telephone->getPhoneTechType() );
                
                /* Phone number. */
                $this->assertInternalType( 'string', $telephone->getPhoneNumber() );
                
                /* Indicates whether associated data is formatted or not. */
                $this->assertInternalType( 'boolean', $telephone->getFormattedInd() );
                
                /* When true, indicates a default value should be used. */
                $this->assertInternalType( 'boolean', $telephone->getDefaultInd() );
                
            }
            
            /* Node containing information about the email of the customer. */
            $this->assertInternalType( 'array', $profileInfo->getProfile()->getCustomer()->getEmail() );
            foreach($profileInfo->getProfile()->getCustomer()->getEmail() AS $email) {
                $this->assertInstanceOf( Email::class, $email );
                
                /* When true, indicates a default value should be used. */
                $this->assertInternalType( 'boolean', $email->getDefaultInd() );
                
                /* Indicates the type of the email. */
                $this->assertInternalType( 'string', $email->getEmailType() );
                
                /* Email of the customer. */
                $this->assertInternalType( 'string', $email->get_() );
            }
            
            /* Node containing information about the address of the customer. */
            $this->assertInternalType( 'array', $profileInfo->getProfile()->getCustomer()->getAddress() );
            foreach($profileInfo->getProfile()->getCustomer()->getAddress() AS $address) {
                $this->assertInstanceOf( Address::class, $address );
                
                /* Address of the customer. */
                $this->assertInternalType( 'array', $address->getAddressLine() );
                foreach($address->getAddressLine() AS $addressLine) {
                    $this->assertInternalType( 'string', $addressLine );
                }
                
                /* City name. */
                $this->assertInternalType( 'string', $address->getCityName() );
                
                /* Postal code. */
                $this->assertInternalType( 'string', $address->getPostalCode() );
                
                /* Node containing information about the state or the province of the customer. */
                $this->assertInstanceOf( StateProvType::class, $address->getStateProv() );
                
                /* State code. */
                $this->assertInternalType( 'string', $address->getStateProv()->getStateCode() );
                
                /* State or province name. */
                $this->assertInternalType( 'string', $address->getStateProv()->get_() );
                
                /* Country name. */
                $this->assertInstanceOf( CountryNameType::class, $address->getCountryName() );
                
                /* Country code. */
                $this->assertInternalType( 'string', $address->getCountryName()->getCode() );
                
                /* Country name. */
                $this->assertInternalType( 'string', $address->getCountryName()->get_() );
                
            }
        }
        
    }
    
    public function assertRoomStay( RoomStay $roomStay ) {
        
        /* Node containing information about rooms. */
        $this->assertInstanceOf(ArrayOfRoomTypeType::class, $roomStay->getRoomTypes() );
        $this->assertInternalType( 'array', $roomStay->getRoomTypes()->getRoomType() );
        foreach( $roomStay->getRoomTypes()->getRoomType() AS $roomType ) {
            
            /* Node containing information about one room. */
            $this->assertInstanceOf(RoomTypeType::class, $roomType );
            
            /* Room code. */
            $this->assertInternalType( 'string', $roomType->getRoomTypeCode() );
            
            /* Id of the room. */
            $this->assertInternalType( 'string', $roomType->getRoomID() );
            
            /* Node containing the description of the room. */
            $this->assertInstanceOf(ParagraphType::class, $roomType->getRoomDescription() );
            
            /* Description of the room. */
            $this->assertInternalType( 'string', $roomType->getRoomDescription()->getText()[0]->get_());
            
        }
        
        /* Node containing information about RatePlans. */
        $this->assertInstanceOf(ArrayOfRatePlanType::class, $roomStay->getRatePlans() );
        $this->assertInternalType( 'array', $roomStay->getRatePlans()->getRatePlan() );
        foreach( $roomStay->getRatePlans()->getRatePlan() AS $ratePlan ) {
            
            /* Node containing information about one RatePlan. */
            $this->assertInstanceOf(RatePlanType::class, $ratePlan );
            
            /* RatePlan code. */
            $this->assertInternalType( 'string', $ratePlan->getRatePlanCode() );
            
            /* Node containing information the RatePlan description one RatePlan. */
            $this->assertInstanceOf(ParagraphType::class, $ratePlan->getRatePlanDescription() );
            
            /* Description of the RatePlan. */
            $this->assertInternalType( 'string', $ratePlan->getRatePlanDescription()->getText()[0]->get_() );
            
            /* Node containing the commission of the RatePlan. */
            $this->assertInstanceOf(CommissionType::class, $ratePlan->getCommission() );
            
            /* Commission of the RatePlane. */
            $this->assertInternalType( 'string', $ratePlan->getCommission()->getPercent() );
        }
        
        /* Node containing information about RoomRates. */
        $this->assertInstanceOf(RoomRates::class, $roomStay->getRoomRates() );
        $this->assertInternalType( 'array', $roomStay->getRoomRates()->getRoomRate() );
        foreach( $roomStay->getRoomRates()->getRoomRate() AS $roomRate ) {
            
            /* Node containing information about one RoomRate. */
            $this->assertInstanceOf(RoomRate::class, $roomRate );
            $this->assertRoomRate( $roomRate);
            
        }
        
        /* Node containing all cancel penalties of the RoomStay. */
        $this->assertInstanceOf(CancelPenaltiesType::class, $roomStay->getCancelPenalties() );
        if( $roomStay->getCancelPenalties()->getCancelPenalty() ) {
            $this->assertInternalType( 'array', $roomStay->getCancelPenalties()->getCancelPenalty() );
            foreach( $roomStay->getCancelPenalties()->getCancelPenalty() AS $cancelPenalty ) {
                
                /* Node containing information about one cancel penalty. */
                $this->assertInstanceOf(CancelPenaltyType::class, $cancelPenalty );
                
                /* Policy code of the cancel penalty. */
                $this->assertInternalType( 'string', $cancelPenalty->getPolicyCode() );
                
                /* Indicates whether the Rate is refundable or not. */
                $this->assertInternalType( 'boolean', $cancelPenalty->getNonRefundable() );
                
                /* Node containing information about the deadline of the cancel penalty. */
                if($cancelPenalty->getDeadline()) {
                    $this->assertInstanceOf(Deadline::class, $cancelPenalty->getDeadline() );
                    
                    /* Indicates when the absolute deadline. */
                    $this->assertInternalType( 'string', $cancelPenalty->getDeadline()->getAbsoluteDeadline() );
                    
                    /* Time unit of the offset for the absolute deadline. */
                    $this->assertInternalType( 'string', $cancelPenalty->getDeadline()->getOffsetTimeUnit() );
                    
                    /* Number of time units of offset for the absolute ege deadline. */
                    $this->assertInternalType( 'integer', $cancelPenalty->getDeadline()->getOffsetUnitMultiplier() );
                    
                    /* Indicates when the deadline is applied. */
                    $this->assertInternalType( 'string', $cancelPenalty->getDeadline()->getOffsetDropTime() );
                    
                }
                
                /* Amount of the cancel penalty. */
                if( $cancelPenalty->getAmountPercent() ) {
                    $this->assertInstanceOf(AmountPercentType::class, $cancelPenalty->getAmountPercent() );
                    
                    /* Percent of the total charged as a cancel penalty amount. Percent or NmbrOfNights must be present. */
                    if($cancelPenalty->getAmountPercent()->getPercent()) {
                        $this->assertInternalType( 'string', $cancelPenalty->getAmountPercent()->getPercent() );
                    }
                    
                    /* Number of nights charged as a cancel penalty amount. */
                    if($cancelPenalty->getAmountPercent()->getNmbrOfNights()) {
                        $this->assertInternalType( 'integer', $cancelPenalty->getAmountPercent()->getNmbrOfNights() );
                    }
                    
                    /* Currency code of the cancel penalty amount. */
                    $this->assertInternalType( 'string', $cancelPenalty->getAmountPercent()->getCurrencyCode() );
                }
            }
        }
        
        /* Node containing basic information of the property. */
        $this->assertInstanceOf(BasicPropertyInfo::class, $roomStay->getBasicPropertyInfo() );
        
        /* Hotel code. */
        $this->assertInternalType( 'string', $roomStay->getBasicPropertyInfo()->getHotelCode() );
        
        /* Hotel name. */
        $this->assertInternalType( 'string', $roomStay->getBasicPropertyInfo()->getHotelName() );
        
        /* Node containing information of the guests of the room. */
        $this->assertInstanceOf(ArrayOfServiceRPHsTypeServiceRPH::class, $roomStay->getServiceRPHs() );
        $this->assertInternalType( 'array', $roomStay->getServiceRPHs()->getServiceRPH() );
        foreach( $roomStay->getServiceRPHs()->getServiceRPH() AS $serviceRPH ) {
            
            /* Node containing information of a guest of the room. */
            $this->assertInstanceOf(ServiceRPH::class, $serviceRPH );
            
            /* Code of a guest of the room. Match with @ResGuestRPH at the ResGuests node. */
            $this->assertInternalType( 'string', $serviceRPH->getRPH() );
            
        }
        
    }
    
    public function assertRoomRate( RoomRate $roomRate) {
        
        /* Effective date when the RoomRate start applying. */
        $this->assertInternalType( 'string', $roomRate->getEffectiveDate() );
        
        /* Expire date when the RoomRate ends applying. Check out night minus 1. */
        $this->assertInternalType( 'string', $roomRate->getExpireDate() );
        
        /* Code of the Room. */
        $this->assertInternalType( 'string', $roomRate->getRoomTypeCode() );
        
        /* Inventary block code. */
        $this->assertInternalType( 'string', $roomRate->getInvBlockCode() );
        
        /* Code of the RatePlan. */
        $this->assertInternalType( 'string', $roomRate->getRatePlanCode() );
        
        /* Node containing information about the rates. */
        $this->assertInstanceOf(ArrayOfRateTypeRate::class, $roomRate->getRates() );
        $this->assertInternalType( 'array', $roomRate->getRates()->getRate() );
        foreach( $roomRate->getRates()->getRate() AS $rate ) {
            
            /* Node containing information about one rate. */
            $this->assertInstanceOf(Rate::class, $rate );
            
            /* Effective date when the Rate start applying. */
            $this->assertInternalType( 'string', $rate->EffectiveDate );
            
            /* Expire date when the Rate ends applying. */
            $this->assertInternalType( 'string', $rate->ExpireDate );
            
            /* Node containing core information about the rate. */
            $this->assertInstanceOf(TotalType::class, $rate->Base );
            
            /* Amount before tax of the rate. */
            if( $rate->Base->getAmountBeforeTax() ) {
                $this->assertInternalType( 'string', $rate->Base->getAmountBeforeTax() );
            }
            
            /* Amount after tax of the rate. */
            $this->assertInternalType( 'string', $rate->Base->getAmountAfterTax() );
            
            /* Currency code of the rate. */
            $this->assertInternalType( 'string', $rate->Base->getCurrencyCode() );
            
            /* Node containing information about cancel policies which are applied to the rate. */
            $this->assertInstanceOf(CancelPenaltiesType::class, $rate->CancelPolicies );
            if( $rate->CancelPolicies->getCancelPenalty() ) {
                $this->assertInternalType( 'array', $rate->CancelPolicies->getCancelPenalty() );
                foreach( $rate->CancelPolicies->getCancelPenalty() AS $cancelPenalty ) {
                    
                    /* Node containing information about one cancel penalty. */
                    $this->assertInstanceOf(CancelPenaltyType::class, $cancelPenalty );
                    
                    /* Policy code of the cancel penalty. */
                    $this->assertInternalType( 'string', $cancelPenalty->getPolicyCode() );
                    
                }
            }
        }
        
        /* Node containing information about the total price of the RoomRate. */
        $this->assertInstanceOf(TotalType::class, $roomRate->getTotal() );
        
        /* Amount before tax of the RoomRate. */
        if( $roomRate->getTotal()->getAmountBeforeTax() ) {
            $this->assertInternalType( 'string', $roomRate->getTotal()->getAmountBeforeTax() );
        }
        
        /* Amount after tax of the RoomRate. */
        $this->assertInternalType( 'string', $roomRate->getTotal()->getAmountAfterTax() );
        
        /* Currency code of the RoomRate. */
        $this->assertInternalType( 'string', $roomRate->getTotal()->getCurrencyCode() );
        
    }
    
}