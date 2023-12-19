
<?php


        class Account {
            private $id;
            private $rib;
            private $balance;
            private $devis    ;        
            private $IdClient;
            private $conn;

            public __construct(){
                global $conn;
                $this->conn = $conn;
                $this->conn->select_db("DB_CIH");
        
                if ($this->conn->connect_error) {
                    die("Database selection failed: " . $this->conn->connecterror);
                }
            }

            public function setId ($id){
                $this->id = $id;
            }
            public function getId(){
                return $this->id;
            }

            public function setRib($rib){
                $this->rib = $rib;
            }
            public function grtRib()
            return $this->rib;

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
