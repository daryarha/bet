<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }
        //GET PESERTA, AND PHOTO
        public function getFotoPeserta(){
            $this->db->select('username,upload,nama_peserta,alergi,nama_institusi,nama,url_sc');
            $this->db->from('peserta ps');
            $this->db->join('kategori k','k.id=ps.id_kategori');
            $this->db->join('pendaftar pn', 'pn.id=ps.id_username');
                $query = $this->db->get();
                return $query->result_array();
        }

        public function getBuktiBayar(){
            $this->db->select('id,username,nama_institusi,phone,nama_pendamping,email,upload,url_foto,konfirmasi,tgl_daftar');
            $this->db->from('pendaftar');
            $query=$this->db->get();
            return $query->result_array();
        }

        public function getJumlahPesertaBayar($cat=FALSE,$level=FALSE,$upload=FALSE){
            if(!$upload){                
                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('pendaftar pn');
                        $this->db->join('peserta ps', 'pn.id = ps.id_username');
                        $this->db->join('kategori k', 'k.id = ps.id_kategori');
                        $this->db->where('id_kategori',$cat);
                        $this->db->where('id_lvl',$level);
                        $this->db->where('upload',0);
                        $this->db->group_by('id_kategori');
                        $query=$this->db->get();
            }else{
                $user_data = $this->session->userdata('logUser');
                        $this->db->select('count(*) as jumlah');
                        $this->db->from('pendaftar pn');
                        $this->db->join('peserta ps', 'pn.id = ps.id_username');
                        $this->db->join('kategori k', 'k.id = ps.id_kategori');
                        $this->db->where('id_kategori',$cat);
                        $this->db->where('id_lvl',$level);
                        $this->db->where('upload',1);
                        $this->db->group_by('id_kategori');
                        $query=$this->db->get();

            }
                return $query->row_array();
        }

        public function setConfirm($id=FALSE){
                $data= array(
                        'konfirmasi'=>1,
                );
                $this->db->where('id',$id);
                $this->db->update('pendaftar', $data);
        }

        public function changepass(){
                $data = array(
                        'password' => md5($this->input->post('password'))
                );
                $this->db->where('username',$this->input->post('username'));
                $this->db->update('pendaftar',$data);
        }

        //REGISTER//
        public function registering()
        {    
                $data = array(
                        'username' => $this->input->post('username'),
                        'password' => md5($this->input->post('password'))
                );

                return $this->db->insert('staff', $data);
        }

        //END OF REGISTER=

        //CHECK LOGIN

        public function checklog(){
                $password=md5($this->input->post('password'));
                $username=$this->input->post('username');
                $data = array(
                        'username' =>$username,
                        'password' => $password,
                );
                $cek= $this->db->get_where('staff', $data)->num_rows();
                $iduser= $this->db->get_where('staff', array('username' => $username))->result_array();
                if($cek>0 && $iduser[0]['konfirmasi']==1){
                        $data_session=array(
                        'id_username' => $iduser[0]['id'],
                        'username' => $iduser[0]['username'],
                        'konfirmasi'=>$iduser[0]['konfirmasi'],
                                'log'=>'Ain',
                        );
                $this->session->set_userdata('logAdmin',$data_session);
                echo "<script type='text/javascript'>alert('Login successful');</script>";
                redirect(base_url('admin/home'),'refresh');
                }else{
                echo "<script type='text/javascript'>alert('Wrong username or password, or your ID not confirmed yet.');</script>";
                redirect(base_url('admin/login'),'refresh');
                }

        }

        //END OF CHECK LOGIN
}