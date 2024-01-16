<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Toko extends CI_Controller{
    function __construct()
    {
        parent::__construct();
            $this->load->model('Madmin');
            $this->load->library('session');
    }
    public function index(){
        if(empty($this->session->userdata('username'))){
            $this->load->view('home/layout/header');
        
        $this->load->view('home/layout/footer');
        }else{

        $data['toko']=$this->Madmin->get_all_data('tbl_toko')->result();
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/toko/index',$data);
        $this->load->view('home/layout/footer');
        }
 

    }
    public function add_toko(){
        if(empty($this->session->userdata('username'))){
            echo "Anda Perlu Login";
        }
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data1);

        $this->load->view('home/toko/form_tambah');
        $this->load->view('home/layout/footer');
        
    }
    public function save(){
        if(empty($this->session->userdata('username'))){
            echo "Anda Perlu Login";
        }
        if ($this->session->userdata('username')) {
        $username = $this->session->userdata('username');
        $nama_toko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jepg';
        $idMember = $this->Madmin->getIdMemberByUsername($username);
        $this->load->library('upload',$config);
        if($this->upload->do_upload('logo')){
            $data_file = $this->upload->data();
            $data_insert =array('idKonsumen' => $idMember,
                                 'namaToko' => $nama_toko,
                                 'logo' => $data_file['file_name'],
                                 'deskripsi' => $deskripsi,
                                 'statusAktif' => 'Y');
            $this->Madmin->insert('tbl_toko',$data_insert);
            redirect('toko/index');
        }else{
            redirect('toko/add_toko');
        }
    }{

        redirect('toko/add');
    }
    }
   
    public function cek_id($id){
        if(empty($this->session->userdata('username'))){
            redirect('main/login_awal');
        }
        $dataWhere = array('idToko'=> $id);
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data1);
        $this->load->view('home/toko/edit_toko',$data);
        $this->load->view('home/layout/footer');
     }
     public function edit(){
        if(empty($this->session->userdata('username'))){
            redirect('main/login_awal');
        }
        $idToko = $this->input->post('id');
        $namaToko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jepg';
        // $idMember = $this->Madmin->getIdMemberByUsername($username);
        $this->load->library('upload',$config);
        if($this->upload->do_upload('logo')){
            $data_file = $this->upload->data();
            $data_Update =array(
                                 'namaToko' => $namaToko,
                                 'logo' => $data_file['file_name'],
                                 'deskripsi' => $deskripsi);
            // $this->Madmin->insert('tbl_toko',$data_insert);
            

        // $dataUpdate = array('namaKat' =>$namaKategori);
        $this->Madmin->update('tbl_toko',$data_Update, 'idToko',$idToko);
        redirect('toko/index');
        
    }
}
public function delete($id){
    if(empty($this->session->userdata('username'))){
        redirect('main/login_awal');
    }
    $this->Madmin->delete('tbl_toko', 'idToko',$id);
    redirect('toko/index');
    
}

}