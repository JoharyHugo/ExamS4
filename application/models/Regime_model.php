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
            $sql = "SELECT * FROM V_RegimeSakafoComplet WHERE idObjectif= %d  and p1<=%d and p2>=%d";
            $sql = sprintf($sql,$idObjectif,$poids,$poids);
            echo $sql;
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

        }   

        public function getSportSpecifique($idRegime)
        {
            $sql = "SELECT * FROM  V_RegimeSportComplet WHERE idRegime=%d";
            $sql = sprintf($sql,$idRegime);
            echo $sql;
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

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