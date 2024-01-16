<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $this->load->view('admin/login');
    }
    public function dashboard(){

        if(empty($this->session->userdata('username'))){
            redirect('adminpanel/dashboard');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
    public function register(){
        $this->load->view('admin/register');
    }
    public function proses_registrasi(){
        $this->form_validation->set_rules('username','Username','required|trim',['required' => 'Isi username lah bang']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',['matches' => 'Password tidak sesuai','required' => 'Password Wajib diisi']);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
        if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/register');
		}else{
            $data=[
                'userName' => htmlspecialchars( $this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT)
            ];
            $this->db->insert('tbl_admin',$data);
            redirect('adminpanel');
        }
    
    }

    public function login(){
        $this->form_validation->set_rules('username','Username','required',['required' => 'Isi username lah bang']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Isi password juga lah bang']);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');
		}else{
            $this->load->model('Madmin');
            $u = $this->input->post('username');
            $p = $this->input->post('password');
			$auth =$this->db->get_where('tbl_admin',['userName' => $u])->row_array();
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Username tidak ditemukan
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('adminpanel');
			}else{
                if(password_verify($p, $auth['password'])){
                    $data_session =[
                        'username' =>$auth['userName']
                    ];
                    $this-> session->set_userdata($data_session);
                    redirect('adminpanel/dashboard');

                }else{
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password tidak sesuai
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>'); 
                  redirect('adminpanel'); 
                }

				
			}
		}
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('adminpanel');
    }
    public function ubahpw(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $data['admin']=$this->Madmin->get_all_data('tbl_admin')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/manage/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function get_by_id(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/manage/formEdit');
        $this->load->view('admin/layout/footer');
        
    }
    
    public function edit(){
        if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
        $data['username'] = $this->db->get_where('tbl_admin',['username'=> $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('password','Password','required|trim',['required' => 'Password Wajib diisi']);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',['matches' => 'Password 1 dan 2tidak sesuai','required' => 'Password Wajib diisi','min_length' => 'Panjang password minimal 6 karakter']);
        $this->form_validation->set_rules('password2','Password','required|trim|min_length[6]|matches[password1]',['min_length' => 'Panjang password minimal 6 karakter','required' => 'Password Wajib diisi']);
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/manage/formEdit');
        $this->load->view('admin/layout/footer');
        
        }else{
        
        $currentpw = $this->input->post('password');
        $changepw = $this->input->post('password1');
        if(!password_verify($currentpw,$data['username']['password'])){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Password saat ini salah
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('adminpanel/get_by_id');
        }else{
            if($currentpw == $changepw){               
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Password baru tidak boleh sama dengan password lama
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('adminpanel/get_by_id');
            }else{

              $password_hash = password_hash($changepw, PASSWORD_DEFAULT);
                $this->db->set('password',$password_hash);
                $this->db->where('username',$this->session->userdata('username'));
                $this->db->update('tbl_admin');
                redirect('adminpanel/dashboard');
            }
        }
    }
        
        
    }
    
}
