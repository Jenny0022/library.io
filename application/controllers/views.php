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
        }
            $this->load->view('templates/header', $data);
            $this->load->view('Views/index', $data);
            $this->load->view('templates/footer');

            
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[Views.username]');
            $this->form_validation->set_rules('collection', 'Collection', 'required|is_unique[Views.collection]');
            if ($this->form_validation->run() == False){

        
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'title' => $this->input->post('title'),
                
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
