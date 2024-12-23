<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Cek apakah user sudah login
        if(!$this->session->userdata('email')) {
            redirect('login');
        }
        
        // Cek role dengan ketat
        if($this->session->userdata('role') !== 'admin') {
            // Hapus session
            $this->session->sess_destroy();
            
            // Redirect ke halaman login dengan pesan
            $this->session->set_flashdata('massage', 
                '<div class="alert alert-danger" role="alert">
                    Anda tidak memiliki akses ke halaman tersebut!
                </div>'
            );
            redirect('login');
        }
    }

    public function index()
    {    
        $data['judul'] = 'DASHBOARD ADMIN - LIBRARY';
        $data['user'] = $this->db->get_where('tbl_user', 
            ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('adminlibrary/templates/dashboard_header', $data);
        $this->load->view('adminlibrary/dashboard', $data);
        $this->load->view('adminlibrary/templates/dashboard_footer');
    }
}
?>