<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');

    }
    public function save(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $this->form_validation->set_rules('namaKat', 'Nama Kategori', 'required',['required' => 'Nama Kategori wajib di Isi']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/menu');
            $this->load->view('admin/kategori/formAdd');
            $this->load->view('admin/layout/footer');
            
        }else{

        $namaKat = $this->input->post('namaKat');
        $dataInput = array('namaKat'=>$namaKat);
        $this->Madmin->insert('tbl_kategori',$dataInput);
        redirect('kategori');
        }
        
    }
    public function get_by_id($id){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $dataWhere = array('idkat'=> $id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');
        
    }
    public function edit(){

        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $this->form_validation->set_rules('namaKat', 'Nama Kategori', 'required',['required' => 'Nama Kategori wajib di Isi']);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Nama Kategori Wajib Diisi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'); 
          redirect('kategori');

        }else{
        $id = $this->input->post('id');
        $namaKategori = $this->input->post('namaKat');
        $dataUpdate = array('namaKat' =>$namaKategori);
        $this->Madmin->update('tbl_kategori',$dataUpdate, 'idkat',$id);
        redirect('kategori');
        }
        
    }
    public function delete($id){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_kategori', 'idkat',$id);
        redirect('kategori');
        
    }

 
}