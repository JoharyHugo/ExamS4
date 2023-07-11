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

    public function getAllCodeInvalidate()
    {
        $sql="SELECT * FROM V_CodeClient WHERE etat=0";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
            $liste[]=$row;
        }
        return $liste; 
    }

    public function updateEtatCode($idCode)
    {
       $sql="UPDATE Code SET etat=1 WHERE idCode=%d";
       $sql=sprintf($sql,$idCode);
       $this->db->query($sql) ;
    }

    public function updateCodeUSer($idCodeUser)
    {
        $sql="UPDATE CodeUser SET etat=1 WHERE idCodeUser=%d";
       $sql=sprintf($sql,$idCodeUser);
       $this->db->query($sql) ;
    }

    public function UpdateCompte($iduser,$vola)
    {
        $user=$this->getCompte($iduser);
        $vaovao=$user['compte']+$vola;

        $sql="UPDATE User SET compte=%d WHERE idUser=%d";
        $sql=sprintf($sql,$vaovao,$iduser);
        $this->db->query($sql);
    }

}
?>