<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index($idToko){
        $data['idToko']=$idToko;
        $datawhere= array('idToko'=>$idToko);
        $data['produk']=$this->Madmin->get_by_id('tbl_produk', $datawhere)->result();
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data1);
        $this->load->view('home/produk/index',$data);
        $this->load->view('home/layout/footer');
    }
    public function add($idToko){
        $data['idToko']=$idToko;
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data1);
        $this->load->view('home/produk/form_tambah',$data);
        $this->load->view('home/layout/footer');
        
    }
    public function save(){
        $idToko=$this->input->post('idToko');
        $idKategori=$this->input->post('kategori');
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsi = $this->input->post('deskripsiProduk');
        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jepg';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto')){
            $data_file = $this->upload->data();
            $data_insert =array('idKat' => $idKategori,
                                 'idToko' => $idToko,
                                 'namaProduk' => $namaProduk,
                                 'foto' => $data_file['file_name'],
                                 'harga' => $harga,
                                 'stok' => $jumlah,
                                 'berat' => $berat,
                                 'deskripsiProduk' => $deskripsi);
            $this->Madmin->insert('tbl_produk',$data_insert);
            redirect('produk/index/'.$idToko);
        }else{
        redirect('produk/add/'.$idToko);
        }
    }
    public function edit($id = '', $idToko = ''){ 
        $data['idToko']=$idToko;
        $dataWhere = array('idProduk'=> $id);
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $this->load->view('home/layout/header',$data1       );
        $this->load->view('home/produk/edit_product',$data);
        $this->load->view('home/layout/footer');
        
    }
    public function proses_edit(){
        $idToko = $this->input->post('idToko');
        $idKategori=$this->input->post('kategori');
        $id=$this->input->post('idProduk');
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsi = $this->input->post('deskripsiProduk');
        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jepg';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto')){
            $data_file = $this->upload->data();
            $data_insert =array(
                               
                                'idKat' => $idKategori,
                                 'namaProduk' => $namaProduk,
                                 'foto' => $data_file['file_name'],
                                 'harga' => $harga,
                                 'stok' => $jumlah,
                                 'berat' => $berat,
                                 'deskripsiProduk' => $deskripsi);
            $this->Madmin->update('tbl_produk',$data_insert, 'idProduk',$id);
            redirect('produk/index/'.$this->input->post('idToko'));
        }else{
        redirect('produk/edit/'.$idToko);
        }
    }
    public function delete($id, $idToko){
        
        $this->Madmin->delete('tbl_Produk', 'idProduk',$id);
        redirect('produk/index/'.$idToko);
        
    }
    
} 