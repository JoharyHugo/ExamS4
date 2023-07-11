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
       $regime= $this->model->getRegimeSpecifique($Apropos['idObjectif'],$Apropos['poids']);
	   $sport=$this->model-> getSportSpecifique($regime[0]['idRegime']);
	   
	   $data['regime']=$regime;
       $data['sport']=$sport;
		$this->load->view('headPage');
		$this->load->view('nav1');
		$this->load->view('nav2');
		$this->load->view('tabregime',$data);
		$this->load->view('footPage');
	} 
	
	public function tableauPdf()
	{
    // Charger la bibliothèque PDF
    $this->load->library('pdf');
   
    $this->load->model('regime_model', 'model');
	$idUser=$this->session->userdata('id');
	$Apropos= $this->model->getIdObjectif($idUser);
    // Récupérer les données de la base de données
    $regime= $this->model->getRegimeSpecifique($Apropos['idObjectif'],$Apropos['poids']);
	$sport=$this->model->getSportSpecifique($regime[0]['idRegime']);
	$data['records'] =$regime;
	$data['sport']=$sport;   
	// Remplacez 'model' par votre modèle de base de données

    $header = array('Nomsakafo', 'quantite');

    // Charger la bibliothèque PDF (assurez-vous d'avoir correctement intégré votre bibliothèque personnalisée)
    $pdf = new PDF();

    // Définir les métadonnées du PDF
    $pdf->SetCreator('CodeIgniter');
    $pdf->SetAuthor('Votre nom');
    $pdf->SetTitle('Titre du PDF');
    $pdf->SetSubject('Sujet du PDF');

    // Ajouter une page
    $pdf->AddPage();

    // Parcourir les enregistrements et générer le contenu du PDF
    foreach ($data['records'] as $record) {
        $pdf->Cell(40, 10, $record['NomSakafo'], 1, 0); // Modifier la sortie en fonction de votre structure de données
        $pdf->Cell(150, 10, $record['quantite'], 1, 1);
    }

	foreach ($data['sport'] as $sport) {
        $pdf->Cell(40, 10, $sport['NomSport'], 1, 0); // Modifier la sortie en fonction de votre structure de données
        $pdf->Cell(150, 10, $sport['duree'].'min', 1, 1);
    }
    $pdf->AliasNbPages();
    // Générer le fichier PDF et le télécharger
    $pdf->Output();
}



}
