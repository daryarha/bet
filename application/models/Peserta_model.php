<?php
class Peserta_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }

        public function get_pesertabyCategory($category = FALSE)
	{
                if ($category === FALSE)
                {
                        $query = $this->db->get('peserta');
                        return $query->result_array();
                }

                $query = $this->db->get_where('peserta', array('id_kategori' => $category));
                return $query->row_array();
	}

        public function getFAQ($id = FALSE)
        {
                if ($id === FALSE)
                {
                        $query = $this->db->get('faq');
                        return $query->result_array();
                }

                $query = $this->db->get_where('faq', array('id' => $id));
                return $query->row_array();
        }

        public function get_pesertabyLevel($level = FALSE)
        {
                if ($level === FALSE)
                {
                        $query = $this->db->get('pendaftar');
                        return $query->result_array();
                }

                $query = $this->db->get_where('pendaftar', array('id_lvl' => $level));
                return $query->row_array();
        }

        public function getTanggalDaftar()
        {
                $user_data = $this->session->userdata('logUser');
                $query = $this->db->get_where('peserta', array('id_username' => $user_data['id_username']));
                return $query->row_array();
        }

        public function getDebateWaitingList(){
                $user_data = $this->session->userdata('logUser');
                $this->db->select('count(*) as jumlah');
                $this->db->select('debate_waitinglist wl');
        }

        public function getPesertaDebateArray($id=FALSE)
        {
                $user_data = $this->session->userdata('logUser');
                if(!$id){
                    $this->db->select('nama_team, ps1.id as id_peserta1, ps1.nama_peserta as nama_peserta1, ps1.alergi as alergi_peserta1, ps1.phone as phone_peserta1, ps2.id as id_peserta2, ps2.nama_peserta as nama_peserta2, ps2.alergi as alergi_peserta2, ps2.phone as phone_peserta2, ps3.id as id_peserta3, ps3.nama_peserta as nama_peserta3, ps3.alergi as alergi_peserta3, ps3.phone as phone_peserta3');
                $this->db->from('debate d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('username', $user_data['username']);
                $query = $this->db->get();
                return $query->result_array();
            }else{
                $this->db->select('d.id, nama_team, ps1.id as id_peserta1, ps1.nama_peserta as nama_peserta1, ps1.alergi as alergi_peserta1, ps1.phone as phone_peserta1, ps2.id as id_peserta2, ps2.nama_peserta as nama_peserta2, ps2.alergi as alergi_peserta2, ps2.phone as phone_peserta2, ps3.id as id_peserta3, ps3.nama_peserta as nama_peserta3, ps3.alergi as alergi_peserta3, ps3.phone as phone_peserta3');
                $this->db->from('debate d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('ps1.id', $id);
                        $this->db->or_where('ps2.id',$id);
                        $this->db->or_where('ps3.id',$id);
                        $query = $this->db->get();
                        return $query->row_array();
            }
                
        }

        public function getPesertaDebateWLArray($id=FALSE)
        {
            if(!$id){
                $user_data = $this->session->userdata('logUser');
                $this->db->select('nama_team, ps1.id as id_peserta1, ps1.nama_peserta as nama_peserta1, ps1.alergi as alergi_peserta1, ps1.phone as phone_peserta1, ps2.id as id_peserta2, ps2.nama_peserta as nama_peserta2, ps2.alergi as alergi_peserta2, ps2.phone as phone_peserta2, ps3.id as id_peserta3, ps3.nama_peserta as nama_peserta3, ps3.alergi as alergi_peserta3, ps3.phone as phone_peserta3');
                $this->db->from('debate_waitinglist d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('username', $user_data['username']);
                $query = $this->db->get();
                return $query->result_array();
            }else{
                $this->db->select('d.id, nama_team, ps1.id as id_peserta1, ps1.nama_peserta as nama_peserta1, ps1.alergi as alergi_peserta1, ps1.phone as phone_peserta1, ps2.id as id_peserta2, ps2.nama_peserta as nama_peserta2, ps2.alergi as alergi_peserta2, ps2.phone as phone_peserta2, ps3.id as id_peserta3, ps3.nama_peserta as nama_peserta3, ps3.alergi as alergi_peserta3, ps3.phone as phone_peserta3');
                $this->db->from('debate_waitinglist d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('ps1.id', $id);
                        $this->db->or_where('ps2.id',$id);
                        $this->db->or_where('ps3.id',$id);
                        $query = $this->db->get();
                        return $query->row_array();
            }
        }

        public function getJumlahTimDebate(){
                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('debate d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('username', $user_data['username']);
                        $query = $this->db->get();
                        return $query->row_array();
        }

        public function getJumlahTimDebateWL(){
                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('debate_waitinglist d');
                $this->db->join('peserta ps1', 'ps1.id = d.id_peserta1');
                $this->db->join('peserta ps2', 'ps2.id = d.id_peserta2');
                $this->db->join('peserta ps3', 'ps3.id = d.id_peserta3');
                $this->db->join('pendaftar pn', 'pn.id = ps1.id_username');
                        $this->db->where('username', $user_data['username']);
                        $query = $this->db->get();
                        return $query->row_array();
        }

        public function getJumlahPeserta($cat=FALSE){

                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('pendaftar pn');
                        $this->db->join('peserta ps', 'pn.id = ps.id_username');
                        $this->db->join('kategori k', 'k.id = ps.id_kategori');
                        $this->db->where('username', $user_data['username']);
                        $this->db->where('id_kategori',$cat);
                        $this->db->group_by('id_kategori');
                        $query=$this->db->get();
                return $query->result_array();
        }

        public function getJumlahPesertaTotal($cat=FALSE,$level=FALSE){

                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('pendaftar pn');
                        $this->db->join('peserta ps', 'pn.id = ps.id_username');
                        $this->db->join('kategori k', 'k.id = ps.id_kategori');
                        $this->db->where('id_kategori',$cat);
                        $this->db->where('id_lvl',$level);
                        $this->db->group_by('id_kategori');
                        $query=$this->db->get();
                return $query->result_array();
        }

        public function getPesertabyIdUsername($id=FALSE)
        {
                if ($id === FALSE)
                {
                        $query = $this->db->get('peserta');
                        return $query->result_array();
                }

                $query = $this->db->get_where('peserta', array('id' => $id));
                return $query->row_array();
        }


        public function getPendaftarbyUsernameorPassword($username=FALSE,$password=FALSE)
        {
            if(!$password){
                if ($username === FALSE)
                {
                        $query = $this->db->get('pendaftar');
                        return $query->result_array();
                }

                $query = $this->db->get_where('pendaftar', array('username' => $username));
                return $query->row_array();
            }else{
                $query = $this->db->get_where('pendaftar', array('password' => $password));
                return $query->row_array();
            }
        }

        public function getPesertabyKategori($cat=FALSE)
        {
                $this->db->select('ps.id,nama_peserta,ps.phone,alergi');
                $this->db->from('pendaftar pn');
                $this->db->join('peserta ps', 'pn.id = ps.id_username');
                $this->db->join('kategori k', 'k.id = ps.id_kategori');
                $user_data = $this->session->userdata('logUser');
                $this->db->where('username',$user_data['username']);
                $this->db->where('id_kategori',$cat);
                $query=$this->db->get();
                return $query->result_array();
        }

        public function getLevel($level = FALSE)
        {
                if ($level === FALSE)
                {
                        $query = $this->db->get('lvl');
                        return $query->result_array();
                }

                $query = $this->db->get_where('lvl', array('id' => $level));
                return $query->row_array();
        }

        public function getLevelInstitution()
        {
                $user_data = $this->session->userdata('logUser');
                $query = $this->db->get_where('lvl', array('id' => $user_data['lvl']));
                return $query->row_array();
        }

        public function getCategory($id_cat = FALSE)
        {
                if ($id_cat === FALSE)
                {
                        $query = $this->db->get('kategori');
                        return $query->result_array();
                }

                $query = $this->db->get_where('kategori', array('id' => $id_cat));
                return $query->row_array();
        }

        public function getBioStatus(){

                $user_data = $this->session->userdata('logUser');
                $query = $this->db->get_where('pendaftar', array('username' => $user_data['id_username']))->result_array();
                if($query==null){
                        return false;
                }else{
                        return true;
                }
        }
        //REGISTER//
        public function registering()
        {    
                $data = array(
                        'username' => $this->input->post('username'),
                        'password' => md5($this->input->post('password')),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'nama_institusi' => $this->input->post('nama_institusi'),
                        'alamat_institusi' => $this->input->post('alamat_institusi'),
                        'id_lvl' => $this->input->post('id_lvl'),
                        'pendamping' => $this->input->post('pendamping'),
                        'nama_pendamping' => $this->input->post('nama_pendamping'),
                        'kontak_pendamping' => $this->input->post('kontak_pendamping'),
                );

                return $this->db->insert('pendaftar', $data);
        }

        //END OF REGISTER

        //BIODATA

        public function fadd($cek=FALSE,$upload_data=FALSE){
                // $data['kuota'] = $this->peserta_model->checkKuota();
                if($cek==1){
                        $hasil=$this->addBiodata($upload_data);
                        if($hasil){
                        echo "<script type='text/javascript'>alert('Registration successful');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                        }
                }else{
                        echo "<script type='text/javascript'>alert('Registration failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function faddWL($cek=FALSE,$upload_data=FALSE){
                // $data['kuota'] = $this->peserta_model->checkKuota();
                if($cek==1){
                        $hasil=$this->addBiodataWL($upload_data);
                        if($hasil){
                        echo "<script type='text/javascript'>alert('Registration successful');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                        }
                }else{
                        echo "<script type='text/javascript'>alert('Registration failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
        }

        public function update($cat=FALSE,$upload_data=FALSE){
                if(!$cat){
                        echo "<script type='text/javascript'>alert('Update data failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $hasil=$this->changeBiodata($cat,$upload_data);
                if($hasil){
                        redirect(base_url('user/biodata'),'refresh');
                        }
        }

        public function updateWL($cat=FALSE,$upload_data=FALSE){
                if(!$cat){
                        echo "<script type='text/javascript'>alert('Update data failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $hasil=$this->changeBiodataWL($cat,$upload_data);
                if($hasil){
                        redirect(base_url('user/biodata'),'refresh');
                        }
        }

        public function changeBiodataWL($cat=FALSE, $filename=FALSE){
                $id1 = $this->input->post('id1');
                $id2 = $this->input->post('id2');
                $id3 = $this->input->post('id3');
                $nama1=$this->input->post('nama1');
                $nama2=$this->input->post('nama2');
                $nama3=$this->input->post('nama3');
            if(!$filename || $filename==NULL || $filename==""){
                        $data = array(
                           array(
                                'id'=>$id1,
                                'nama_peserta'=>$nama1,
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1')
                           ),
                           array(          
                                'id'=>$id2,              
                                'nama_peserta'=>$nama2,
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2')
                           ),
                           array(
                                'id'=>$id3,
                                'nama_peserta'=>$nama3,
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3')
                           )
                        );
            }else{
                    $data = array(
                           array(
                                'id'=>$id1,
                                'nama_peserta'=>$nama1,
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1'),
                                'url_sc'=>$filename,
                           ),
                           array(      
                                'id'=>$id2,                  
                                'nama_peserta'=>$nama2,
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2'),
                                'url_sc'=>$filename,
                           ),
                           array(
                                'id'=>$id3,
                                'nama_peserta'=>$nama3,
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3'),
                                'url_sc'=>$filename,
                           )
                        );
                
            }
                $this->db->update_batch('peserta', $data, 'id');
        }

        public function deleteDebate($id=FALSE){
            if(!$id){
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
            }
                                $peserta=$this->peserta_model->getPesertaDebateArray($id);
                                $id1=$peserta['id_peserta1'];
                                $id2=$peserta['id_peserta2'];
                                $id3=$peserta['id_peserta3'];
                                $this->db->where('id_peserta1',$id1);
                                $this->db->where('id_peserta2',$id2);
                                $this->db->where('id_peserta3',$id3);
                                $this->db->delete('debate');
                                $arrayId=array($id1,$id2,$id3);
                                $this->db->where_in('id',$arrayId);
                                $this->db->delete('peserta');
        }

        public function deleteDebateWL($id=FALSE){
            if(!$id){
                        echo "<script type='text/javascript'>alert('Delete failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
            }
                                $peserta=$this->peserta_model->getPesertaDebateWLArray($id);
                                $id1=$peserta['id_peserta1'];
                                $id2=$peserta['id_peserta2'];
                                $id3=$peserta['id_peserta3'];
                                $this->db->where('id_peserta1',$id1);
                                $this->db->where('id_peserta2',$id2);
                                $this->db->where('id_peserta3',$id3);
                                $this->db->delete('debate_waitinglist');
                                $arrayId=array($id1,$id2,$id3);
                                $this->db->where_in('id',$arrayId);
                                $this->db->delete('peserta');
        }

        public function changeBiodata($cat=FALSE, $filename=FALSE){
                $id1 = $this->input->post('id1');
                $id2 = $this->input->post('id2');
                $id3 = $this->input->post('id3');
                $nama1=$this->input->post('nama1');
                $nama2=$this->input->post('nama2');
                $nama3=$this->input->post('nama3');
            if(!$filename || $filename==NULL || $filename==""){
                if($cat==1){
                        $data = array(
                           array(
                                'id'=>$id1,
                                'nama_peserta'=>$nama1,
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1')
                           ),
                           array(          
                                'id'=>$id2,              
                                'nama_peserta'=>$nama2,
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2')
                           ),
                           array(
                                'id'=>$id3,
                                'nama_peserta'=>$nama3,
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3')
                           )
                        );
                }else{
                    $data = array(
                                'nama_peserta'=>$this->input->post('nama'),
                                'phone'=>$this->input->post('no_telp'),
                                'alergi'=>$this->input->post('alergi')
                        );
                }
            }else{
                if($cat==1){
                    $data = array(
                           array(
                                'id'=>$id1,
                                'nama_peserta'=>$nama1,
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1'),
                                'url_sc'=>$filename,
                           ),
                           array(      
                                'id'=>$id2,                  
                                'nama_peserta'=>$nama2,
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2'),
                                'url_sc'=>$filename,
                           ),
                           array(
                                'id'=>$id3,
                                'nama_peserta'=>$nama3,
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3'),
                                'url_sc'=>$filename,
                           )
                        );
                }else{
                    $data = array(
                                'nama_peserta'=>$this->input->post('nama'),
                                'phone'=>$this->input->post('no_telp'),
                                'alergi'=>$this->input->post('alergi'),
                                'url_sc'=>$filename,
                        );
                }
                
            }
            if($cat==1){
                $this->db->update_batch('peserta', $data, 'id');
            }else{
                $this->db->where('id',$this->input->post('id'));
                $this->db->update('peserta', $data);
            }
        }

        public function addBiodata($filename=FALSE)
        {       
                if(!$filename){
                        echo "<script type='text/javascript'>alert('Registration failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $user_data = $this->session->userdata('logUser');
                $debate = $this->getJumlahTimDebate(); 
                $abjad = "A";
                for ($i=0; $i < $debate['jumlah']; $i++) { 
                    $abjad++;
                }
                $this->load->helper('url');
                $cat=$this->input->post('category');
                $nama1=$this->input->post('nama1');
                $nama2=$this->input->post('nama2');
                $nama3=$this->input->post('nama3');
                if($cat==1){
                        $data = array(
                           array(
                                'id_username'=>$user_data['id_username'],
                                'nama_peserta'=>$nama1,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1'),
                                'url_sc'=>$filename,
                           ),
                           array(
                                'id_username'=>$user_data['id_username'],                              
                                'nama_peserta'=>$nama2,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2'),
                                'url_sc'=>$filename,
                           ),
                           array(
                              
                                'id_username'=>$user_data['id_username'],
                                'nama_peserta'=>$nama3,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3'),
                                'url_sc'=>$filename,
                           )
                        );
                $this->db->insert_batch('peserta', $data);
                        $this->db->select('id');
                $id1 = $this->db->get_where('peserta', array('nama_peserta' => $nama1,'url_sc'=>$filename))->result_array();
                        $this->db->select('id');
                $id2 = $this->db->get_where('peserta', array('nama_peserta' => $nama2,'url_sc'=>$filename))->result_array();
                        $this->db->select('id');
                $id3 = $this->db->get_where('peserta', array('nama_peserta' => $nama3,'url_sc'=>$filename))->result_array();
                $dataTeam = array(
                                'nama_team'=>$user_data['institution']." ".$abjad,
                                'id_peserta1'=>$id1[0]['id'],
                                'id_peserta2'=>$id2[0]['id'],
                                'id_peserta3'=>$id3[0]['id'],
                        );
                return $this->db->insert('debate', $dataTeam);
                }else{
                        $data = array(
                                'id_username'=>$user_data['id_username'],
                                'nama_peserta'=>$this->input->post('nama'),
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp'),
                                'alergi'=>$this->input->post('alergi'),
                                'url_sc'=>$filename,
                        );
                return $this->db->insert('peserta', $data);
                }
        }

        public function addBiodataWL($filename=FALSE)
        {       
                if(!$filename){
                        echo "<script type='text/javascript'>alert('Registration failed');</script>";
                        redirect(base_url('user/biodata'),'refresh');
                }
                $user_data = $this->session->userdata('logUser');
                $this->load->helper('url');
                $cat=$this->input->post('category');
                $nama1=$this->input->post('nama1');
                $nama2=$this->input->post('nama2');
                $nama3=$this->input->post('nama3');
                $debate = $this->getJumlahTimDebate(); 
                $abjad = "A";
                for ($i=0; $i < $debate['jumlah']; $i++) { 
                    $abjad++;
                }
                if($cat==1){
                        $data = array(
                           array(
                                'id_username'=>$user_data['id_username'],
                                'nama_peserta'=>$nama1,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp1'),
                                'alergi'=>$this->input->post('alergi1'),
                                'url_sc'=>$filename,
                           ),
                           array(
                                'id_username'=>$user_data['id_username'],                              
                                'nama_peserta'=>$nama2,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp2'),
                                'alergi'=>$this->input->post('alergi2'),
                                'url_sc'=>$filename,
                           ),
                           array(
                              
                                'id_username'=>$user_data['id_username'],
                                'nama_peserta'=>$nama3,
                                'id_kategori'=>$this->input->post('category'),
                                'phone'=>$this->input->post('no_telp3'),
                                'alergi'=>$this->input->post('alergi3'),
                                'url_sc'=>$filename,
                           )
                        );
                $this->db->insert_batch('peserta', $data);
                        $this->db->select('id');
                $id1 = $this->db->get_where('peserta', array('nama_peserta' => $nama1,'url_sc'=>$filename))->result_array();
                        $this->db->select('id');
                $id2 = $this->db->get_where('peserta', array('nama_peserta' => $nama2,'url_sc'=>$filename))->result_array();
                        $this->db->select('id');
                $id3 = $this->db->get_where('peserta', array('nama_peserta' => $nama3,'url_sc'=>$filename))->result_array();
                $dataTeam = array(
                                'nama_team'=>$user_data['institution']." ".$abjad,
                                'id_peserta1'=>$id1[0]['id'],
                                'id_peserta2'=>$id2[0]['id'],
                                'id_peserta3'=>$id3[0]['id'],
                        );
                return $this->db->insert('debate_waitinglist', $dataTeam);
                }
        }


        public function sendMail(){
                     $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.gmail.com',
          'smtp_port' => 465,
          'smtp_user' => 'bet18.ub@gmail.com', // change it to yours
          'smtp_pass' => 'kaskuser', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );


                $username = $this->input->post('username');
                $data = $this->getPendaftarbyUsernameorPassword($username);

                $link='bet.ub.ac.id/change/user/'.$data['password'];
                $subject='Brawijaya English Tournament 2018: Forget Password';
                $message='Hi '.$data['username'].',<br><br> <p style="text-indent: 40px;">you are asking to change your user password in our website bet.ub.ac.id</p><br>';
                $message.='==================================================<br><br>';
                $message.='Your detail account:<br><br>';
                $message.='<p style="text-indent: 40px;">Username: '.$data['username'].'</p>';
                $message.='<p style="text-indent: 40px;">School/Institution: '.$data['nama_institusi'].'</p>';
                $message.='<p style="text-indent: 40px;">School/Institution address: '.$data['alamat_institusi'].'</p><br>';
                $message.='==================================================<br><br><br>';
                $message.='Copy/click link below to change your password:<br><br>';
                $message.='<p style="text-indent: 40px;">'.$link.'</p><br><br>';
                $message.='If this are not you or you are not changing your password, please kindly ignore this message.<br><br>';
                $message.='Regards,<br><br>';
                $message.='Brawijaya English Tournament 2018 Committee<br><br>';
                $message.='================================================================================<br><br>';
                $message.='Website: bet.ub.ac.id<br><br>';
                $message.='Line: @vyg4529k<br><br>';
                $message.='Instagram: @bet2018<br><br>';
                $message.='Twitter: @BET2K18<br><br>';
                $this->load->library('email', $config);
              $this->email->set_newline("\r\n");
              $this->email->from('bet18.ub@gmail.com'); // change it to yours
              $this->email->to($data['email']);// change it to yours
              $this->email->subject($subject);
              $this->email->message($message);
              if($this->email->send())
             {
              return true;
             }
             else
            {
             return false;
            }
        }

        public function changepass($username){
                $data = array(
                        'password' => md5($this->input->post('password'))
                );
                $this->db->where('username',$username);
                $this->db->update('pendaftar',$data);
        }

        // CHECK KUOTA

        public function checkKuota($cat)
        {
                $data['category']=$this->getCategory($cat);
                $data['levelInstitution']=$this->getLevelInstitution();
                $data['upload']=$this->checkUpload();
                $data['count'] = $this->peserta_model->getJumlahPeserta($cat);
                $data['countTotal'] = $this->getJumlahPesertaTotal($cat,$data['levelInstitution']['id']);
                // echo "<script type='text/javascript'>alert('.$data['count']['jumlah'].');</script>";
                $checker=false;
                if(($cat>1 && (($data['countTotal'][0]['jumlah']>=30 && $data['levelInstitution']['id']==2) || ($data['countTotal'][0]['jumlah']==20 && $data['levelInstitution']['id']==1))) || $data['upload'][0]['upload']==1){
                        $checker=true;
                }else if(($cat==1 && ($data['countTotal'][0]['jumlah']==150)) || $data['upload'][0]['upload']==1){
                        $checker=true;
                }
                if($checker){
                        echo "<script type='text/javascript'>alert('We are sorry, its either slot for this category has already sold out or you already uploaded receipt.');</script>";
                redirect(base_url('user/biodata'),'refresh');
                }
                // echo $data['countDebate'][0]['jumlah'];
        }

        public function checkKuotaWL()
        {
                $data['upload']=$this->checkUpload();
                $data['count'] = $this->peserta_model->getJumlahTimDebateWL();
                // echo "<script type='text/javascript'>alert('.$data['count']['jumlah'].');</script>";
                if($data['count']['jumlah']==0){
                        return false;
                }
                $checker=false;
                if($data['count']['jumlah']==1 || $data['upload'][0]['upload']==1){
                        $checker=true;
                }
                if($checker){
                        echo "<script type='text/javascript'>alert('We are sorry, its either your maximum delegation already achieved or you already uploaded receipt.');</script>";
                redirect(base_url('user/biodata'),'refresh');
                }
                // echo $data['countDebate'][0]['jumlah'];
        }

        public function checkLevelInstitution($cat)
        {
                $data['levelInstitution']=$this->getLevelInstitution();
                if($cat==1 && $data['levelInstitution']['id']==1){
                echo "<script type='text/javascript'>alert('You are restricted to input');</script>";
                redirect(base_url('user/biodata'),'refresh');
                }
        }

        // END OF CHECK KUOTA
        //END OF BIODATA

        //CHECK USERNAME
        public function checkUsername($id_username=FALSE)
        {
                $user_data = $this->session->userdata('logUser');
                if($id_username==$user_data['id_username']){
                        return true;
                }else{
                        return false;
                }
        }
        //END OF CHECK USERNAME

        public function checkForget()
        {
                
                $username = $this->input->post('username');
                $data = $this->getPendaftarbyUsernameorPassword($username);
                if(empty($data)){
                    echo "<script type='text/javascript'>alert('Username doesn't exist');</script>";
                    redirect(base_url('forget'),'refresh');
                }
                $result=$this->sendMail();
        }


        public function checkPassword($password=FALSE)
        {
            if(!$password){
                return false;
            }
                $data = $this->getPendaftarbyUsernameorPassword('aa',$password);
                if(empty($data)){
                    return false;
                }else{
                    return true;
                }
        }

        //CHECK UPLOAD
        public function checkUpload()
        {
                $user_data = $this->session->userdata('logUser');
                $this->db->select('upload,konfirmasi');
                return $this->db->get_where('pendaftar', array('id' => $user_data['id_username']))->result_array();
        }
        //END OF CHECK UPLOAD

        //UPLOAD RECEIPT

        public function insertFoto($upload_data){
                $user_data = $this->session->userdata('logUser');
                $data= array(
                        'url_foto'=>$upload_data,
                        'upload'=>1,
                );
                $this->db->where('id',$user_data['id_username']);
                $this->db->update('pendaftar', $data);
        }

        //END OF UPLOAD RECEIPT

        //CHECK LOGIN

        public function checklog(){
                $password=md5($this->input->post('password'));
                $username=$this->input->post('username');
                $data = array(
                        'username' =>$username,
                        'password' => $password,
                );
                $cek= $this->db->get_where('pendaftar', $data)->num_rows();
                $iduser= $this->db->get_where('pendaftar', array('username' => $username))->result_array();
                if($cek>0){
                        $data_session=array(
                        'id_username' => $iduser[0]['id'],
                        'username' => $iduser[0]['username'],
                        'lvl'=>$iduser[0]['id_lvl'],
                        'institution'=>$iduser[0]['nama_institusi'],
                                'log'=>'in',
                        );
                $this->session->set_userdata('logUser',$data_session);
                echo "<script type='text/javascript'>alert('Login successful');</script>";
                redirect(base_url('/user/'),'refresh');
                }else{
                echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
                redirect(base_url('/login/'),'refresh');
                }

        }

        //END OF CHECK LOGIN
}