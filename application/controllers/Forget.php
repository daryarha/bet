<?php
class Forget extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
                $user_data = $this->session->userdata('logUser');
        }


        public function index()
        {

                $this->load->helper('form');
                $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['title']="forget password";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user',$data);
                $this->load->view('user/forget');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->peserta_model->checkForget();
                $this->load->view('templates/header');
                $this->load->view('user/forget_head');
                $this->load->view('user/checkemail');
                $this->load->view('templates/footer');
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