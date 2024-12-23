<?php

class Bookadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'BOOK ADMIN PAGE';
        $data['books'] = $this->Book_model->getAllBooks();
    
        if ($this->input->post('keyword')) {
            $data['books'] = $this->Book_model->searchBooks($this->input->post('keyword'));
        }

        $this->load->view('adminlibrary/templates/dashboard_header', $data);
        $this->load->view('adminlibrary/bookadmin', $data);
        $this->load->view('adminlibrary/templates/dashboard_footer');
    }

    public function add()
    {
        // Validasi form
        $this->form_validation->set_rules('title', 'Judul Buku', 'required');
        $this->form_validation->set_rules('author', 'Penulis', 'required');
        $this->form_validation->set_rules('category', 'Kategori', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('cover_image', 'Cover Image URL', 'required');
        $this->form_validation->set_rules('read_link', 'Link Buku', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Gagal menambah buku. Pastikan semua data diisi dengan benar.');
            redirect('bookadmin');
        } else {
            $bookData = [
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'cover_image' => $this->input->post('cover_image'),
                'read_link' => $this->input->post('read_link'),
                'status' => $this->input->post('status'),
            ];

            $this->Book_model->insertBook($bookData);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('bookadmin');
        }
    }

    public function edit($id)
    {
        $data['book'] = $this->Book_model->getBookById($id);

        if (!$data['book']) {
            $this->session->set_flashdata('flash', 'Buku tidak ditemukan!');
            redirect('bookadmin');
        }

        $this->form_validation->set_rules('title', 'Judul Buku', 'required');
        $this->form_validation->set_rules('author', 'Penulis', 'required');
        $this->form_validation->set_rules('category', 'Kategori', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('cover_image', 'Cover Buku', 'required');
        $this->form_validation->set_rules('read_link', 'Link Buku', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Edit Buku';
            $this->load->view('adminlibrary/templates/dashboard_header', $data);
            $this->load->view('adminlibrary/bookedit', $data);
            $this->load->view('adminlibrary/templates/dashboard_footer');
        } else {
            $bookData = [
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'cover_image' => $this->input->post('cover_image'),
                'read_link' => $this->input->post('read_link'),
                'status' => $this->input->post('status'),
            ];

            $this->Book_model->editBook($id, $bookData);

            $this->session->set_flashdata('flash', 'diubah');
            redirect('bookadmin');
        }
    }

    public function hapus($id)
    {
        $this->Book_model->deleteBook($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('bookadmin');
    }
}
