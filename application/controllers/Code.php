<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Code extends CI_Controller{
    
    public function codeForm()
    {
        $this->load->model('Code_model','model');
        $data['code']=$this->model->getAllCode();
        
        $this->load->view('headPage');
		$this->load->view('nav1');
		$this->load->view('nav2');
		$this->load->view('codeForm',$data);
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
}
?>