<?php
class Faq extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['faq']=$this->peserta_model->getFAQ();
                $data['title']="faq";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user',$data);
        $this->load->view('user/faq',$data);
                $this->load->view('templates/footer');
        }
}
?>