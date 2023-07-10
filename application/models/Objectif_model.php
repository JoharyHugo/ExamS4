<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Objectif_model extends CI_Model{
 
    public function insertObjectif($idUser,$idObjectif,$pois)
    {
        $sql="INSERT INTO ObjectifUser VALUES(%d,%d,%d)";
        $sql=sprintf($sql,$idUser,$idObjectif,$pois);
        $this->db->query($sql);
    }

    public function deleteObjectifUser($idUser)
    {
        $sql="DELETE FROM ObjectifUser WHERE idUser=%d";
        $sql=sprintf($sql,$idUser);
        $this->db->query($sql);
    }
    public function getAllObjectif()
    {
        $sql="SELECT * FROM Objectif";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
            $liste[]=$row;
        }
        return $liste;       
    }
}
?>