<?php
class rental_models extends CI_Model{

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where)
    {
        $this->db->update($table,$data,$where);
    }
    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_mobil_nana($id){
        $result = $this->db->where('id_mobil',$id)->get('mobil');
        if ($result->num_rows() > 0) {
            return $result->result();
        }else{
            return false;
        }
    }

    public function cek_login(){
        $username = set_value('username');
        $password = set_value('password');

        $result   = $this->db
                         ->where('username', $username)
                         ->where('password',  $password)
                         ->limit(1)
                         ->get('costumer');
        if($result->num_rows() > 0 ){
            // cek data
            return  $result->row();
        }else{
            return FALSE;
        }

    }

    

}
?>