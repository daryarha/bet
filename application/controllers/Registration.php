<?php
class Registration extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['level']=$this->peserta_model->getLevel();

                $this->load->helper('form');
                $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required|max_length[10]');
            $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('phone', 'Contact user', 'required|max_length[13]');
                $this->form_validation->set_rules('nama_institusi', 'Institution', 'required');
                $this->form_validation->set_rules('alamat_institusi', 'Address institution', 'required');
                $this->form_validation->set_rules('id_lvl', 'Level', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                echo "<script type='text/javascript'>alert('We are sorry, the registration already closed. See you at the next BET 2019!!');</script>";
                redirect(base_url(),'refresh');
                $data['title']="registration";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user',$data);
                $this->load->view('user/register',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->peserta_model->registering();
                echo "<script type='text/javascript'>alert('Registration succesful');</script>";
                redirect(base_url('login/'),'refresh');
            }
        }
}
?>