<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//		$this->load->view('login');
        $this->load->view('inscription');		
	}	
    	// Inscription nouveau client
	public function inscriptionUser()
	{
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
		$genre = $this->input->post('genre');
		$taille = $this->input->post('taille');
		$poids = $this->input->post('poids');

		if ($nom == "" || $mdp== "" || $genre == "" || $taille == "" || $poids == "") {
			$data['erreur'] = "Veillez remplir tous les champs";
			$this->load->view('inscription', $data);
		}
		else {
			$this->load->model('Inscription_model', 'model');
			$this->model->inscription($nom, $mdp, $genre, $taille,$poids);
	
			$test = $this->model->getIdFarany($nom);
	        $idUser=$test['idUser'];
			echo $idUser;
			$nom=$test['nom'];
		   //echo $nom;
            $this->session->set_userdata('id', $idUser);
            $this->session->set_userdata('nom', $nom);

            	

			redirect("objectif/formpoid");
		}
	}

}
