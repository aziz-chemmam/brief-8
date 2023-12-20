
<?php

require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");
 
      

class Agency {
    private $id;
    private $longitude;
    private $latitude;
    private $address;
    private $bankId;
    private $conn;


            public function __construct(){
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
            public function getLatitude(){
            return $this->latitude;
            }

            public function setAdresse($address){
                $this->address = $address;
            }
            public function getAdresse(){
            return $address->address;
            }

            public function setBankId($bankId){
                $this->bankId = $bankId;
            }
            public function getBankId(){
            return $bankId->bankId;
            }
            
         
}


?>