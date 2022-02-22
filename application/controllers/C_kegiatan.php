<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kegiatan extends CI_Controller {

	protected $tabel = 'tb_fisik';
	protected $select = 'tb_fisik.provinsi_nama, tb_fisik.pengusul_nama, tb_fisik.kecamatan_nama,tb_fisik.desa_nama,tb_fisik.menu, tb_fisik.rincian, tb_fisik.volume_rk, tb_fisik.Satuan, tb_fisik.nilai_usulan, tb_fisik.tahun';
	protected $colom_search = array('tb_fisik.provinsi_nama', 'tb_fisik.pengusul_nama', 'tb_fisik.kecamatan_nama','tb_fisik.desa_nama','tb_fisik.menu',' tb_fisik.rincian', 'tb_fisik.volume_rk', 'tb_fisik.Satuan', 'tb_fisik.nilai_usulan', 'tb_fisik.tahun');
	protected $colom_order = array('tb_fisik.provinsi_nama', 'tb_fisik.pengusul_nama', 'tb_fisik.kecamatan_nama','tb_fisik.desa_nama','tb_fisik.menu',' tb_fisik.rincian', 'tb_fisik.volume_rk', 'tb_fisik.Satuan', 'tb_fisik.nilai_usulan', 'tb_fisik.tahun');
	protected $order = array('tb_fisik.tahun' => 'asc');
	protected $where,$data;

	// M_dinamis
	protected $select2 = 'tb_fisik.provinsi_nama, tb_fisik.pengusul_nama, tb_fisik.kecamatan_nama,tb_fisik.desa_nama,tb_fisik.menu, tb_fisik.rincian, tb_fisik.volume_rk, tb_fisik.Satuan, tb_fisik.nilai_usulan, tb_fisik.tahun';
	protected $order2 = 'tb_fisik.tahun';
	protected $urut = 'asc';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dinamis');
		if($this->session->userdata('logged') != TRUE){
		redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$tmp['tittle'] = 'History Kegiatan';
		$tmp['content'] = 'H_kegiatan.php';
		$tmp['dataBidang'] = $this->M_dinamis->add_all('tb_bidang', '*', 'idx', 'asc');
		$tmp['dataProvinsi'] = $this->M_dinamis->add_all('tb_provinsi', '*', 'kd_prov', 'asc');
		$this->load->view('tamplate2.php', $tmp);
	}

	public function getDaerah()
	{
		$id_provinsi = $this->input->post('idProv');
		$lemparData = array(
			'kd_prov' => $id_provinsi
		);

		$data = $this->M_dinamis->getResult('tb_kabupaten', $lemparData);

		echo json_encode($data);
	}

	public function getPenunjang()
	{
		header('Content-Type: application/json');
       echo $this->M_dinamis->getPenunjang('tb_penunjang', 'tb_penunjang.*', 'tb_penunjang.*', array('tb_penunjang.tahun' => 'asc'), 'tb_penunjang.*');
	}


    public function getFisik() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_dinamis->getFisik($this->tabel, $this->colom_order, $this->colom_search, $this->order, $this->select);
  	}
  	
    public function get_data_tables2()
    {
      $provinsi =  $this->input->post('provinsi');
      $kab =  $this->input->post('kota');

      $data = array(
      	'provinsi' => $provinsi,
      	'kab' => $kab
      );

      echo json_encode($data);
    }

}

/* End of file C_kegiatan.php */
/* Location: ./application/controllers/C_kegiatan.php */