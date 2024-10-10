 <?php


 class Login extends CI_Controller
 {

 	 public function index()
 	 {
 	 	 $data['judul'] = 'Login Page';
 	 	 $this->load->view('admin/templates/admin_header', $data);
 	 	 $this->load->view('admin/login', $data);
 	 	 $this->load->view('admin/templates/admin_header');
 	 }
 }


?>