<?php

    require_once("connection.php");

    class request extends connection {
        private $id;
        private $titre;
        private $note;
        private $vol;
        private $cat;
        private $poids;
        private $loc;
        private $val;
        /* GETTERS */

        public function getid() {
            return $this->id;
        }

        public function gettitre() {
            return $this->titre;
        }
        public function getnote() {
            return $this->note;
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
        public function getval() {
            return $this->val;
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

        public function setnote($note) {
            $this->note = $note;
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
        public function setval($loc) {
            $this->val = $val;
            return $this;
        }


        /* 
            METHODES
        */
        public function editAll() {
            $res=$this->connexion()->query("SELECT * from request" );
             $reeqs=$res->fetchAll();
                return $reeqs;
            }
    
            public function editBy($id){
                $q = "SELECT * FROM request WHERE id=$id ";
                $res = $this->connexion()->query($q);
                $reeqs=$res->fetch();
                return $reeqs;
            }
        public function supprimer($id) {
            $q="DELETE FROM request where id=$id";
            $stmt=$this->connexion()->exec($q);
            if (!$stmt)
                echo ('echec de suppression'.$this->connexion()->errorInfo);
            else
            return $stmt;
            }

            public function modifier($id) {
                $q="UPDATE request SET isValid=1 WHERE id=$id";
                $stmt=$this->connexion()->exec($q);
                return $stmt;
                }

        }?>