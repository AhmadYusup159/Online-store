<?php

class Madmin extends CI_Model{

    public function cek_login($u,$p){
        $q = $this->db->get_where('tbl_admin',array('username '=>$u,'password'=>$p));
        return $q;
    }
    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }
    public function insert($tabel, $data){
        $this->db->insert($tabel, $data);
    }
    public function get_by_id($tabel, $id){
        return $this->db->get_where($tabel, $id);
    }
    public function update($tabel, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }
    public function update1($tabel, $data){
        $this->db->update($tabel, $data);
    }
    public function delete($tabel, $id, $val){
        $this->db->delete($tabel, array($id => $val));
    }

    public function login($username, $password) {
        $query = $this->db->get_where('tbl_member', array('username' => $username, 'password' => $password));
        return $query->row();
    }
    
    public function getUserByUsername($username) {
        $query = $this->db->get_where('tbl_member', array('username' => $username));
        return $query->row();
    }
    public function getAdminByUsername($username) {
        $query = $this->db->get_where('tbl_admin', array('username' => $username));
        return $query->row();
    }
    public function getIdMemberByUsername($username) {
        $this->db->select('idKonsumen');
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_member');
        $row = $query->row();

        if ($row) {
            return $row->idKonsumen;
        } else {
            return null;
        }
    }
    public function tampiltoko(){
        $this->db->select('tbl_toko.*,tbl_member.namaKonsumen');
        $this->db->from('tbl_toko');
        $this->db->join('tbl_member', 'tbl_member.idKonsumen = tbl_toko.idKonsumen', 'inner');
        $query = $this->db->get();
        return $query;
 
    }
    
}