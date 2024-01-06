<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class author extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("author_model");
		$this->load->model("library_model");

    }



	public function index()
	{
		$this->load->view('author_view.php');
	}
	public function save(){
		$data = array(
			"name" =>$this->input->post("name"),
			"surname" =>$this->input->post("surname"),
			"status" =>$this->input->post("status"),
			
		);

		$insert = $this->author_model->insert($data);

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
