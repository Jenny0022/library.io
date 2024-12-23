<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $data['judul'] = 'About Us';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data); // Load the About view
        $this->load->view('templates/footer');
    }
}
?>