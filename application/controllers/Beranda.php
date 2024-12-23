<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model'); // Load Books model
    }

    public function index() {
        $data['judul'] = 'Library Homepage';
        $data['books'] = $this->Book_model->getallbooks(); // Retrieve all books

        // Load views and pass data
        $this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data); // Pass data to the view
        $this->load->view('templates/footer');
    }
}
?>