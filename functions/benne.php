<?php
    //MARWA SGHAIER
    require_once("connection.php");

    class benne extends connection {
        private $id;
        private $loc;
        private $stoc;
      private $emp;
        /* GETTERS */

        public function getid() {
            return $this->id;
        }

       


        public function getloc() {
            return $this->loc;
        }

        public function getstoc() {
            return $this->stoc;
        }
        /* SETTERS */

        public function setid($id) {
            $this->id = $id;
            return $this;
        }

 public function setloc($loc) {
            $this->loc = $loc;
            return $this;
        }
        public function setstoc($stoc) {
            $this->stoc = $stoc;
            return $this;
        }

        /* 
            METHODES
        */
        public function editAll() {
            $res=$this->connexion()->query("SELECT * from bin" );
             $bennes=$res->fetchAll();
                return $bennes;
            }
    
            public function editBy($id){
                $q = "SELECT * FROM bin WHERE id=$id ";
                $res = $this->connexion()->query($q);
                $bin=$res->fetch();
                return $bin;
            }
        public function supprimer($id) {
            $q="DELETE FROM bin where id=$id";
            $stmt=$this->connexion()->exec($q);
            if (!$stmt)
                echo ('echec de suppression'.$this->connexion()->errorInfo);
            else
            return $stmt;
            }


            public function ajouter() { // Ajouter d'un colonne
                if (!isset($this->loc) || !isset($this->stoc) ) {
                    return false;
                }
                $rq = "INSERT INTO bin( location, storage) VALUES ('$this->loc', '$this->stoc')";
                $stmt = $this->connexion()->exec($rq);
                echo "requete reussi.";
                if (!$stmt) {
                    echo 'echec insertion '.$this->connexion()->errorInfo();
                    return 0;
                } else {
                    $r = 1; // id d'enregistrement ajouté
                    return $r;
                }
            }
   

            public function modifier($id) {
                $q="UPDATE bin SET emp=1 WHERE id=$id";
                $stmt=$this->connexion()->exec($q);
                return $stmt;
                }
        }?>
        3