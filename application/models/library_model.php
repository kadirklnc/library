<?php


   class Library_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data = array())
    {
        return $this->db->insert("book", $data);
    }

    public function getAllBooks($order="id ASC"){
        return $this->db->order_by($order)->get("book")->result();
    }
    public function getAllTypes($order="id ASC"){
        return $this->db->order_by($order)->get("types")->result();
    }
    public function getAllAuthor($order="id ASC"){
        return $this->db->order_by($order)->get("author")->result();
    }
   }



?>