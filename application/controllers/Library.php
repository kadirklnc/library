<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }



	public function index()
	{
		$this->load->view('library_view');
	}
	public function save(){

		$data = array(
			"name" =>$this->input->post("name"),
			"author" =>$this->input->post("author"),
			"type" =>$this->input->post("type"),
			"publish_date" =>$this->input->post("publish_date"),
			"status" =>$this->input->post("status"),
			
		);
		$this->load->model("library_model");

		$insert = $this->library_model->insert($data);

		if($insert){
			echo "bilgiler kaydedildi";
		}else{
			echo "kaydedilirken bir hata oluştu";
		}





		
	}
}
