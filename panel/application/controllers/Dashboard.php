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
		$viewData=new stdClass();

		$viewData->viewfolder=$this->viewfolder;

		$viewData->Subviewfolder="list";

		$this->load->view("{$this->viewfolder}/{$viewData->Subviewfolder}/index",$viewData);
	}
}
