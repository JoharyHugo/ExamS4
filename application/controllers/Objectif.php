<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Objectif extends CI_Controller {

    public function insertNewObjectif()
    {
        $idObjectif=$this->input->post('id');
        $pois=$this->input->post('poid');
        $this->load->model('Objectif_model','model');
        $idUser=$this->session->userdata('id');
        $this->model->deleteObjectifUser($idUser);
        $this->model-> insertObjectif($idUser,$idObjectif,$pois);
        $data['objectif']=$this->model->getAllObjectif();
        $this->load->view('objectifForm',$data);
    }

}
?>