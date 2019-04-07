<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
                $this->load->helper('form');
                $this->load->library('form_validation');

                                
        }

        public function register(){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('admin/register_head');
                $this->load->view('admin/register');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->admin_model->registering();
                echo "<script type='text/javascript'>alert('Registration successful');</script>";
                redirect(base_url('admin/login'),'refresh');
            }
        }

        public function login(){
            $user_data = $this->session->userdata('logAdmin');
                if($user_data['log']=='Ain') {
                        redirect(base_url("admin/home"),'refresh');
                }
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('admin/login_head');
                $this->load->view('admin/login');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->admin_model->checklog();
            }
        }

        public function home(){
            $user_data = $this->session->userdata('logAdmin');
                if($user_data['log']!='Ain') {
                        redirect(base_url("admin/login"),'refresh');
                }else{
                    redirect(base_url("admin/sc"));
                }
        }

        public function sc(){
            $user_data = $this->session->userdata('logAdmin');
            $data['studentcard'] = $this->admin_model->getFotoPeserta();
                if($user_data['log']!='Ain') {
                        redirect(base_url("admin/login"),'refresh');
                }else{
                $this->load->view('templates/header');
                $this->load->view('admin/sc_head');
                $this->load->view('admin/sc',$data);
                $this->load->view('templates/footer');
                }
        }

        public function total(){
            $user_data = $this->session->userdata('logAdmin');
                $data['category'] = $this->peserta_model->getCategory();
                $data['countSpeechVar'] = $this->peserta_model->getJumlahPesertaTotal(2,1);
                $data['countStorytellingVar'] = $this->peserta_model->getJumlahPesertaTotal(3,1);
                $data['countNewscastingVar'] = $this->peserta_model->getJumlahPesertaTotal(4,1);
                $data['countDebateHS'] = $this->peserta_model->getJumlahPesertaTotal(1,2);
                $data['countSpeechHS'] = $this->peserta_model->getJumlahPesertaTotal(2,2);
                $data['countStorytellingHS'] = $this->peserta_model->getJumlahPesertaTotal(3,2);
                $data['countNewscastingHS'] = $this->peserta_model->getJumlahPesertaTotal(4,2);
                $data['countDebateHSBayar'] = $this->admin_model->getJumlahPesertaBayar(1,2,1);
                $data['countSpeechHSBayar'] = $this->admin_model->getJumlahPesertaBayar(2,2,1);
                $data['countStorytellingHSBayar'] = $this->admin_model->getJumlahPesertaBayar(3,2,1);
                $data['countNewscastingHSBayar'] = $this->admin_model->getJumlahPesertaBayar(4,2,1);
                $data['countSpeechVarBayar'] = $this->admin_model->getJumlahPesertaBayar(2,1,1);
                $data['countStorytellingVarBayar'] = $this->admin_model->getJumlahPesertaBayar(3,1,1);
                $data['countNewscastingVarBayar'] = $this->admin_model->getJumlahPesertaBayar(4,1,1);
                $data['countDebateHSBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(1,2);
                $data['countSpeechHSBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(2,2);
                $data['countStorytellingHSBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(3,2);
                $data['countNewscastingHSBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(4,2);
                $data['countSpeechVarBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(2,1);
                $data['countStorytellingVarBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(3,1);
                $data['countNewscastingVarBelumBayar'] = $this->admin_model->getJumlahPesertaBayar(4,1);
                if($user_data['log']!='Ain') {
                        redirect(base_url("admin/login"),'refresh');
                }else{
                $this->load->view('templates/header');
                $this->load->view('admin/total_student_head');
                $this->load->view('admin/total_student',$data);
                $this->load->view('templates/footer');
                }
        }

        public function confirm(){
            $user_data = $this->session->userdata('logAdmin');
            $data['confirm'] = $this->admin_model->getBuktiBayar();
                if($user_data['log']!='Ain') {
                        redirect(base_url("admin/login"),'refresh');
                }else{
                $this->load->view('templates/header');
                $this->load->view('admin/confirm_head');
                $this->load->view('admin/confirm',$data);
                $this->load->view('templates/footer');
                }
        }

        public function confirming($id=FALSE){
            $user_data = $this->session->userdata('logAdmin');
                if($user_data['log']!='Ain') {
                        redirect(base_url("admin/login"),'refresh');
                }else{
                    if($id==FALSE){
                        redirect(base_url("admin/confirm"));
                    }else{
                    $data['confirmed'] = $this->admin_model->setConfirm($id);
                    echo "<script type='text/javascript'>alert('Confirmed successfully');</script>";
                    redirect(base_url('admin/confirm'),'refresh');
                    }
                }
        }

        public function forgetpass(){            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('admin/register_head');
                $this->load->view('admin/lupa_pass');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->admin_model->changepass();
                echo "<script type='text/javascript'>alert('Registration successful');</script>";
                redirect(base_url('admin/login'),'refresh');
            }
        }

        public function logout(){
                $this->session->sess_destroy();
                redirect(base_url("admin/login/"),'refresh');
        }
}
?>