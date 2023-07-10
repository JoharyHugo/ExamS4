<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginAdmin_model extends CI_Model{

    public function verifAdmin($nom ,$mdp)
    {
        $sql="SELECT * FROM Admin WHERE nom= '%s' AND mdp='%s' ";
        $sql=sprintf($sql,$nom,$mdp);
        echo $sql;
        $query = $this->db->query($sql);

        $row = $query->row_array();

        if ($row==null) {
            throw new Exception("Nom ou Mot de passe Incorrect");
        }
        return $row;
    }

   
}
?>