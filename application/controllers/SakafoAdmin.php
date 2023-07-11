<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SakafoAdmin extends CI_Controller{

    public function getAllFood()
    {
        $this->load->model('SakafoAdmin_model','model');
        $this->load->model('SportAdmin_model','sport');
        $this->load->model('RegimeAdmin_model','regime');
        $regime = $this->regime->getAllRegime();
        $sakafo = $this->model->getAllSakafo();
        $sport = $this->sport->getAllSport();
        $data['sakafos'] = $sakafo;
        $data['sports'] = $sport;
        $data['regimes'] = $regime;
        
        $this->load->view('headerAdmin');
//		$this->load->view('navbarAdmin');
		$this->load->view('sakafodetail',$data);
		$this->load->view('footerAdmin');
    }
    
    public function deleteSakafo($idSakafo)
    {
        $this->load->model("SakafoAdmin_model", "model");
        $this->model->deleteSakafo($idSakafo);

        redirect("sakafoAdmin/getAllFood");
    }
  //  update sakafo set photo='sary20.jpg' where idSakafo=12;
  
  public function ajoutSakafo()
  {
      $this->load->model("sakafoAdmin_model", "model");
      $nom = $this->input->post("nom");
      $fichier='';
      // Vérifier si un fichier est téléchargé
      if (!empty($_FILES['file']['name'])) {
          $config['upload_path'] = './assets/img';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '100000';
          $config['max_width'] = '100000';
          $config['max_height'] = '100000';
  
          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('file')) {
              $error = array('error' => $this->upload->display_errors());
              print_r($error);
              // Rediriger ou afficher un message d'erreur selon vos besoins
          } else {
              $fichier = $this->upload->data('file_name');
              $this->model->insertNewSakafo($nom, $fichier);
              redirect("sakafoAdmin/getAllFood");
          }
      } else {
          $this->model->insertNewSakafo($nom, $fichier);
          redirect("sakafoAdmin/getAllFood");
      }
  }
  

public function updateSakafo()
{
    $this->load->model("sakafoAdmin_model", "model");
    $idSakafo = $this->input->post("idSakafo");
    $nom = $this->input->post("nom");
    
    // Vérifier si un fichier est téléchargé
    if (!empty($_FILES['file']['name'])) {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100000';
        $config['max_width'] = '100000';
        $config['max_height'] = '100000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            // Rediriger ou afficher un message d'erreur selon vos besoins
        } else {
            $fichier = $this->upload->data('file_name');
            $this->model->updateSakafo($idSakafo, $nom, $fichier);
            redirect("sakafoAdmin/getAllFood");
        }
    } else {
        $this->model->updateSakafo($idSakafo, $nom);
        redirect("sakafoAdmin/getAllFood");
    }
}

  public function getIdSakafo()
  {
    $idSakafo=$this->input->get('id');
    $data['idSakafo']=$idSakafo; 
    $this->load->view("sakafoUpdate",$data);
  }

  public function insertNewObjet()
  {
      $this->load->model('objets_model', 'model');

      $nom = $this->input->post('nom');
      $prix = $this->input->post('prix');
      $idCategorie = $this->input->post('idCategorie');
      $description = $this->input->post('description');
      $idUser = $this->session->userdata('userId')->idUser;

      $this->model->insertNewObjet($idCategorie, $idUser, $nom, $description,$prix);
      redirect('./mesObjets/index');
  }


}

?>