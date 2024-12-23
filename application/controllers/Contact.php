<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $data['judul'] = 'Contact Us';
        $this->load->view('templates/header', $data);
        $this->load->view('contact/index', $data); // Load the Contact view
        $this->load->view('templates/footer');
    }
}
?>