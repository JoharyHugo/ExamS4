<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class Inscription_model extends CI_Model {
        public function getIdFarany($nom)
        {
            $sql = "SELECT * FROM User WHERE nom = '%s'  ORDER BY idUser DESC LIMIT 1";
            $sql = sprintf($sql,$nom);
           // echo $sql;
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