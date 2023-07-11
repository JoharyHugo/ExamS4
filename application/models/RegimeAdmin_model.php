<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class RegimeAdmin_model extends CI_Model {
        public function getAllRegime()
        {
            $sql = "SELECT * FROM Regime";
           // echo $sql;
            $query = $this->db->query($sql);
            $liste=array();
            foreach($query->result_array() as $row){
             $liste[]=$row;
            }
            return $liste;
        }   
        public function insertNewRegime($idSpecificite,$p1,$p2,$duree,$prix)
        {
           $sql="insert into Regime values (%d,%d,%d,%d,%d)";
           $sql=sprintf($sql,$idSpecificite,$p1,$p2,$duree,$prix);
           echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }

        
        public function insertNewRegimeSakafo($idRegime)
        {
           $sql="insert into Regime values (%d,%d,%d,%d,%d)";
           $sql=sprintf($sql,$idRegime);
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }

        public function deleteRegime($idRegime)
        {
           $sql="delete from Regime where idRegime = %d";
           $sql=sprintf($sql,$idRegime);
           echo $sql;
           try {
            $this->db->query($sql);
           } catch (Exception $th) {
            throw new Exception($th->getMessage());
           }
        }
        

        public function updateRegime($idRegime,$quantite)
        {
           $sql="update regimesakafo set quantite = %d where idSakafo = %d";
           $sql=sprintf($sql,$quantite,$idRegime);
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