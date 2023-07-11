<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model{

    public function verifPersonne($nom ,$mdp)
    {
        $sql="SELECT * FROM User WHERE nom= '%s' AND mdp='%s' ";
        $sql=sprintf($sql,$nom,$mdp);
        $query = $this->db->query($sql);

        $row = $query->row_array();

        if ($row==null) {
            throw new Exception("Nom ou Mot de passe Incorrect");
        }
        return $row;
    }

   
}
?>