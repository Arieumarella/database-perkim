<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function getChartKegiatan()
    {
        $this->db->select('tahun, SUM(REPLACE(nilai_usulan, ".", "")) AS nilai_ususlan');
        $this->db->from('tb_fisik');
        $this->db->where('nilai_usulan !=', '0');
        $this->db->group_by('tahun'); 
        return $this->db->get()->result();
    }

    public function getNilaiRk()
    {
        $this->db->select('tahun, SUM(REPLACE(nilai_rk, ".", "")) AS nilaiRK');
        $this->db->from('tb_fisik');
        $this->db->where('approval_rk', 'Approved');
        $this->db->where('sign', '1');
        $this->db->group_by('tahun'); 
        return $this->db->get()->result();
    }

}