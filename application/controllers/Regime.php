<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {

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
	public function getIdObjectifPoids($idUser)
	{
        $this->load->model("regime_model", "model");
        $idUser=$this->session->userdata('id');
        
        $Apropos= $this->model->getIdObjectif($idUser);
        $data['poids'] = $Apropos;
		
        $this->load->view('accueil', $data);
	}	

    public function getRegimeSpecifique($idObjectif,$poids)
	{
        $this->load->model("regime_model", "model");
        $this->model->getRegimeSpecifique(1,30);
        $this->load->view('accueil');
    

	}
    	
    public function getSportSpecifique($idRegime)
	{
        $this->load->model("regime_model", "model");
        $this->model-> getSportSpecifique(1);
    
        $this->load->view('accueil');
    
	}	
}
