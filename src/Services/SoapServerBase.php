<?php 

namespace Devlabs91\TravelgatePushApi\Services;

class SoapServerBase {

    protected $username;
    protected $password;
    protected $authenticated;
    
    public function __construct( $username, $password ) {
        $this->username = $username;
        $this->password = $password;
        $this->authenticated = false;
    }
    
    public function Security( $security ) {
        if($security && property_exists($security, 'UsernameToken') && 
            property_exists($security->UsernameToken, 'Username') && property_exists($security->UsernameToken, 'Password') ) {
            if( $this->username == $security->UsernameToken->Username && $this->password == $security->UsernameToken->Password ) {
                $this->authenticated = true;
            }
        }
    }
    
}