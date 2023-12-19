
<?php

require_once($_SERVER['DOCUMENT_ROOT']."/brief-6-main/app/services/DataService.php");




        class Agency{
            private $id;
            private $longtitude;
            private $latitude;
            private $adresse;
            private $agencyId;

            public __construct(){
                global $conn;
                $this->conn = $conn;
                $this->conn->select_db("DB_CIH")
                if ($this->conn->connect_error){
                    die("database selection failed:" . $this->conn->connect_error)
                }
            }

            public function setId($id){
                $this->id =$id;
            }
            public function getId(){
                return $this->id;
            }

            public function setLongtitude($longtitude){
                $this->longtitude =$longtitude;
            }
            public function getLongtitude(){
                return $this->longtitude;
            }

            public function setLatitude($latitude){
                $this->latitude =$latitude;
            }
            public function getLatitude(){
                return $this->latitude;
            }

            public function setAdresse($adresse){
                $this->adresse =$adresse;
            }
            public function getAdresse(){
                return $this->adresse;
            }

            public function setAgencyId($agencyId){
                $this->agencyId =$agencyId;
            }
            public function getAgencyId(){
                return $this->agencyId;
            }

        }

?> 