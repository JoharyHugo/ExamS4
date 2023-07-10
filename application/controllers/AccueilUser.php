<?php
	
	/**
	 * 
	 */
	class AccueilUser extends CI_controller
	{
		public function bienvenu(){
			$this->load->view('headPage');
			$this->load->view('nav1');
			$this->load->view('nav2');
			$this->load->view('footPage');
		}		
	}
?>