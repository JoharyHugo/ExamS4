<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller{

    public function CheckAdmin()
    {
        $this->load->model('loginAdmin_model','model');
        $nom=$this->input->post('username');
        $mdp=$this->input->post('pass');
        try {
          $donne= $this->model->verifAdmin($nom ,$mdp);
          $this->session->set_userdata('idAdmin', $donne['idAdmin']);
           $this->session->set_userdata('nomAdmin', $nom);

           
           redirect("Code/allDemande");
           

        } catch (Exception $e) {
            $message=$e->getMessage();
            echo $message;
        }
    }
    	// Les fonctions  de deconnexion
	public function deconnectAdmin()
	{
		$this->session->unset_userdata('idAdmin');
		$this->load->view('loginAdmin');
	}

    
}

?>