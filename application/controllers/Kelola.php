<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelola extends CI_Controller{
    function __construct()
    {
        parent::__construct();
            $this->load->model('Madmin');
            $this->load->library('session');
    }
    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel/dashboard');
        }
 
        $data['toko']=$this->Madmin->tampiltoko('tbl_toko')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola/index',$data);
        $this->load->view('admin/layout/footer');
    }
   
   
    public function cek_id($id){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $dataWhere = array('idToko'=> $id);
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kelola/edit_toko',$data);
        $this->load->view('admin/layout/footer');
     }
     public function edit(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $this->form_validation->set_rules('namaToko','Nama Toko','required|trim');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Form tidak boleh ada yang kosong
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
           redirect('kelola/index');
		}else{
        $idToko = $this->input->post('id');
        $namaToko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $data_Update =array(
            'namaToko' => $namaToko,
           //  'logo' => $data_file['file_name'],
            'deskripsi' => $deskripsi);
// $this->Madmin->insert('tbl_toko',$data_insert);


// $dataUpdate = array('namaKat' =>$namaKategori);
$this->Madmin->update('tbl_toko',$data_Update, 'idToko',$idToko);
redirect('adminpanel/dashboard');
        }
}
    


public function delete($id){
    if(empty($this->session->userdata('username'))){
        redirect('adminpanel');
    }
    $this->Madmin->delete('tbl_toko', 'idToko',$id);
    redirect('kelola/index');
    
}

}