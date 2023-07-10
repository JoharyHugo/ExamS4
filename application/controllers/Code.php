<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Code extends CI_Controller{
    
    public function codeForm()
    {
        $this->load->model('Code_model','model');
        $data['code']=$this->model->getAllCode();
        $this->load->view('codeForm',$data);
    }

    public function insertionCode()
    {
        $this->load->model('Code_model','model');
        $code=$this->input->post('code');
        $idUser=$this->session->userdata('id');
        try {
            $codes=$this->model->verificationcode($code);
            $this->model-> evoieCodeAdmin($idUser,$codes['idCode']);
            redirect("Code/codeForm");
        } catch (Exception $e) {
           echo $e->getMessage();
        }
    }
}
?>