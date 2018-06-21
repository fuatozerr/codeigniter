<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $viewfolder="";

	public function __construct(){

		parent::__construct();

		$this->viewfolder="dashboard_v";
	}


	public function index()
	{
		$this->load->view("{$this->viewfolder}/index");
	}
}
