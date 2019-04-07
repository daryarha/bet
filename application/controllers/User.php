<?php
class User extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('peserta_model');
                $this->load->helper('url_helper');
                $this->load->helper(array('form', 'url'));

                $user_data = $this->session->userdata('logUser');
                if($user_data['log']!='in') {
                        redirect(base_url("login/"),'refresh');
                }                
        }

        public function index()
        {       
                        redirect(base_url('user/biodata/'),'refresh');
        }
        //UPLOAD FILE//
        public function upload(){
                $data['title']="upload receipt";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                $this->load->view('user/upload', array('error' => ' ' ));
                        $this->load->view('templates/footer');
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/receipt';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                $data['title']="upload receipt";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                        $this->load->view('user/upload', $error);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $filename = $this->upload->data('file_name');
                        $this->peserta_model->insertFoto($filename);
                        echo "<script type='text/javascript'>alert('Receipt uploaded successfully');</script>";
                        redirect(base_url('user/biodata/'),'refresh');
                }
        }

        //END OF UPLOAD FILE//

        //FEE//
        public function totalfee(){
                $data['category'] = $this->peserta_model->getCategory();
                $data['levelInstitution']=$this->peserta_model->getLevelInstitution();
                $data['debate'] = $this->peserta_model->getJumlahTimDebate();
                $data['speech'] = $this->peserta_model->getJumlahPeserta(2);
                $data['storytelling'] = $this->peserta_model->getJumlahPeserta(3);
                $data['newscasting'] = $this->peserta_model->getJumlahPeserta(4);
                $data['tgl']=$this->peserta_model->getTanggalDaftar();
                $data['title']="total registration fee";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                        $this->load->view('user/fee',$data);
                        $this->load->view('templates/footer');
        }
        //END OF FEE//

        public function biodata(){
                $data['level'] = $this->peserta_model->getLevel();
                $data['category'] = $this->peserta_model->getCategory();
                $data['debate'] = $this->peserta_model->getPesertaDebateArray();
                $data['debatewl'] = $this->peserta_model->getPesertaDebateWLArray();
                $data['speech'] = $this->peserta_model->getPesertabyKategori(2);
                $data['storytelling'] = $this->peserta_model->getPesertabyKategori(3);
                $data['newscasting'] = $this->peserta_model->getPesertabyKategori(4);
                $data['countDebateWL'] = $this->peserta_model->getJumlahTimDebateWL();
                $data['countDebate'] = $this->peserta_model->getJumlahPeserta(1);
                $data['countSpeech'] = $this->peserta_model->getJumlahPeserta(2);
                $data['countStorytelling'] = $this->peserta_model->getJumlahPeserta(3);
                $data['countNewscasting'] = $this->peserta_model->getJumlahPeserta(4);
                $data['levelInstitution']=$this->peserta_model->getLevelInstitution();
                $data['upload']=$this->peserta_model->checkUpload();
                $data['title']="biodata delegation";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                        $this->load->view('user/biodata',$data);
                        $this->load->view('templates/footer');
        }

        

        public function add($cat=FALSE , $cek=FALSE){

                $config['upload_path']          = './uploads/sc';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                if((!$cat && !$cek)||!$cat){
                redirect(base_url('user/biodata'),'refresh');
                }
                // $data['kuota'] = $this->peserta_model->checkKuota();
                $data['category'] = $this->peserta_model->getCategory($cat);
                $data['check']=$this->peserta_model->checkLevelInstitution($cat);
                $data['upload']=$this->peserta_model->checkUpload();
                $data['checkKuota']=$this->peserta_model->checkKuota($cat);
                $this->load->helper('form');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                if($cat==1){
            $this->form_validation->set_rules('nama1', 'Name', 'required');
            $this->form_validation->set_rules('no_telp1', 'Phone', 'required');
            $this->form_validation->set_rules('nama2', 'Name', 'required');
            $this->form_validation->set_rules('no_telp2', 'Phone', 'required');
            $this->form_validation->set_rules('nama3', 'Name', 'required');
            $this->form_validation->set_rules('no_telp3', 'Phone', 'required');
                }else{
            $this->form_validation->set_rules('nama', 'Name', 'required');
            $this->form_validation->set_rules('no_telp', 'Phone', 'required');
                }

            if ($this->form_validation->run() === FALSE || (($cat>1 && !$this->upload->do_upload('foto')) || ($cat==1 && !$this->upload->do_upload('foto3'))))
            {
                $data['checkKuota']=$this->peserta_model->checkKuota($cat);
                $data['title']="biodata delegation";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                $this->load->view('user/tambahBiodata',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                        $filename = $this->upload->data('file_name');;
                        $this->peserta_model->fadd($cek,$filename);
                echo "<script type='text/javascript'>alert('Registration successful');</script>";
                redirect(base_url('user/biodata'),'refresh');
            }
        }


        public function addwl($cat=FALSE , $cek=FALSE){

                $config['upload_path']          = './uploads/sc';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                if((!$cat && !$cek)||!$cat||$cat>1){
                redirect(base_url('user/biodata'),'refresh');
                }
                // $data['kuota'] = $this->peserta_model->checkKuota();
                $data['category'] = $this->peserta_model->getCategory($cat);
                $data['check']=$this->peserta_model->checkLevelInstitution($cat);
                $data['upload']=$this->peserta_model->checkUpload();
                $data['checkKuota']=$this->peserta_model->checkKuotaWL();
                $this->load->helper('form');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                if($cat==1){
            $this->form_validation->set_rules('nama1', 'Name', 'required');
            $this->form_validation->set_rules('no_telp1', 'Phone', 'required');
            $this->form_validation->set_rules('nama2', 'Name', 'required');
            $this->form_validation->set_rules('no_telp2', 'Phone', 'required');
            $this->form_validation->set_rules('nama3', 'Name', 'required');
            $this->form_validation->set_rules('no_telp3', 'Phone', 'required');
                }else{
            $this->form_validation->set_rules('nama', 'Name', 'required');
            $this->form_validation->set_rules('no_telp', 'Phone', 'required');
                }

            if ($this->form_validation->run() === FALSE || (($cat>1 && !$this->upload->do_upload('foto')) || ($cat==1 && !$this->upload->do_upload('foto3'))))
            {
                $data['title']="biodata delegation";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                $this->load->view('user/tambahBiodataWL',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                        $filename = $this->upload->data('file_name');
                        $this->peserta_model->faddwl($cek,$filename);
                echo "<script type='text/javascript'>alert('Registration successful');</script>";
                redirect(base_url('user/biodata'),'refresh');
            }
        }

        public function edit($id=FALSE, $cat=FALSE){
                if((!$id && !$cat) || !$cat){
                redirect(base_url('user/biodata'),'refresh');
                }
                $this->load->helper('form');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $data['category']=$this->peserta_model->getCategory($cat);
                $data['peserta']=$this->peserta_model->getPesertabyIdUsername($id);
                $data['peserta2']=$data['peserta']['id'];
                $cekU = $this->peserta_model->checkUsername($data['peserta']['id_username']);
                $config['upload_path']          = './uploads/sc';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
                if($cat==1){
                $data['peserta']=$this->peserta_model->getPesertaDebateArray($id);
            $this->form_validation->set_rules('nama1', 'Name', 'required');
            $this->form_validation->set_rules('no_telp1', 'Phone', 'required');
            $this->form_validation->set_rules('nama2', 'Name', 'required');
            $this->form_validation->set_rules('no_telp2', 'Phone', 'required');
            $this->form_validation->set_rules('nama3', 'Name', 'required');
            $this->form_validation->set_rules('no_telp3', 'Phone', 'required');
                }else{
                $data['peserta']=$this->peserta_model->getPesertabyIdUsername($id);
            $this->form_validation->set_rules('nama', 'Name', 'required');
            $this->form_validation->set_rules('no_telp', 'Phone', 'required');
                }
                if($cekU && $this->form_validation->run() === FALSE){
                $data['title']="biodata delegation";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                        $this->load->view('user/editBiodata',$data);
                        $this->load->view('templates/footer');
                }else if($cekU && (($cat>1 && $this->upload->do_upload('foto'))||($cat==1 && $this->upload->do_upload('foto3')))){
                        $filename = $this->upload->data('file_name');
                        $this->peserta_model->update($cat,$filename);
                        echo "<script type='text/javascript'>alert('Data and photo updated successfully');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else if($cekU){
                        $this->peserta_model->update($cat);
                        echo "<script type='text/javascript'>alert('Data updated successfully');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else{
                        echo "<script type='text/javascript'>alert('Restricted to edit this');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function editwl($id=FALSE, $cat=FALSE){
                if((!$id && !$cat) || !$cat || $cat>1){
                redirect(base_url('user/biodata'),'refresh');
                }
                $this->load->helper('form');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $data['category']=$this->peserta_model->getCategory($cat);
                $data['peserta']=$this->peserta_model->getPesertabyIdUsername($id);
                $data['peserta2']=$data['peserta']['id'];
                $cekU = $this->peserta_model->checkUsername($data['peserta']['id_username']);
                $config['upload_path']          = './uploads/sc';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
                $data['peserta']=$this->peserta_model->getPesertaDebateWLArray($id);
            $this->form_validation->set_rules('nama1', 'Name', 'required');
            $this->form_validation->set_rules('no_telp1', 'Phone', 'required');
            $this->form_validation->set_rules('nama2', 'Name', 'required');
            $this->form_validation->set_rules('no_telp2', 'Phone', 'required');
            $this->form_validation->set_rules('nama3', 'Name', 'required');
            $this->form_validation->set_rules('no_telp3', 'Phone', 'required');
                if($cekU && $this->form_validation->run() === FALSE){
                $data['title']="biodata delegation";
                $this->load->view('templates/header');
                $this->load->view('templates/head-user2',$data);
                        $this->load->view('user/editBiodataWL',$data);
                        $this->load->view('templates/footer');
                }else if($cekU && ($cat==1 && $this->upload->do_upload('foto3'))){
                        $filename = $this->upload->data('file_name');
                        $this->peserta_model->updateWL($cat,$filename);
                        echo "<script type='text/javascript'>alert('Data and photo updated successfully');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else if($cekU){
                        $this->peserta_model->updateWL($cat);
                        echo "<script type='text/javascript'>alert('Data updated successfully');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else{
                        echo "<script type='text/javascript'>alert('Restricted to edit this');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function delete($id=FALSE, $cat=FALSE){
                if((!$id && !$cat)||!$id||!$cat){
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $data['id_username']=$this->peserta_model->getPesertabyIdUsername($id);
                $cekU = $this->peserta_model->checkUsername($data['id_username']['id_username']);
                if($cekU){
                        if($cat>1){
                                $this->db->delete('peserta', array('id' => $id));
                        }else{
                                $this->peserta_model->deleteDebate($id);
                        }
                        echo "<script type='text/javascript'>alert('Delete successful');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else{
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function deletewl($id=FALSE){
                if(!$id){
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $data['peserta']=$this->peserta_model->getPesertabyIdUsername($id);
                $cekU = $this->peserta_model->checkUsername($data['peserta']['id_username']);
                if($cekU){
                                $this->peserta_model->deleteDebateWL($id);
                        echo "<script type='text/javascript'>alert('Delete successful');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }else{
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function logout(){
                $this->session->sess_destroy();
                redirect(base_url("login/"),'refresh');
        }


        
}
?>