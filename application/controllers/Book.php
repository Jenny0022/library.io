<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model'); // Pastikan model tersedia
    }

    public function index() {
        $data['books'] = $this->Book_model->getAllBooks(); // Ambil semua data buku
        $this->load->view('books/index', $data); // Tampilkan ke view
    }

    public function add() {
        if ($this->input->method() === 'post') {
            // Ambil data dari input form
            $data = [
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'cover_image' => $this->input->post('cover_image'),
                'read_link' => $this->input->post('read_link'),
                'status' => $this->input->post('status')
            ];
    
            // Simpan ke database
            $this->db->insert('books', $data);
    
            // Redirect kembali ke daftar buku
            redirect('book');
        }
    
        // Tampilkan halaman tambah buku
        $data['judul'] = 'Tambah Buku';
        $this->load->view('books/add', $data);
    }

    public function edit($id) {
        // Memeriksa apakah pengguna adalah admin
        if ($this->session->userdata('role') != 'admin') {
            redirect('login'); // Arahkan ke halaman login jika bukan admin
        }
    
        // Ambil data buku berdasarkan ID
        $data['book'] = $this->Book_model->getBookById($id);
    
        // Proses form submit
        if ($this->input->post()) {
            // Proses edit buku
            $this->Book_model->editBook($id, $this->input->post());
            redirect('book');
        }
    
        // Tampilkan form edit dengan data buku yang diambil
        $this->load->view('books/edit', $data);
    }
    
    public function delete($id) {
        // Pastikan ID yang diterima valid
        if (is_numeric($id)) {
            // Memanggil model untuk menghapus buku berdasarkan ID
            $this->Book_model->deleteBook($id);
    
            // Redirect ke halaman daftar buku setelah buku dihapus
            redirect('book');
        } else {
            // Jika ID tidak valid, redirect kembali ke daftar buku
            redirect('book');
        }
    }
    
    
}
