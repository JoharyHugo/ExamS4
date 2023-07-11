<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Code_model extends CI_Model{

    public function getAllCode()
    {
        $sql="SELECT * FROM Code";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
            $liste[]=$row;
        }
        return $liste; 
    }


    public function verificationcode($code)
    {
        $sql="SELECT * FROM Code WHERE code='%s' AND etat=0";
        $sql=sprintf($sql,$code);
        $query = $this->db->query($sql);

        $row = $query->row_array();
        if ($row==null) {
            throw new Exception("Code Incorrect ou code deja utilise");
        }
        return $row;
    }

    public function evoieCodeAdmin($idUser,$idcode)
    {
        $sql="INSERT INTO CodeUser VALUES(null,%d,%d,0)";
        $sql=sprintf($sql,$idcode,$idUser);
        $this->db->query($sql) ;
    }

    public function getCompte($idUser)
    {
        $sql="SELECT * FROM User where idUser= %d";
        $sql=sprintf($sql,$idUser);
        $query = $this->db->query($sql);
        $row = $query->row_array();
        return $row;      
    }
}
?>