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



public function max_value($tabel, $select)
{
    $this->db->select_max($select);
    $this->db->from($tabel);
    return $this->db->get()->row();
}

public function save($tabel, $data){
    return $this->db->insert($tabel, $data);
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


    public function getFisik($tabel, $colom_order, $colom_search, $order, $select) {
      $this->datatables->select('tb_fisik.provinsi_nama, tb_fisik.pengusul_nama, tb_fisik.kecamatan_nama,tb_fisik.desa_nama,tb_fisik.menu, tb_fisik.rincian, tb_fisik.volume_rk, tb_fisik.Satuan, tb_fisik.nilai_usulan, tb_fisik.tahun');
      $this->datatables->from($tabel);
      
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

     $this->datatables->where('tb_fisik.approval_rk', 'Approved');
     $this->datatables->where('tb_fisik.sign', '1');
    
      $this->datatables->add_column('view','provinsi_nama,pengusul_nama,kecamatan_nama,desa_nama,menu,rincian,volume_rk,Satuan,nilai_usulan,tahun');
      return $this->datatables->generate();
    }

    public function get_all_kegiatan($tabel, $bidang, $provinsi, $kota, $kecamatan, $desa) {
        $this->db->select('tb_fisik.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov ');
        $this->db->from($tabel);
        $this->db->join('tb_provinsi', 'tb_fisik.kdprov=tb_provinsi.kd_prov', 'INNER');
        $this->db->join('tb_kabupaten', 'tb_fisik.kdkab=tb_kabupaten.kd_kab and tb_fisik.kdprov = tb_kabupaten.kab_kd_prov', 'INNER');
        $this->db->where('tb_fisik.approval_rk', 'Approved');
        $this->db->where('tb_fisik.sign', '1');
        if ($provinsi !== 'null') {
            $this->db->where('tb_fisik.kdprov', $provinsi);
        }
        if ($kota !== 'null') {
            $this->db->where('tb_fisik.kdkab', $kota);
        }
        if ($kecamatan !== 'null') {
            $this->db->where('tb_fisik.kdkec', $kecamatan);
        }
        if ($desa !== 'null') {
            $this->db->where('tb_fisik.kddesa', $desa);
        }
  
        if ( $bidang !== 'null') {
          $this->db->where('tb_fisik.kdbidang', $bidang);
       }
       
        return $this->db->get()->result();
      }

    public function getPenunjang($tabel, $colom_order, $colom_search, $order, $select)
    {
        $this->datatables->select($select);
        $this->datatables->from($tabel);
        $this->datatables->where('tb_penunjang.kdkab', $this->input->post('kdkab'));
        $this->datatables->where('tb_penunjang.approval_rk', 'Approved');
        $this->datatables->where('tb_penunjang.sign', 1);
        $this->datatables->where("tb_penunjang.usulan !=", '0');
        $this->datatables->add_column('view','tahun,pengusul_nama,jenis_penunjang,penunjang,usulan,approval_rk');
        return $this->datatables->generate();
    }

    public function getPenunjangDownload($kdkab)
    {
        $this->db->select('tb_penunjang.*');
        $this->db->from('tb_penunjang');
        $this->db->where('tb_penunjang.kdkab', $kdkab);
        $this->db->where('tb_penunjang.approval_rk', 'Approved');
        $this->db->where('tb_penunjang.sign', 1);
        $this->db->where("tb_penunjang.usulan !=", '0');
        return $this->db->get()->result();
    }

 
    	
}

/* End of file M_dinamis.php */
/* Location: ./application/models/M_dinamis.php */