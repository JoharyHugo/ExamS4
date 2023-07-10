<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function CheckUser()
    {
        $this->load->model('login_model','model');
        $nom=$this->input->post('nom');
        $mdp=$this->input->post('mdp');
        try {
          $donne= $this->model->verifPersonne($nom ,$mdp);
          $this->session->set_userdata('id', $donne['idUser']);
           $this->session->set_userdata('nom', $nom);

           $this->load->view('accueil');

        } catch (Exception $e) {
            $message=$e->getMessage();
            echo $message;
        }
    }
    	// Les fonctions  de deconnexion
	public function deconnectClient()
	{
		$this->session->unset_userdata('id');
		$this->load->view('login');
	}
    
}

?>