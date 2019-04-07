<?php
class Reglogfaq extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
                $user_data = $this->session->userdata('logUser');  
        }


        public function index()
        {
                $this->load->view('templates/header-home');
                $this->load->view('templates/nav-home');
                $this->load->view('reglogfaq');
                $this->load->view('templates/footer-home');
                $this->load->view('templates/footer');

        }
}
?>