
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");


        class Account {
            private $id;
            private $rib;
            private $balance;
            private $devis;        
            private $IdCustomer;
            private $conn;

            public function __construct(){
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
            public function getRib(){
            return $this->rib;
            }

            public function setBalance($balance){
                $this->balance = $balance;
            }
            public function getBalance(){
            return $this->balance;
            }
            public function setDevis($devis){
                $this->devis = $devis;
            }
            public function getDevis(){
            return $this->devis;
            }
            public function setIdCustomer($IdCustomer){
                $this->IdCustomer = $IdCustomer;
            }
            public function getIdCustomer(){
            return $this->IdCustomer;
            }

         
            public function addAccount(){
                $stmt = $this->conn->prepare("INSERT INTO account(rib, balance, devis, IdCustomer) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("sssi", $this->rib, $this->balance, $this->devis, $this->IdCustomer);
                $stmt->execute();
                $stmt->close();
                
            }

            public function updateAgency(){
                $stmt = $this->conn->prepare("UPDATE account SET rib=?, balance=?, devis=?, IdCustomer=? WHERE id =?");
                $stmt->bind_param("ssss", $this->rib, $this->balance, $this->devis, $this->IdCustomer );
                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            }

            public function deleteAccount(){
                $stmt = $this->conn->prepare("DELETE FROM account WHERE id =?");
                $stmt->bind_param("s",$this->id);
                $stmt->execute();
                $stmt->close();
            }

        }

        


?>
