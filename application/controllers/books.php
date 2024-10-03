<?php 

class Books extends CI_Controller
{

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Books_model');

	}
	public function index()
{
    $data['judul'] = 'Books';
    $data['books'] = $this->Books_model->getAllBooks();
    if($this->input->post('keyword')){
    	$data['books'] = $this->Books_model->Searching();
    }
    $data['books'] = $this->Books_model->getAllBooks();
    $this->form_validation->set_rules('code', 'code', 'required|is_unique[books.code]');
    $this->form_validation->set_rules('title', 'title', 'required|is_unique[books.title]');
    $this->form_validation->set_rules('author', 'author', 'required');
    $this->form_validation->set_rules('year', 'year', 'required');
    $this->form_validation->set_rules('publisher', 'publisher', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
    } else {
        $data = [
            'code' => $this->input->post('code'),
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'year' => $this->input->post('year'),
            'publisher' => $this->input->post('publisher'),
        ];
        $this->db->insert('books', $data);
        $this->session->set_flashdata('flash', 'Added.');
        redirect('books');
    }
}


    public function change()
{
    $id = $this->input->post('id'); 
    $this->Books_model->changeDataBooks($id);
    $this->session->set_flashdata('flash', ' Changed.');
    redirect('books');
}

   public function delete($id)
   {
    $this->Books_model->deleteDataBooks($id);
    $this->session->set_flashdata('flash', ' Deleted.');
    redirect('books');
   }
}





