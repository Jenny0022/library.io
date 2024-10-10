<?php 

class Views extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Views_model'); 
    }

    public function index()
    {
        $data['judul'] = 'Views';
        $data['views'] = $this->Views_model->getAllViews();
        
        if($this->input->post('keyword')){
            $data['views'] = $this->Views_model->Searching(); 
        } else {
            $data['views'] = $this->Views_model->getAllViews();
        }
        $this->load->view('templates/header', $data);
            $this->load->view('Views/index', $data);
            $this->load->view('templates/footer');

        // Validasi form
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[Views.username]');
        $this->form_validation->set_rules('viewsname', 'viewsname', 'required|is_unique[Views.viewsname]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Views/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'year' => $this->input->post('year'),
                'publisher' => $this->input->post('publisher'),
            ];
            $this->db->insert('Views', $data);
            $this->session->set_flashdata('flash', 'Added.');
            redirect('views');
        }
    }

    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $data['Views'] = $this->Views_model->Searching();
        $this->load->view('Views/index', $data); 
    }

    public function change()
    {
        $id = $this->input->post('id'); 
        $this->Views_model->changeDataViews($id);
        $this->session->set_flashdata('flash', 'Changed.');
        redirect('views');
    }

    public function delete($id)
    {
        $this->Views_model->deleteDataViews($id);
        $this->session->set_flashdata('flash', 'Deleted.');
        redirect('views');
    }
}
