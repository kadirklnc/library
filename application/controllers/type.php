<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class type extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("type_model");
		$this->load->model("library_model");

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

		$insert = $this->type_model->insert($data);

		if($insert){
			echo "bilgiler kaydedildi";
			$types = $this->library_model->getAllTypes();
		$books = $this->library_model->getAllBooks();


		$viewData = new stdClass();
		$viewData->books = $books;
		$viewData->types = $types;
			$this->load->view('library_view', $viewData);

		}else{
			echo "kaydedilirken bir hata oluştu";
		}
	}
}
