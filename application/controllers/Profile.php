<?php
/** 
 * summary
*/
class Profile extends CI_Controller
{
    public function index()
    {
        if (empty($this->session->userdata('email'))) {
            redirect('login');
        }
        
        // Ambil data pengguna dari sesi atau database
        $data['judul'] = 'PROFILE PAGE';
        $data['user'] = $this->session->userdata('email'); // Sesuaikan dengan data pengguna yang relevan

        // Load views dengan data
        $this->load->view('adminlibrary/templates/dashboard_header', $data);
        $this->load->view('adminlibrary/profile', $data);
        $this->load->view('adminlibrary/templates/dashboard_footer', $data);
    }
}

 ?>