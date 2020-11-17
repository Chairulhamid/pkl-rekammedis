<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekamMedis extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('rekammedis_model');
  }

  public function index()
  {
    $data['title'] = 'Data Pasien';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['rekammedis'] = $this->db->get('user_pasien')->result_array();

    $this->form_validation->set_rules('no_kartu', 'No Kartu', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'tanggal Lahir', 'required');
    $this->form_validation->set_rules('umur', 'Umur', 'required');
    $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('nama_kk', 'Nama KK', 'required');
    $this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('tindakan', 'Tindakan', 'required');
    $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
    $this->form_validation->set_rules('poli_tj', 'Poli Tj', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('rekammedis/index', $data);
      $this->load->view('templates/footer');
    } else {

      //simpan data
      $data = [
        'no_kartu' => $this->input->post('no_kartu'),
        'status' => $this->input->post('status'),
        'nama' => $this->input->post('nama'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'umur' => $this->input->post('umur'),
        'j_kelamin' => $this->input->post('j_kelamin'),
        'nama_kk' => $this->input->post('nama_kk'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat')
      ];
      $data1 = [
        'tanggal' => $this->input->post('tanggal'),
        'no_kartu' => $this->input->post('no_kartu'),
        'status' => $this->input->post('status'),
        'nama' => $this->input->post('nama'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'umur' => $this->input->post('umur'),
        'j_kelamin' => $this->input->post('j_kelamin'),
        'tindakan' => $this->input->post('tindakan'),
        'keluhan' => $this->input->post('keluhan'),
        'nama_kk' => $this->input->post('nama_kk'),
        'alamat' => $this->input->post('alamat'),
        'poli_tj' => $this->input->post('poli_tj')

      ];
      $this->db->insert('user_pasien', $data);
      $this->db->insert('user_pendaftaran', $data1);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan </div>');
      redirect('rekammedis');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan </div>');
      redirect('rekammedis/datapendaftaran');
    }
  }

  public function datapendaftaran()
  {
    $data['title'] = 'Data Kunjungan Pasien';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['rekammedis'] = $this->db->get('user_pasien')->result_array();
    $data['pendaftaran'] = $this->rekammedis_model->pendaftaran();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rekammedis/datapendaftaran', $data);
    $this->load->view('templates/footer');
  }
  public function kunjunganTot()
  {
    $data['title'] = 'Jumlah Kunjungan Pasien';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['kunjungan'] = $this->db->get('user_pendaftaran')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rekammedis/kunjunganTot', $data);
    $this->load->view('templates/footer');
  }
  public function bpjs()
  {
    $data['title'] = 'Kunjungan Pasien BPJS';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   $data['bpjs'] = $this->rekammedis_model->bpjs();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rekammedis/bpjs', $data);
    $this->load->view('templates/footer');
  }
  public function umum()
  {
    $data['title'] = 'Kunjungan Pasien Umum';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   $data['umum'] = $this->rekammedis_model->umum();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rekammedis/umum', $data);
    $this->load->view('templates/footer');
  }

  public function f_pendaftaran()
  {
    $data['title'] = ' Tambah Data Kunjungan Pasien';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['rekammedis'] = $this->db->get('user_pasien')->result_array();
    $data['pendaftaran'] = $this->rekammedis_model->pendaftaran();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('rekammedis/f_pendaftaran', $data);
    $this->load->view('templates/footer');
  }

  public function add_action()
  {
    $data = array(
      'tanggal' => $this->input->post('tanggal'),
      'no_kartu' => $this->input->post('no_kartu'),
      'status' => $this->input->post('status'),
      'nama' => $this->input->post('nama'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'umur' => $this->input->post('umur'),
      'j_kelamin' => $this->input->post('j_kelamin'),
      'nama_kk' => $this->input->post('nama_kk'),
      'alamat' => $this->input->post('alamat'),
      'tindakan' => $this->input->post('tindakan'),
      'keluhan' => $this->input->post('keluhan'),
      'poli_tj' => $this->input->post('poli_tj')
    );
    $this->db->insert('user_pendaftaran', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan </div>');
    redirect('rekammedis/datapendaftaran');
  }

  public function setPasien($data)
  {
    $this->db->insert('user_pasien', $data);
  }

  public function ubah()
  {
    $id = $this->input->post('id');
    $data = array(
      'no_kartu' => $this->input->post('no_kartu'),
      'status' => $this->input->post('status'),
      'nama' => $this->input->post('nama'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'umur' => $this->input->post('umur'),
      'j_kelamin' => $this->input->post('j_kelamin'),
      'nama_kk' => $this->input->post('nama_kk'),
      'no_hp' => $this->input->post('no_hp'),
      'alamat' => $this->input->post('alamat')
    );
    $this->rekammedis_model->ubah($data, $id);
    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('rekammedis');
  }

  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->rekammedis_model->hapus_data($where, 'user_pasien');
    redirect('rekammedis/index');
  }
}
