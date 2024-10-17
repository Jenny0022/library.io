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
            $this->load->view('views/index', $data);
            $this->load->view('templates/footer');
    }

        public function add()
        {
           $data['judul'] = 'Form add views data';
           $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('collection', 'collection', 'required'); 
            if ($this->form_validation->run() == False){
                $this->load->view('templates/header', $data);
                $this->load->view('views/add', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Views_model->addViewsData();
                $this->session->set_flashdata('flash', 'added');
                redirect('views');
            }
        }

     
    public function change($id)
    {
        $data['judul'] = 'Form change views data';
        $data['views'] = $this->Views_model->getViewsById($id);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('collection', 'Collection', 'required'); 
            if ($this->form_validation->run() == False){
                $this->load->view('templates/header', $data);
                $this->load->view('views/change', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Views_model->changeDataViews($id);
                $this->session->set_flashdata('flash', 'changed');
                redirect('views');
            }
        }


    public function detail($id)
    {
       $data['judul'] = 'Detail views data';
       $data['views'] = $this->Views_model->getViewsById($id);
       $this->load->view('templates/header', $data);
       $this->load->view('Views/detail', $data);
       $this->load->view('templates/footer');
    }


    public function delete($id)
    {
       $this->Views_model->deleteDataViews($id);
       $this->session->set_flashdata('flash', 'deleted');
       redirect('views'); 

    }
}
