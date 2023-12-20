<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bank/DataService.php");

    class Transactions {
        private $conn;
        private $id;
        private $montant;
        private $devis;
        private $type;
        private $IdCompte;

        public function __construct(){
            global $conn;
            $this->conn = $conn;
            $this->conn->select_db("DB_CIH");
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setMontant($montant){
            $this->montant = $montant;
        }
        public function getMontant(){
            return $this->montant;
        }

        public function setType($type){
            $this->type = $type;
        }
        public function getType(){
            return $this->type;
        }
        public function setAccountId($IdCompte){
                $this->IdCompte = $IdCompte;
        }
        public function getAccountId(){
            return $this->IdCompte;
        }

        
        public function generateUniqueId(){
            return uniqId("", true);
        }

        public function addTransactions(){
            $this->id = $this->generateUniqueId();
            $stmt = $this->conn->prepare("INSERT INTO transactions (id, montant,  typpe, IdCompte) VALUES (?,  ?, ?, ?)");
            $stmt->bind_param("ssss", $this->id, $this->montant, $this->type, $this->IdCompte);
            $stmt->execute();
            $stmt->close();
        }

        public function updateTransactions() {
            $stmt = $this->conn->prepare("UPDATE transactions SET montant=?,  typpe=?, IdCompte=? WHERE id=?");
            $stmt->bind_param("ssss", $this->montant, $this->type, $this->IdCompte,  $this->id);
            
            if ($stmt->execute()) {
                return true; // Success
            } else {
                return false; // Failure
            }
        }

        public function deleteTransactions(){
            $stmt = $this->conn->prepare("DELETE FROM transactions WHERE id = ?");
            $stmt->bind_param("s", $this->id);
            $stmt->execute();
            $stmt->close();
        }
    }





?>
