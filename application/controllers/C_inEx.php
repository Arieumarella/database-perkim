<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inEx extends CI_Controller {

	protected $tabel = 't_rkperkim';
	protected $select = 't_rkperkim.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov';
	protected $colom_search = array('t_rkperkim.tahun', 't_rkperkim.menu', 't_rkperkim.rincian','t_rkperkim.volume_rk','t_rkperkim.satuan','t_rkperkim.nilai_rk', 'tb_kabupaten.nama_kab', 'tb_provinsi.nama_prov');
	protected $colom_order = array('t_rkperkim.tahun', 't_rkperkim.menu', 't_rkperkim.rincian','t_rkperkim.volume_rk','t_rkperkim.satuan','t_rkperkim.nilai_rk', 'tb_kabupaten.nama_kab', 'tb_provinsi.nama_prov');
	protected $order = array('t_rkperkim.tahun' => 'asc');
	protected $where,$data;

	// M_dinamis
	protected $select2 = 't_rkperkim.*, tb_kabupaten.nama_kab, tb_provinsi.nama_prov, tb_kecamatan.nam_kec, tb_desa.nama_desa';
	protected $order2 = 't_rkperkim.tahun';
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
		$tmp['tittle'] = 'Input Excel';
		$tmp['content'] = 'inputEx.php';
		$tmp['dataBidang'] = $this->M_dinamis->add_all('tb_bidang', '*', 'idx', 'asc');
		$tmp['dataProvinsi'] = $this->M_dinamis->add_all('tb_provinsi', '*', 'kd_prov', 'asc');
		$this->load->view('tamplate2.php', $tmp);
	}

}