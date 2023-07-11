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
        public function inscription($nom, $mdp,$genre)
        {  
           $sql="insert into User values(null,'%s','%s','%s')";
           $sql=sprintf($sql,$nom, $mdp,$genre);
           try {
           $this->db->query($sql);
           //echo $sql;
           } catch (Exception $e) {
            throw new Exception($e->getMessage());
           }
        }
        

        public function inscriptionInfoUser($idUser,$poid,$taille)
        {  
           $sql="insert into InfoUser values(%d,%d,%d,0)";
           $sql=sprintf($sql,$idUser,$poid,$taille);
           try {
           $this->db->query($sql);
           //echo $sql;
           } catch (Exception $e) {
            throw new Exception($e->getMessage());
           }
        }

    }
?>