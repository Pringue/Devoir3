<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function connexionAdmin()
	{
		$this->load->model("Model_devoir");
		$data["regions"] = $this->Model_devoir->region_admin();
		$this->load->view("afficher_region", $data);
	}

	public function connexion_simple()
	{
		$this->load->model("Model_devoir");
		$data["regions"] = $this->Model_devoir->region_simple();
		$this->load->view("afficher_region", $data);
	}

	public function afficherVille()
	{
		$this->load->model("Model_devoir");
		$data["villes"] = $this->Model_devoir->affiche_ville($_GET["id"]);
		$data["region"] = $_GET["id"];
		$this->load->view("afficher_ville", $data);
	}

	public function ajouterScoreAdmin()
	{
		$this->load->model("Model_devoir");
		$this->Model_devoir->ajouterScore($_GET["id"], $_GET["nbVille"]);
		$data["regions"] = $this->Model_devoir->region_admin();
		$this->load->view("afficher_region", $data);
	}

	public function ajouterScore()
	{
		$this->load->model("Model_devoir");
		$this->Model_devoir->ajouterScore($_GET["id"], $_GET["nbVille"]);
		$data["regions"] = $this->Model_devoir->region_simple();
		$this->load->view("afficher_region", $data);
	}
}
