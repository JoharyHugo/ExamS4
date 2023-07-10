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

    public function tabRegime()
	{
        $this->load->model("regime_model", "model");
		$idUser=$this->session->userdata('id');
        $Apropos= $this->model->getIdObjectif($idUser);
		try {
			$regime= $this->model->getRegimeSpecifique($Apropos['idObjectif'],$Apropos['poids']);
			$sport=$this->model-> getSportSpecifique($regime[0]['idRegime']);
			
			$data['regime']=$regime;
			$data['sport']=$sport;
			 $this->load->view('headPage');
			 $this->load->view('nav1');
			 $this->load->view('nav2');
			 $this->load->view('tabregime',$data);
			 $this->load->view('footPage');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}    	
}
