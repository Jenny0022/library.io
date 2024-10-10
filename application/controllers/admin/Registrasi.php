<?php


 class Registrasi extends CI_Controller
 {

 	 public function index()
 	 {
 	 	 $data['judul'] = "Registrasi Page";
 	 	 $this->load->view('admin/templates/admin_header', $data);
 	 	 $this->load->view('admin/registrasi', $data);
 	 	 $this->load->view('admin/templates/admin_header');
 	 }
 }


?>