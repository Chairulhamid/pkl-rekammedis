<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('LoadTabel');
		$this->load->model('rekammedis_model');
		$this->load->model('Laporan_anak');
		$this->load->model('Laporan_umum');
		$this->load->model('Laporan_ibu');
		$this->load->model('Laporan_gigi');
		$this->load->model('Laporan_imunisasi');
		$this->load->model('Laporan_kb');
	}

	public function index()
	{
		$data['title'] = 'Beranda';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$this->load->model('CountData');
		// Load View 
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/beranda', $data);
		$this->load->view('templates/footer');
	}

	public function dataPU()
	{
		$data['title'] = 'Kunjungan Pasien Poli Umum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataPU'] = $this->LoadTabel->loadPU();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataPU', $data);
		$this->load->view('templates/footer');
	}
	public function hapusPU($id)
	{
		$where = array('id_pu' => $id);
		$this->LoadTabel->hapus_data($where, 'data_poli_umum');
		redirect('Welcome/dataPU');
	}
	public function dataAN()
	{
		$data['title'] = 'Kunjungan Pasien Poli Anak';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataAN'] = $this->LoadTabel->loadAN();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataAN', $data);
		$this->load->view('templates/footer');
	}
	public function hapusAN($id)
	{
		$where = array('id' => $id);
		$this->LoadTabel->hapus_data($where, 'data_poli_anak');
		redirect('Welcome/dataAN');
	}
	public function dataIB()
	{
		$data['title'] = 'Kunjungan Pasien Poli Ibu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataIB'] = $this->LoadTabel->loadIB();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataIB', $data);
		$this->load->view('templates/footer');
	}
	public function hapusIB($id)
	{
		$where = array('id' => $id);
		$this->LoadTabel->hapus_data($where, 'data_poli_ibu');
		redirect('Welcome/dataIB');
	}
	public function dataGG()
	{
		$data['title'] = 'Kunjungan Pasien Poli Gigi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataGG'] = $this->LoadTabel->loadGG();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataGG', $data);
		$this->load->view('templates/footer');
	}
	public function hapusGG($id)
	{
		$where = array('id' => $id);
		$this->LoadTabel->hapus_data($where, 'data_poli_gigi');
		redirect('Welcome/dataGG');
	}
	public function dataIM()
	{
		$data['title'] = 'Kunjungan Pasien Imunisasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataIM'] = $this->LoadTabel->loadIM();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataIM', $data);
		$this->load->view('templates/footer');
	}
	public function hapusIM($id)
	{
		$where = array('id' => $id);
		$this->LoadTabel->hapus_data($where, 'data_imunisasi');
		redirect('Welcome/dataIM');
	}
	public function dataKB()
	{
		$data['title'] = 'Kunjungan Pasien KB';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// Load Model
		$data['dataKB'] = $this->LoadTabel->loadKB();
		// Load View
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/dataKB', $data);
		$this->load->view('templates/footer');
	}
	public function hapusKB($id)
	{
		$where = array('id' => $id);
		$this->LoadTabel->hapus_data($where, 'data_kabe');
		redirect('Welcome/dataKB');
	}
	public function cetakPU()
	{
		$data['dataPU'] = $this->LoadTabel->loadPU();

		$data['title'] = "DATA PASIEN POLI UMUM";
		$this->load->view('print/printPU', $data);
	}
	public function cetakAN()
	{
		$data['dataAN'] = $this->LoadTabel->loadAN();

		$data['title'] = "DATA PASIEN POLI Anak";
		$this->load->view('print/printAN', $data);
	}
	public function cetakIB()
	{
		$data['dataIB'] = $this->LoadTabel->loadIB();

		$data['title'] = "DATA PASIEN POLI IBU";
		$this->load->view('print/printIB', $data);
	}
	public function cetakGG()
	{
		$data['dataGG'] = $this->LoadTabel->loadGG();

		$data['title'] = "DATA PASIEN POLI GIGI";
		$this->load->view('print/printGG', $data);
	}
	public function cetakIM()
	{
		$data['dataIM'] = $this->LoadTabel->loadIM();

		$data['title'] = "DATA PASIEN IMUNISASI";
		$this->load->view('print/printIM', $data);
	}
	public function cetakKB()
	{
		$data['dataKB'] = $this->LoadTabel->loadKB();

		$data['title'] = "DATA PASIEN KB";
		$this->load->view('print/printKB', $data);
	}

	public function pasien_umum()
	{
		$data['title'] = 'Data Pasien Umum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pasienUmum'] = $this->rekammedis_model->getUmum();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/pasien_umum', $data);
		$this->load->view('templates/footer');
	}

	public function pasien_bpjs()
	{
		$data['title'] = 'Data Pasien BPJS';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pasienBpjs'] = $this->rekammedis_model->getBpjs();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pages/pasien_bpjs', $data);
		$this->load->view('templates/footer');
	}
	public function b_printAnak()
  {
    $data['title'] = 'Poli Anak';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_anak->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printAnak', $data);
    $this->load->view('templates/footer');
  }
	public function b_printPU()
  {
    $data['title'] = 'Poli Umum';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_umum->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printPU', $data);
    $this->load->view('templates/footer');
  }
	public function b_printIbu()
  {
    $data['title'] = 'Poli Ibu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_ibu->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printibu', $data);
    $this->load->view('templates/footer');
  }
	public function b_printGG()
  {
    $data['title'] = 'Poli Gigi';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_gigi->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printGG', $data);
    $this->load->view('templates/footer');
  }
	public function b_printIM()
  {
    $data['title'] = 'Poli Imunisasi';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_imunisasi->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printIM', $data);
    $this->load->view('templates/footer');
  }
	public function b_printKB()
  {
    $data['title'] = 'Poli KB';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	$data['tahun'] = $this->Laporan_kb->gettahun();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('print/b_printKB', $data);
    $this->load->view('templates/footer');
  }

	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilter'] = $this->Laporan_anak->filterbytanggal($tanggalawal,$tanggalakhir);
			
			$this->load->view('print/printAN', $data);
			
		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilter'] = $this->Laporan_anak->filterbybulan($tahun1,$bulanawal,$bulanakhir);

			$this->load->view('print/printAN', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilter'] = $this->Laporan_anak->filterbytahun($tahun2);

			$this->load->view('print/printAN', $data);
		}

	}
	function filter1(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_umum->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('print/printPU', $data);

		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_umum->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('print/printPU', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_umum->filterbytahun($tahun2);

			$this->load->view('print/printPU', $data);
			

		}
	}
	function filter2(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_ibu->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('print/printIB', $data);

		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_ibu->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('print/printIB', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_ibu->filterbytahun($tahun2);

			$this->load->view('print/printIB', $data);
			

		}
	}
	function filter3(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_gigi->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('print/printGG', $data);

		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_gigi->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('print/printGG', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_gigi->filterbytahun($tahun2);

			$this->load->view('print/printGG', $data);
			

		}
	}
	function filter4(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_imunisasi->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('print/printIM', $data);

		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_imunisasi->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('print/printIM', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_imunisasi->filterbytahun($tahun2);

			$this->load->view('print/printIM', $data);
			

		}
	}
	function filter5(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');


		if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan  By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_kb->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('print/printKB', $data);

		}elseif ($nilaifilter == 2) {
			
			$data['title'] = "Laporan  By Bulan";
			$data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_kb->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('print/printKB', $data);

		}elseif ($nilaifilter == 3) {
			
			$data['title'] = "Laporan  By Tahun";
			$data['subtitle'] = ' Tahun : '.$tahun2;
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['datafilterU'] = $this->Laporan_kb->filterbytahun($tahun2);

			$this->load->view('print/printKB', $data);
			

		}
	}

}
