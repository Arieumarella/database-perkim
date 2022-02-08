<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lokpri extends CI_Controller {

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
		$tmp['tittle'] = 'History Lokpri';
		$tmp['content'] = 'H_lokpri.php';
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

	public function get_data_tables()
    {
        $list = $this->M_dinamis->get_datatables($this->tabel, $this->colom_order, $this->colom_search, $this->order, $this->select);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $main) {
            $no++;
            $row = array();
            $row[] = $main->nama_prov;
            $row[] = $main->nama_kab;
            $row[] = $main->kecamatan_nama;
            $row[] = $main->desa_nama;
            $row[] = $main->menu;
            $row[] = $main->rincian;
            $row[] = $main->volume;
            $row[] = 'Rp. '.number_format($main->nilai_usulan,2,',','.');
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_dinamis->count_all($this->tabel, $this->select),
                        "recordsFiltered" => $this->M_dinamis->count_filtered($this->tabel, $this->colom_order, $this->colom_search, $this->order, $this->select),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    function get_product_json() { //get product data and encode to be JSON object
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