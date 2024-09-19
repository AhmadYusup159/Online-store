<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $data['produk']=$this->Madmin->get_all_data('tbl_produk')->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/layout/kategori',$data);
        $this->load->view('home/home');
        $this->load->view('home/layout/footer');
    }
    public function register(){
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/register'); 
        $this->load->view('home/layout/footer');

    }
    public function tambah_register(){
        $this->form_validation->set_rules('username','Username','required|trim',['required' => 'Isi username lah bang']);
        $this->form_validation->set_rules('password1','Password1','required|trim|min_length[6]|matches[password2]',['matches' => 'Password tidak sesuai','min_length' => 'Panjang password minimal 6 karakter','required' => 'Password harus diisi']);
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');
        $this->form_validation->set_rules('namaKonsumen','Nama Konsumen','required|trim',['required' => 'Nama Konsumen Wajib diisi']);
        $this->form_validation->set_rules('alamat','Alamat','required|trim',['required' => 'Alamat wajib diisi']);
        $this->form_validation->set_rules('idKota','IdKota','required|trim',['required' => 'ID kota wajib diisi']);
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('tlpn','Tlp','required|trim',['required' => 'No Telepon Wajib diisi']);
        
        if ($this->form_validation->run() == FALSE){
			$this->load->view('home/layout/header'); 
            $this->load->view('home/register'); 
            $this->load->view('home/layout/footer');
		}else{
            $datareg =[
            'userName' => htmlspecialchars( $this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'namaKonsumen' => htmlspecialchars( $this->input->post('namaKonsumen', true)),
            'alamat' => htmlspecialchars( $this->input->post('alamat', true)),
            'idKota' => htmlspecialchars( $this->input->post('idKota', true)),
            'email' => htmlspecialchars( $this->input->post('email', true)),
            'tlpn' => htmlspecialchars( $this->input->post('tlpn', true)),
            'statusAktif' =>'Y'
            ];
            
           $this->Madmin->insert('tbl_member',$datareg);
           redirect('main/login_awal');
            
        }
   
    }
    public function login_awal(){
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/login'); 
        $this->load->view('home/layout/footer'); 

    }
    public function login_member(){
        $this->form_validation->set_rules('username','Username','required',['required' => 'Isi username lah bang']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Isi password juga lah bang']);

		if ($this->form_validation->run() == FALSE){
            $this->load->view('home/layout/header'); 
            $this->load->view('home/login'); 
            $this->load->view('home/layout/footer'); 
    
		}else{
            $this->load->model('Madmin');
            $u = $this->input->post('username');
            $p = $this->input->post('password');
			$auth =$this->db->get_where('tbl_member',['username' => $u])->row_array();
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Username tidak ditemukan
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('main/login_awal');
			}else{
                if ($auth['statusAktif'] == 'Y') {
                    if(password_verify($p ,$auth['password'])){
                        $data_session =[
                            'username' =>$auth['username']
                        ];
                        $this-> session->set_userdata($data_session);
                        redirect('toko/index');

                    }else{
                        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			            Password Salah
			            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			            </button>
			            </div>');
                        redirect('main/login_awal');
                    }
                }else{
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Akun Anda Tidak Aktif
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('main/login_awal');
                } 
            }
        }   
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('toko');
    }
    public function editprofil(){
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $data['user']=$this->Madmin->get_all_data('tbl_member')->result();
        $this->load->view('home/layout/header',$data1); 
        $this->load->view('home/profil/edit',$data); 
        $this->load->view('home/layout/footer');
    }
    public function edit(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $data['username'] = $this->db->get_where('tbl_admin',['username'=> $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('username','Username','required|trim',['required' => 'Isi username lah bang']);
        $this->form_validation->set_rules('password1','Password1','required|trim|min_length[6]|matches[password2]',['matches' => 'Password tidak sesuai','min_length' => 'Panjang password minimal 6 karakter','required' => 'Password harus diisi']);
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');
        $this->form_validation->set_rules('namaKonsumen','Nama Konsumen','required|trim',['required' => 'Nama Konsumen Wajib diisi']);
        $this->form_validation->set_rules('alamat','Alamat','required|trim',['required' => 'Alamat wajib diisi']);
        $this->form_validation->set_rules('idKota','IdKota','required|trim',['required' => 'ID kota wajib diisi']);
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('tlpn','Tlp','required|trim',['required' => 'No Telepon Wajib diisi']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/layout/header'); 
            $this->load->view('home/profil/edit'); 
            $this->load->view('home/layout/footer');
        
        }else{
            $datareg =[
            'userName' => htmlspecialchars( $this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'namaKonsumen' => htmlspecialchars( $this->input->post('namaKonsumen', true)),
            'alamat' => htmlspecialchars( $this->input->post('alamat', true)),
            'idKota' => htmlspecialchars( $this->input->post('idKota', true)),
            'email' => htmlspecialchars( $this->input->post('email', true)),
            'tlpn' => htmlspecialchars( $this->input->post('tlpn', true)),
            'statusAktif' =>'Y'
            ];
       
            $this->db->where('username',$this->session->userdata('username'));
            $this->db->update('tbl_member',$datareg);
           redirect('main');
            
        }
    }
    public function detail_produk($idProduk){
        $datawhere= array('idProduk'=>$idProduk);
        $data['produk']=$this->Madmin->get_by_id('tbl_produk', $datawhere)->row_object();
        $data1['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data1);
        $this->load->view('home/detail_produk',$data);
        $this->load->view('home/layout/footer');
    }
    public function add_cart($idProduk){
        $datawhere= array('idProduk'=>$idProduk);
        $produk =$this->Madmin->get_by_id('tbl_produk', $datawhere)->row_object();

        $data = array(
            'id'    => $produk->idProduk,
            'qty'   => 1,
            'price' => $produk->harga,
            'name' => $produk->namaProduk,
            'image' => $produk->foto);
            $this->cart->insert($data);     
            redirect('main/cart');
        }

        public function cart(){
        $data['cartItems'] = $this->cart->contents();
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/cart',$data);
        $this->load->view('home/layout/footer');  
        }
        public function delete_cart($rowid){
            $remove = $this->cart->remove($rowid);
            redirect('main/cart');
        }
  
}