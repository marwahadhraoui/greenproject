<?php
//MARWA SGHAIER
    require_once("connection.php");

    class depot extends connection {
        private $id;
        private $titre;
        private $vol;
        private $cat;
        private $poids;
        private $loc;

        /* GETTERS */

        public function getid() {
            return $this->id;
        }

        public function gettitre() {
            return $this->titre;
        }

        public function getvol() {
            return $this->vol;
        }

        public function getcat() {
            return $this->cat;
        }
        
        public function getpoids() {
            return $this->poids;
        }

        public function getloc() {
            return $this->loc;
        }


        /* SETTERS */

        public function setid($id) {
            $this->id = $id;
            return $this;
        }

        public function settitre($titre) {
            $this->titre = $titre;
            return $this;
        }

        public function setvol($vol) {
            $this->vol = $vol;
            return $this;
        }

        public function setcat($cat) {
            $this->cat = $cat;
            return $this;
        }
        
        public function setpoids($poids) {
            $this->poids = $poids;
            return $this;
        }

        public function setloc($loc) {
            $this->loc = $loc;
            return $this;
        }


        /* 
            METHODES
        */
        public function editAll() {
            $res=$this->connexion()->query("SELECT * from waste" );
             $les_waste=$res->fetchAll();
                return $les_waste;
            }
    
            public function editBy($id){
                $q = "SELECT * FROM waste WHERE id=$id ";
                $res = $this->connexion()->query($q);
                $waste=$res->fetch();
                return $waste;
            }
        public function supprimer($id) {
            $q="DELETE FROM waste where id=$id";
            $stmt=$this->connexion()->exec($q);
            if (!$stmt)
                echo ('echec de suppression'.$this->connexion()->errorInfo);
            else
            return $stmt;
            }

   
        }?>