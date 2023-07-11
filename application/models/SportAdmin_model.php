<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class SportAdmin_model extends CI_Model {
        public function getAllSport()
        {
            $sql = "SELECT * FROM Sport";
           // echo $sql;
            $query = $this->db->query($sql);
            $liste=array();
            foreach($query->result_array() as $row){
             $liste[]=$row;
            }
            return $liste;
        }   
         public function insertNewSport($NomSport)
         {
            $sql="insert into Sport(NomSport) values ('%s')";
            $sql=sprintf($sql,$NomSport);
            echo $sql;
            try {
             $this->db->query($sql);
            } catch (Exception $th) {
             throw new Exception($th->getMessage());
            }
         }

        
         public function deleteSport($idSport)
         {
            $sql="delete from Sport where idSport = %d";
            $sql=sprintf($sql,$idSport);
            echo $sql;
            try {
             $this->db->query($sql);
            } catch (Exception $th) {
             throw new Exception($th->getMessage());
            }
         }
        

         public function updateSport($idSport,$NomSport)
         {
            $sql="update sport set NomSport = '%s' where idSport = %d";
            $sql=sprintf($sql,$NomSport,$idSport);
            echo $sql;
            try {
             $this->db->query($sql);
            } catch (Exception $th) {
             throw new Exception($th->getMessage());
            }
         }
        

        // public function historique($idObjet)
        // {
        //    $sql="select * from Echange where idObjetDemande=%d or idObjetEchange=%d and EtatEchange=1 and dateHeureAccepte is not null ";
        //    $sql=sprintf($sql,$idObjet,$idObjet);
        //   // echo $sql;
        //    $query=$this->db->query($sql);
        //    $liste=array();
        //    foreach($query->result_array() as $row){
        //     $liste[]=$row;
        //    }
        //    return $liste;
        // }
        
    }
?>