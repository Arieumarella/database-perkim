<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kegiatan extends CI_Controller {

	protected $tabel = 'tb_fisik';
	protected $select = 'tb_fisik.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov';
	protected $colom_search = array('tb_fisik.tahun', 'tb_fisik.menu', 'tb_fisik.rincian','tb_fisik.volume_rk','tb_fisik.satuan','tb_fisik.nilai_rk', 'tb_kabupaten.nama_kab', 'tb_provinsi.nama_prov');
	protected $colom_order = array('tb_fisik.tahun', 'tb_fisik.menu', 'tb_fisik.rincian','tb_fisik.volume_rk','tb_fisik.satuan','tb_fisik.nilai_rk', 'tb_kabupaten.nama_kab', 'tb_provinsi.nama_prov');
	protected $order = array('tb_fisik.tahun' => 'asc');
	protected $where,$data;

	// M_dinamis
	protected $select2 = 'tb_fisik.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov, tb_kecamatan.nam_kec, tb_desa.nama_desa';
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


    public function get_product_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_dinamis->get_all_product($this->tabel, $this->colom_order, $this->colom_search, $this->order, $this->select);
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