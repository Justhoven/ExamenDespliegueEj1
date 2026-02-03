<?php 

use PHPUnit\Framework\TestCase; 
use App\DNI; 


class DNITest extends TestCase {
    public function testGetDNIConLetra() {      
        
        $calc = new DNI(12345678);
        $result = $calc->getDNIConLetra();

        $this-> assertIsString($result);
    } 
}

?>