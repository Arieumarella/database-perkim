<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dinamis extends CI_Model {

public function add_all($tabel, $select, $order, $urut)
{
    $this->db->from($tabel);
    $this->db->select($select);
    $this->db->order_by($order, $urut);
    return $this->db->get()->result();
}

public function add_in($tabel, $select, $order, $urut, $where)
{
    $this->db->from($tabel);
    $this->db->select($select);
     $this->db->where_in('id_slug', $where);
    $this->db->order_by($order, $urut);
    return $this->db->get()->result();
}

public function update($tabel, $dataUbah, $where){
    $this->db->where($where);
   return $this->db->update($tabel, $dataUbah);
}

public function slug_id($tabel, $select, $order, $urut)
{
    $this->db->from($tabel);
    $this->db->select($select);
    $this->db->order_by($order, $urut);
    return $this->db->get()->result_array();
}

public function max_value($tabel, $select)
{
    $this->db->select_max($select);
    $this->db->from($tabel);
    return $this->db->get()->row();
}

public function save($tabel, $data){
    return $this->db->insert($tabel, $data);
}

public function countDataById($tabel, $data)
{
    return $this->db->get_where($tabel, $data)->num_rows();
}

public function getResult($tabel, $data)
{
    return $this->db->get_where($tabel, $data)->result();
}

public function getResult2($tabel, $data)
{
    return $this->db->get_where($tabel, $data)->result_array();
}

public function getById($tabel, $data)
{
    return $this->db->get_where($tabel, $data)->row();
}

public function delete($tabel, $data){
    $this->db->where($data);
    return $this->db->delete($tabel);
}
 
    public function get_datatables($tabel, $colom_order, $colom_search, $order, $select)
    {
        
        $this->_get_datatables_query($tabel, $colom_order, $colom_search, $order, $select);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }


    public function get_all_product($tabel, $colom_order, $colom_search, $order, $select) {
      $this->datatables->select('tb_fisik.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov ');
      $this->datatables->from($tabel);
      $this->datatables->join('tb_provinsi', 'tb_fisik.kdprov=tb_provinsi.kd_prov', 'INNER');
      $this->datatables->join('tb_kabupaten', 'tb_fisik.kdkab=tb_kabupaten.kd_kab and tb_fisik.kdprov = tb_kabupaten.kab_kd_prov', 'INNER');

      if ($this->input->post('provinsi')) {
          $this->datatables->where('tb_fisik.kdprov', $this->input->post('provinsi'));
      }
      if ($this->input->post('kota')) {
          $this->datatables->where('tb_fisik.kdkab', $this->input->post('kota'));
      }
      if ($this->input->post('kecamatan')) {
          $this->datatables->where('tb_fisik.kdkec', $this->input->post('kecamatan'));
      }
      if ($this->input->post('desa')) {
          $this->datatables->where('tb_fisik.kddesa', $this->input->post('desa'));
      }

      if ($this->input->post('bidang')) {
        $this->datatables->where('tb_fisik.kdbidang', $this->input->post('bidang'));
     }

      $this->datatables->add_column('view','menu','tahun','rincian','volume_rk','Satuan','desa_nama','kecamatan_nama');
      return $this->datatables->generate();
  }

 
    public function count_filtered($tabel, $colom_order, $colom_search, $order, $select)
    {
        
        // $this->_get_datatables_query($tabel, $colom_order, $colom_search, $order, $select);
        return $this->db->count_all_results();
    }
 
    public function count_all($tabel)
    {
        return $this->db->count_all_results($tabel);
        
    }

	
}

/* End of file M_dinamis.php */
/* Location: ./application/models/M_dinamis.php */