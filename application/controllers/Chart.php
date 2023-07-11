<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller{

    public function graph()
    {
        $this->load->view('headerAdmin');
		$this->load->view('navbarAdmin');
		$this->load->view('chart');
		$this->load->view('footerAdmin');
    }

}
?>