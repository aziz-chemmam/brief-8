<?php



        class Client{
            private $id;
            private $nom;
            private $prenom;
            private $adresse;
            private $DateDeNaissance;
            private $Nationalite;
            private $Email;
            private $Pw;
            private $Username;
            private $Genre;
            
            
            public __construct(){
                global $conn;
                $this->conn = $conn;
                $this->conn->select_db("DB_CIH")
                if ($this->conn->connect_error){
                    die("database selection failed:" . $this->conn->connect_error)
                }
                
            }

            public function setId($id){
                $this->id = $id;
                }
                public function getId(){
                    return $this->id;
                }
            

            public function setNom($nom){
            $this->nom  = $nom;
            }
            public function getNom(){
                return $this->nom;
            }

            
            public function setPrenom($prenom){
                $this->prenom  = $prenom;
                }
                public function getPrenom(){
                    return $this->prenom;
                }

                
            public function setAdresse($adresse){
                $this->adresse  = $adresse;
                }
                public function get(){
                    return $this->adresse;
                }

            public function setDateDeNaissance($DateDeNaissance){
                $this->DateDeNaissance = $DateDeNaissance;
                }
                public function getDateDeNaissance(){
                    return $this->DateDeNaissance;
                }

                public function setNationalite($Nationalite){
                    $this->Nationalite = $Nationalite;
                    }
                    public function getNationalite(){
                        return $this->Nationalite;
                    }

                public function setEmail($Email){
                    $this->Email = $Email;
                    }
                    public function getEmail(){
                        return $this->Email;
                    }
                    
                public function setPw($Pw){
                    $this->Pw = $Pw;
                    }
                    public function getPw(){
                        return $this->Pw;
                    }

                public function setUsername($Username){
                    $this->Username = $Username;
                    }
                    public function getUsername(){
                        return $this->Username;
                    }

                public function setGenre($Genre){
                    $this->Genre = $Genre;
                    }
                    public function getGenre(){
                        return $this->Genre;
                    }
                    
        }


?>