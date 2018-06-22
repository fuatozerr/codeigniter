<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public $viewfolder="";

	public function __construct(){

		parent::__construct();

		$this->viewfolder="product_v";
	}


	public function index()
	{
		$viewData=new stdClass();

		$viewData->viewfolder=$this->viewfolder;

		$viewData->SubViewfolder="list";

		$this->load->view("{$this->viewfolder}/{$viewData->SubViewfolder}/index",$viewData);
	}
}
