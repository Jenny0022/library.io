<?php

class Login extends CI_Controller
{
     public function index()
     {
          $data['judul'] = 'LIBRARY';
          $this->load->view('admin/templates/admin_header', $data);
          $this->load->view('admin/login', $data);
          $this->load->view('admin/templates/admin_footer');
     }

     public function proses_login()
     {
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          // Ambil data user berdasarkan email
          $tbl_user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
          
          if ($tbl_user) {
               // Verifikasi password
               if (password_verify($password, $tbl_user['password'])) {
                    $data = [
                         'email' => $tbl_user['email'],
                         'role' => $tbl_user['role']  // Pastikan ada kolom 'role' di tbl_user
                    ];
                    
                    // Set session data
                    $this->session->set_userdata($data);

                    // Cek role user
                    if ($tbl_user['role'] == 'admin') {
                         redirect('dashboard');  // Redirect ke dashboard admin
                    } else {
                         redirect('beranda');  // Redirect ke halaman user biasa
                    }
               } else {
                    // Pesan error jika password salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect('login');
               }
          } else {
               // Pesan error jika email tidak terdaftar
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not been registered!</div>');
               redirect('login');
          }
     }

     public function logout()
     {
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role');  // Jangan lupa unset role juga
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please Login Again!</div>');
          redirect('login');
     }
}
?>
