<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class SakafoAdmin_model extends CI_Model {
        public function getAllSakafo()
        {
            $sql = "SELECT * FROM Sakafo";
            echo $sql;
            $query = $this->db->query($sql);
            $liste=array();
            foreach($query->result_array() as $row){
             $liste[]=$row;
            }
            return $liste;
        }   
        public function insertNewSakafo($nomSakafo)
        {
           $sql="insert into Sakafo(NomSakafo) values ('%s')";
           $sql=sprintf($sql,$nomSakafo);
           echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }

        
        public function deleteSakafo($idSakafo)
        {
           $sql="delete from Sakafo where idSakafo = %d";
           $sql=sprintf($sql,$idSakafo);
           echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }
        

        public function updateSakafo($idSakafo,$nomSakafo)
        {
           $sql="update sakafo set NomSakafo = '%s' where idSakafo = %d";
           $sql=sprintf($sql,$nomSakafo,$idSakafo);
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