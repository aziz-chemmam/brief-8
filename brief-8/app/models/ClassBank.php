
<?php

require_once($_SERVER['DOCUMENT_ROOT']."/brief-6-main/app/services/DataService.php");




        class Admin{
            private $id;
            private $nom;
            private $logo;

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

            public function setNom($nom){
                $this->nom =$nom;
            }
            public function getLongtitude(){
                return $this->nom;
            }

            public function setNom($nom){
                $this->nom =$nom;
            }
            public function getLatitude(){
                return $nom->nom;
            }

        }

?>