<?php


 class Registrasi extends CI_Controller
 {
 	 ($this->form_validation->set_rules('username', 'Username', 'required|trim');
 	 ($this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.Email]');
 	 ($this->form_validation->set_rules('password', 'Password', 'required|trim|matches[Repassword] |min_length[3]');
 	 ($this->form_validation->set_rules('repassword', 'Repassword', 'required|trim|matches[Password]');

 	 public function index()
 	 {
 	 	 if($this->form_validation->run() == false)
 	 	 {
 	 	 	$data['judul'] = "Registrasi Page";
 	 	 $this->load->view('admin/templates/admin_header', $data);
 	 	 $this->load->view('admin/registrasi', $data);
 	 	 $this->load->view('admin/templates/admin_header');
 	 	 }else{
 	 	 	$data=[
 	 	 		    'Username' => ($this->input->post('Username', true)),
 	 	 		    'Email' => ($this->input->post('Email', true)),
 	 	 		    'Password' => ($this->input->post('Password'), PASSWORD_DEFAULT)

 	 	 	];
 	 	 	$this->db->insert('tbl_user', $data);
 	 	 	$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
  Congrats on your successful registration
</div>');
 	 	 	redirect('admin/login');
 	 	 }
 	 	 
 	 }
 }


?>