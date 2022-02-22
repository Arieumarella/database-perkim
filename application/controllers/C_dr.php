<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dr extends CI_Controller {

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
		$tmp['tittle'] = 'Download Rekap';
		$tmp['content'] = 'dr.php';
		$tmp['dataBidang'] = $this->M_dinamis->add_all('tb_bidang', '*', 'idx', 'asc');
		$tmp['dataProvinsi'] = $this->M_dinamis->add_all('tb_provinsi', '*', 'kd_prov', 'asc');
		$this->load->view('tamplate2.php', $tmp);
	}

	public function getDaerah()
	{
		
		$lvl = $this->input->post('lvl');

		switch ($lvl) {
		  case "1":
		  	$id_provinsi = $this->input->post('idProv');
		    $lemparData = array(
			'kab_kd_prov' => $id_provinsi
			);
			$data = $this->M_dinamis->getResult('tb_kabupaten', $lemparData);
		    break;
		  case "2":
		    $id_provinsi = $this->input->post('idProv');
		    $id_kab = $this->input->post('idKab');
		    $lemparData = array(
			'kd_prov' => $id_provinsi,
			'kd_kab' => $id_kab
			);
			$data = $this->M_dinamis->getResult('tb_kecamatan', $lemparData);
		    break;
		  case "3":
		    $id_provinsi = $this->input->post('idProv');
		    $id_kab = $this->input->post('idKab');
		    $id_kec = $this->input->post('idKec');
		    $lemparData = array(
			'kd_prov' => $id_provinsi,
			'kdkota' => $id_kab,
			'kdkec' => $id_kec
			);
			$data = $this->M_dinamis->getResult('tb_desa', $lemparData);
		    break;
		  
		}

		echo json_encode($data);
	}

   public function exportExcel()
   {
	   require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
	   require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

	   $bidang =  $this->uri->segment(3);
  	   $provinsi =  $this->uri->segment(4);
	   $kota =  $this->uri->segment(5);
	   $kecamatan =  $this->uri->segment(6);
	   $desa =  $this->uri->segment(7);
	   

	   $tmp['data'] = $this->M_dinamis->get_all_kegiatan('tb_fisik',  $bidang, $provinsi, $kota, $kecamatan, $desa);
	
	   $obj = new PHPExcel();
	   $obj->getProperties()->setCreator("Sistem Manajamen Asset PFID");
	   $obj->getProperties()->setLastModifiedBy("Sistem Manajamen Asset PFID");
	   $obj->getProperties()->setTitle("Data Bidang Perkim");

	   $obj->setActiveSheetIndex(0);

	   $obj->getActiveSheet()->setCellValue('A1', 'TAHUN');
	   $obj->getActiveSheet()->setCellValue('B1', 'PROVINSI');
	   $obj->getActiveSheet()->setCellValue('C1', 'kAB/KOTA');
	   $obj->getActiveSheet()->setCellValue('D1', 'KECAMATAN');
	   $obj->getActiveSheet()->setCellValue('E1', 'DESA');
	   $obj->getActiveSheet()->setCellValue('F1', 'JENIS');
	   $obj->getActiveSheet()->setCellValue('G1', 'TEMATIK');
	   $obj->getActiveSheet()->setCellValue('H1', 'MENU');
	   $obj->getActiveSheet()->setCellValue('I1', 'RINCIAN');
	   $obj->getActiveSheet()->setCellValue('J1', 'VELUME USULAN');
	   $obj->getActiveSheet()->setCellValue('K1', 'NILAI USULAN');
	   $obj->getActiveSheet()->setCellValue('L1', 'KOMPONEN RK');
	   $obj->getActiveSheet()->setCellValue('M1', 'VOLUME RK');
	   $obj->getActiveSheet()->setCellValue('N1', 'NILAI RK');
	   $obj->getActiveSheet()->setCellValue('O1', 'APPROVAL RK');
	   $obj->getActiveSheet()->setCellValue('P1', 'SIGN');
	   $obj->getActiveSheet()->setCellValue('Q1', 'SATUAN');

	   $row = 2;

	   foreach ( $tmp['data'] as $key) {
		$obj->getActiveSheet()->setCellValue('A'.$row, $key->tahun);
		$obj->getActiveSheet()->setCellValue('B'.$row, $key->provinsi_nama);
		$obj->getActiveSheet()->setCellValue('C'.$row, $key->pengusul_nama);
		$obj->getActiveSheet()->setCellValue('D'.$row, $key->kecamatan_nama);
		$obj->getActiveSheet()->setCellValue('E'.$row, $key->desa_nama);
		$obj->getActiveSheet()->setCellValue('F'.$row, $key->jenis);
		$obj->getActiveSheet()->setCellValue('G'.$row, $key->tematik);
		$obj->getActiveSheet()->setCellValue('H'.$row, $key->menu);
		$obj->getActiveSheet()->setCellValue('I'.$row, $key->rincian);
		$obj->getActiveSheet()->setCellValue('J'.$row, $key->volume_usulan);
		$obj->getActiveSheet()->setCellValue('K'.$row, $key->nilai_usulan);
		$obj->getActiveSheet()->setCellValue('L'.$row, $key->komponen_rk);
		$obj->getActiveSheet()->setCellValue('M'.$row, $key->volume_rk);
		$obj->getActiveSheet()->setCellValue('N'.$row, $key->nilai_rk);
		$obj->getActiveSheet()->setCellValue('O'.$row, $key->approval_rk);
		$obj->getActiveSheet()->setCellValue('P'.$row, $key->sign);
		$obj->getActiveSheet()->setCellValue('Q'.$row, $key->Satuan);
		
		$row++;
	   }

	   $obj->getActiveSheet()->setTitle("Data_Fisik");
	   //////////////////////////////////////////////////////////////////////
	   if ($kota !== 'null') {
	   $tmp['penunjang'] = $this->M_dinamis->getPenunjangDownload($kota);

	   $obj->createSheet();

	   $obj->setActiveSheetIndex(1);
	   
	   $obj->getActiveSheet()->setCellValue('A1', 'TAHUN');
	   $obj->getActiveSheet()->setCellValue('B1', 'kAB/KOTA');
	   $obj->getActiveSheet()->setCellValue('C1', 'JENIS PENUNJANG');
	   $obj->getActiveSheet()->setCellValue('D1', 'PENUNJANG');
	   $obj->getActiveSheet()->setCellValue('E1', 'USULAN');
	   $obj->getActiveSheet()->setCellValue('F1', 'APPROVAL RK');

	   $row = 2;

	   foreach ( $tmp['penunjang'] as $key) {
		
		$obj->getActiveSheet()->setCellValue('A'.$row, $key->tahun);
		$obj->getActiveSheet()->setCellValue('B'.$row, $key->pengusul_nama);
		$obj->getActiveSheet()->setCellValue('C'.$row, $key->jenis_penunjang);
		$obj->getActiveSheet()->setCellValue('D'.$row, $key->penunjang);
		$obj->getActiveSheet()->setCellValue('E'.$row, $key->usulan);
		$obj->getActiveSheet()->setCellValue('F'.$row, $key->approval_rk);
				
		$row++;
	   }

	  
	   $obj->getActiveSheet()->setTitle("Data_Penunjang");
	}
	   
	   $filename = "Data_Bidang".'.xlsx';	
	

	   header("Pragma: public");
	   header("Expires: 0");
	   header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	   header("Content-Type: application/force-download");
	   header("Content-Type: application/octet-stream");
	   header("Content-Type: application/download");;
	   header("Content-Disposition: attachment;filename=$filename");

	   $writer=PHPExcel_IOFactory::createwriter($obj, 'Excel2007');
	   $writer->save('php://output');
	
	   exit;
   }
}