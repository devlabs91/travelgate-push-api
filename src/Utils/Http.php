<?php 

namespace Devlabs91\TravelgatePushApi\Utils;

class Http {
    
    public static function parse_header( array $headers, $header = null ) { 
        $output = [];
        
        if ('HTTP' === substr($headers[0], 0, 4)) {
            list(, $output['status'], $output['status_text']) = explode(' ', $headers[0]);
            unset($headers[0]);
        }
        
        foreach ($headers as $v) {
            if(trim($v)!='') {
                $h = preg_split('/:\s*/', $v);
                $output[strtolower($h[0])] = $h[1];
            }
        }
        
        if (null !== $header) {
            if (isset($output[strtolower($header)])) {
                return $output[strtolower($header)];
            }
            
            return;
        }
        
        return $output;
    }
    
}