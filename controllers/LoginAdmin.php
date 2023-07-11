<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller{

    public function CheckAdmin()
    {
        $this->load->model('loginAdmin_model','model');
        $nom=$this->input->post('nom');
        $mdp=$this->input->post('mdp');
        try {
          $donne= $this->model->verifAdmin($nom ,$mdp);
          $this->session->set_userdata('idAdmin', $donne['idAdmin']);
           $this->session->set_userdata('nom', $nom);

           $this->load->view('accueilAdmin');

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