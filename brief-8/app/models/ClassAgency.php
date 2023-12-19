
<?php

require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");
 
      

class Agency {
    private $id;
    private $longitude;
    private $latitude;
    private $address;
    private $bankId;
    private $conn;


            public __construct(){
                global $conn;
                $this->conn = $conn;
                $this->conn->select_db("DB_CIH");

                if ($this->conn->connect_error) {
                    die("Database selection failed: " . $this->conn->connecterror);
                }
            }

            public function setLongitude ($longitude){
                $this->longitude = $longitude;
            }
            public function getLongitude(){
                return $this->longitude;
            }


            public function setlaLitude($latitude){
                $this->latitude = $latitude;
            }
            public function grtLatitude()
            return $this->latitude;


            public function setBalance($rib){
                $this->rib = $rib;
            }
            public function grtBalance()
            return $this->rib;


            public function setDevis($rib){
                $this->rib = $rib;
            }
            public function grtDevis()
            return $this->rib;

            
            public function setIdClient($rib){
                $this->rib = $rib;
            }
            public function grtIdClient()
            return $this->rib;
}


?>