<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Code extends CI_Controller{
    
    public function codeForm()
    {
        $this->load->model('Code_model','model');
        $idUser=$this->session->userdata('id');
        
        $data['code']=$this->model->getAllCode();
        $data['user']=$this->model->getCompte($idUser);
        $this->load->view('headPage');
		$this->load->view('nav1');
		$this->load->view('nav2');
		$this->load->view('codeform',$data);
		$this->load->view('footPage');
    }

    public function insertionCode()
    {
        $this->load->model('Code_model','model');
        $code=$this->input->post('code');
        echo $code;
        $idUser=$this->session->userdata('id');
        try {
            $codes=$this->model->verificationcode($code);
            $this->model-> evoieCodeAdmin($idUser,$codes['idCode']);
            redirect("Code/codeForm");
        } catch (Exception $e) {
           echo $e->getMessage();
           echo $code;
        }
    }
    public function verification()
    {
        
        $this->load->model('Code_model','model');
        $idUser=$this->session->userdata('id');
        $compte =$this->model->getCompte($idUser);
        $prix=$this->input->get('parametre');
        try {
            if ($compte['compte']>=$prix) {
                $valeurVao=$prix-$compte['compte'];
                redirect("regime/tabRegime");
            }
            else if ($compte['compte']<=$prix) {
                redirect("Code/codeForm");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
            echo $code;
         } 
    }

    public function alldemande()
    {
        $this->load->model('Code_model','model');
        $data['demandes']=$this->model->getAllCodeInvalidate();
        $this->load->view('headerAdmin');
		$this->load->view('navbarAdmin');
		$this->load->view('demande',$data);
		$this->load->view('footerAdmin');
    }
    public function updatecode()
    {
       $idCodeUser=$this->input->get('idCodeUser');
       $idcode=$this->input->get('idcode');
       $idUser=$this->input->get('iduser');
       $prix=$this->input->get('prix');
       $this->load->model('Code_model','model');
       $this->model->updateCodeUSer($idCodeUser);
       $this->model->updateEtatCode($idcode);
       $this->model->UpdateCompte($idUser,$prix);
       redirect("Code/alldemande");
    }
}
?>