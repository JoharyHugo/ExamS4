<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class Regime_model extends CI_Model {
        public function getIdObjectif($idUser)
        {
            $sql = "SELECT * FROM ObjectifUser WHERE idUser= %d ";
            $sql = sprintf($sql,$idUser);
            echo $sql;
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

        }
        public function getRegimeSpecifique($idObjectif,$poids)
        {
            $sql = "SELECT * FROM ObjectifUser WHERE idObjectif= %d  and poids= %d";
            $sql = sprintf($sql,$idObjectif,$poids);
            echo $sql;
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

        }   

        public function getSportSpecifique($idRegime)
        {
            $sql = "SELECT * FROM ObjectifUser WHERE idObjectif= %d  and poids= %d";
            $sql = sprintf($sql,$idObjectif,$poids);
            echo $sql;
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

        }   
        
        public function inscription($nom, $mdp,$genre,$taille, $poids)
        {  
           $sql="insert into User values(null,'%s','%s','%s',%d,%d,0)";
           $sql=sprintf($sql,$nom, $mdp,$genre,$taille, $poids);
           try {
           $this->db->query($sql);
           //echo $sql;
           } catch (Exception $e) {
            throw new Exception($e->getMessage());
           }
        }
        
    }
?>