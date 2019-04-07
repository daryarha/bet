<?php
class Peserta extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');

                $user_data = $this->session->userdata('logUser');
                if($user_data['log']!='in') {
                        redirect(base_url("login/"),'refresh');
                }                
        }

        public function index()
        {       
                $statsBio=$this->peserta_model->getBioStatus();
                if($statsBio){
                        redirect(base_url('peserta/viewBio/'.$statsBio),'refresh');
                }else{
                        redirect(base_url('peserta/biodata/'.$statsBio),'refresh');
                }
        }

        public function biodata($stats=FALSE){
                if(!$stats){
                $data['level'] = $this->peserta_model->getLevel();
                $data['category'] = $this->peserta_model->getCategory();
                $data['debate'] = $this->peserta_model->getPesertabyKategori(1);
                $data['speech'] = $this->peserta_model->getPesertabyKategori(2);
                $data['storytelling'] = $this->peserta_model->getPesertabyKategori(3);
                $data['newscasting'] = $this->peserta_model->getPesertabyKategori(4);
                $data['levelInstitution']=$this->peserta_model->getLevelInstitution();
                        $this->load->helper('form');
                        $this->load->library('form_validation');

                    if ($this->form_validation->run() === FALSE)
                    {
                        $this->load->view('templates/header');
                        $this->load->view('peserta/biodata_head');
                        $this->load->view('peserta/biodata',$data);
                        $this->load->view('templates/footer');
                    }
                    else
                    {
                        $this->peserta_model->addBiodata();
                        echo "<script type='text/javascript'>alert('Biodata added');</script>";
                        redirect(base_url('peserta/viewBio/'.true),'refresh');
                    }
                }else{
                        redirect(base_url('peserta/viewBio/'.$stats),'refresh');
                }
        }

        public function addbiodata($stats=FALSE){
                if($stats){
                $data['level'] = $this->peserta_model->getLevel();
                $data['category'] = $this->peserta_model->getCategory();
                $data['debate'] = $this->peserta_model->getPesertabyKategori(1);
                $data['speech'] = $this->peserta_model->getPesertabyKategori(2);
                $data['storytelling'] = $this->peserta_model->getPesertabyKategori(3);
                $data['newscasting'] = $this->peserta_model->getPesertabyKategori(4);
                $data['levelInstitution']=$this->peserta_model->getLevelInstitution();
                        $this->load->helper('form');
                        $this->load->library('form_validation');

                    if ($this->form_validation->run() === FALSE)
                    {
                        $this->load->view('templates/header');
                        $this->load->view('peserta/biodata_head');
                        $this->load->view('peserta/biodata',$data);
                        $this->load->view('templates/footer');
                    }
                    else
                    {
                        $this->peserta_model->addBiodata();
                        echo "<script type='text/javascript'>alert('Biodata added');</script>";
                        redirect(base_url('peserta/viewBio/'.true),'refresh');
                    }
                }else{
                        redirect(base_url('peserta/biodata/'.$stats),'refresh');
                }
        }

        public function logout(){
                $this->session->sess_destroy();
                redirect(base_url("login/"),'refresh');
        }

        public function viewBio($stats=FALSE)
        {
                if($stats){
                $data['user'] = $this->peserta_model->getPesertabyUsername();

                $this->load->view('templates/header');
                $this->load->view('peserta/biodata',$data);
                $this->load->view('templates/footer');
                }else{
                        redirect(base_url('peserta/addBio/'.$stats),'refresh');
                }
        }


        public function editBio()
        {
                $data['level'] = $this->peserta_model->getLevel();
                $data['category'] = $this->peserta_model->getCategory();

                $this->load->view('templates/header');
                $this->load->view('register/index',$data);
                $this->load->view('templates/footer');
        }
}
?>