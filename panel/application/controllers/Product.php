<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public $viewfolder="";

	public function __construct(){

		parent::__construct();

		$this->viewfolder="product_v";
		$this->load->model("Product_model");
	}


	public function index()
	{
		$viewData=new stdClass();

        /* Tablo listele */

        $items= $this->Product_model->get_all();

        /* View'e gönderilcek veriler */

        $viewData->viewfolder=$this->viewfolder;

        $viewData->SubViewfolder="list";

        $viewData->items=$items;

		$this->load->view("{$this->viewfolder}/{$viewData->SubViewfolder}/index",$viewData);
	}
}
