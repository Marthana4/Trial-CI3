<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelBarang extends CI_Model {

    public function getDataBarang() {
        $this->db->select('*');
        $this->db->from('barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSatuanOptions() {
        $this->db->select("COLUMN_TYPE")
                 ->from("information_schema.COLUMNS")
                 ->where("TABLE_NAME", "barang")
                 ->where("COLUMN_NAME", "satuan");
        $query = $this->db->get();
        $result = $query->row();

        preg_match_all("/'([^']+)'/", $result->COLUMN_TYPE, $matches);
        return $matches[1];
    }

    public function insertDataBarang($data) {
        $this->db->insert('barang',$data);
    }

    public function getDataBarangDetail($id) {
        $this->db->where('kode_barang',$id);
        $query = $this->db->get('barang');
        return $query->row();
    }

    public function editDataBarang($data, $id) {
        $this->db->where('kode_barang',$id);
        $this->db->update('barang',$data);
    }

    public function deleteDataBarang($id) {
        $this->db->where('kode_barang',$id);
        $this->db->delete('barang');
    }
}
?>
