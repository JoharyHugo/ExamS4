<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SportAdmin extends CI_Controller{

    public function deleteSport($idSport)
    {
        $this->load->model("SportAdmin_model", "model");
        $this->model->deleteSport($idSport);

        redirect("sakafoAdmin/getAllFood");
    }

    public function updateSport()
    {
      
      $this->load->model("sportAdmin_model", "model");
        $idSport=$this->input->post("idSport");
        $nom = $this->input->post("nom");
        $this->model->updateSport($idSport,$nom);
  
        
        redirect("sakafoAdmin/getAllFood");
    }
  
    public function getIdSport()
    {
      $idSport=$this->input->get('id');
      $data['idSport']=$idSport; 
      $this->load->view("sportUpadate",$data);
    }
  
    public function ajoutSport()
    {
      
      $this->load->model("sportAdmin_model", "model");
        $nom = $this->input->post("nom");
        $this->model->insertNewSport($nom);
        
        redirect("sakafoAdmin/getAllFood");
    }
  //  update sakafo set photo='sary20.jpg' where idSakafo=12;
    
}

?>