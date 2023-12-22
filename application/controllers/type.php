<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class type extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }



	public function index()
	{
		$this->load->view('type_view.php');
	}
	public function save(){
		$data = array(
			"name" =>$this->input->post("name"),
			"status" =>$this->input->post("status"),
			
		);
		$this->load->model("type_model");

		$insert = $this->type_model->insert($data);

		if($insert){
			echo "bilgiler kaydedildi";
		}else{
			echo "kaydedilirken bir hata oluştu";
		}
	}
}
