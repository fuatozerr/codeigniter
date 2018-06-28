<?php

class Product extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "product_v";

        $this->load->model("product_model");

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $items = $this->product_model->get_all();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }


    public function new_form(){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }


    public function save(){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("title","Başlık","required");

        $this->form_validation->set_message(
            array(
                "required"=> "{field} boş bırakılamaz" //başlık yerine dinamik otomatik gelir
            )
        );

        $validate=$this->form_validation->run();


        if($validate){

           $insert=$this->product_model->add(array(

                "title"         =>$this->input->post("title"),
                "description"   =>$this->input->post("description"),
                "url"           =>"test",
                "isActive"      => 1,
                "rank"          =>2,
                "createdAt"     =>date("Y-m-d H:i:s")

            ));

           if($insert)
           {
               echo "kayit başarılı";
           }

           else{

               echo "kayit başarısız";
           }

        }
            else
            {
                $viewData = new stdClass();

                /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
                $viewData->viewFolder = $this->viewFolder;
                $viewData->subViewFolder = "add";
                $viewData->form_validation=true;
                $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            }


        //echo "saved";

    }


}
