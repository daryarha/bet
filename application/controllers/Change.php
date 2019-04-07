<?php
class Change extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
                $user_data = $this->session->userdata('logUser');
        }


        public function index($password=FALSE)
        {
                $this->load->helper('form');
                $this->load->library('form_validation');
            $cek = $this->peserta_model->checkPassword($password);
            if(!$password || !$cek){
                redirect(base_url('forget'),'refresh');
            }
            $data = $this->peserta_model->getPendaftarbyUsernameorPassword('sd',$password);       
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('user/forget_head');
                $this->load->view('user/change',$password);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->peserta_model->changepass($data['username']);
                echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
                redirect(base_url('login'),'refresh');
            }
        
        }

        public function user($password){
                $this->load->helper('form');
                $this->load->library('form_validation');
            $cek = $this->peserta_model->checkPassword($password);
            if(!$password || !$cek){
                redirect(base_url('forget'),'refresh');
            }
            $data = $this->peserta_model->getPendaftarbyUsernameorPassword('sd',$password);
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === FALSE)
            {       
                $this->load->view('templates/header');
                $this->load->view('user/forget_head');
                $this->load->view('user/change',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->peserta_model->changepass($data['username']);
                echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
                redirect(base_url('login'),'refresh');
            }
        }
        // public function view($slug = NULL)
        // {
		
        // $data['news_item'] = $this->news_model->get_news($slug);


        // if (empty($data['news_item']))
        // {
        //         show_404();
        // }

        // $data['title'] = $data['news_item']['title'];

        // $this->load->view('templates/header', $data);
        // $this->load->view('news/view', $data);
        // $this->load->view('templates/footer');
        // }
}
?>