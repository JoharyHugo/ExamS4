<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class SakafoAdmin_model extends CI_Model {
        public function getAllSakafo()
        {
            $sql = "SELECT * FROM Sakafo";
            //echo $sql;
            $query = $this->db->query($sql);
            $liste=array();
            foreach($query->result_array() as $row){
             $liste[]=$row;
            }
            return $liste;
        }   
        public function insertNewSakafo($nomSakafo,$photo)
        {
           $sql="insert into Sakafo values (null,'%s','%s')";
           $sql=sprintf($sql,$nomSakafo,$photo);
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
           //echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }
        

        public function updateSakafo($idSakafo,$nomSakafo,$photo)
        {
           $sql="update sakafo set NomSakafo = '%s', photo= '%s' where idSakafo = %d";
           $sql=sprintf($sql,$nomSakafo,$photo,$idSakafo);
           echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }
        

        function getPhoto($idSakafo) {
            $sql = "select photo from Sakafo where idSakafo = %d";
            $sql = sprintf($sql, $idSakafo);
            $query = $this->db->query($sql);
            $photo = array();
            foreach ($query->result_array() as $row) {
                $photo[] = $row;
            }
            return $photo;
        }
    
        function insertNewPhoto($photoName, $idSakafo) {
            // Inserer la nouvelle photo dans la base de donnees
            $sql = "insert into Sakafo (photo) values ('%s') where idSakafo= %d";
            $sql = sprintf($sql, $photoName,$idSakafo);
            $this->db->query($sql);
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