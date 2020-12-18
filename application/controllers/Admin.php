<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('rekammedis_model');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  public function role()
  {
    $data['title'] = 'Hak Akses & Akun';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $data['role'] = $this->db->get('user_role')->result_array();
    $data['akun'] = $this->db->get('user')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role', $data);
    $this->load->view('templates/footer');
  }
  public function roleAccess($role_id)
  {
    $data['title'] = 'Pengaturan Hak Akses';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    // $this->db->where('id !=', 1);

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('templates/footer');
  }

  public function addAkun()
  {
    $data['title'] = 'Tambah Akun';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/addAkun', $data);
    $this->load->view('templates/footer');
  }
  public function verifikasiAkun()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
    $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

    if ($this->form_validation->run() == false) {
      $this->addAkun();
    } else {
      // Create Data
      $dataUser = [
        'name'         => $this->input->post('nama'),
        'email'        => $this->input->post('email'),
        'image'        => 'default.jpg',
        'password'     => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        'role_id'      => $this->input->post('role'),
        'is_active'    => 1,
        'date_created' => time()
      ];
      $this->db->insert('user', $dataUser);

      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!!</div>');
      redirect('Admin/role');
    }
  }
  public function setAkun($id)
  {
    $data['title'] = 'Pengaturan Akun';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['akun'] = $this->db->get_where('user', ['id' => $id])->row_array();


    if ($this->input->post('simpan')) {
      $upId = array('role_id' => $this->input->post('roleid'));
      $this->db->where('id', $id);
      $this->db->update('user', $upId);
      redirect('Admin/role');
    }


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/setakun', $data);
    $this->load->view('templates/footer');
  }
  public function changeAccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses Ditukar!!!</div>');
  }
  public function hapusakun($id)
  {
    if ($id != 1) {
      $this->db->where('id', $id);
      $this->db->delete('user');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!!</div>');
      redirect('admin/role');
    } else
      $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Admin Tidak Bisa Dihapus!!</div>');
    redirect('admin/role');
  }

  public function data_petugas()
  {
    $data['title'] = 'Data Petugas Kesehatan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['namaPetugas'] = $this->db->get('tb_petugas')->result_array();
    $this->form_validation->set_rules('nik', 'Nik', 'required');
    $this->form_validation->set_rules('nama_petugas', 'Nama Petugas','required');
    $this->form_validation->set_rules('status', 'Status','required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('Admin/dataPetugas', $data);
      $this->load->view('templates/footer');
    } else {

      //simpan data
      $dataPetugas = [
        'nik'          => $this->input->post('nik'),
        'nama_petugas' => $this->input->post('nama_petugas'),
        'status' => $this->input->post('status')

      ];
      $this->db->insert('tb_petugas', $dataPetugas);


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan </div>');
      redirect('Admin/data_petugas');
    }
  }
  public function petugas_ubah()
  {
    $id = $this->input->post('id');
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama_petugas' => $this->input->post('nama_petugas'),
      'status' => $this->input->post('status'),

    );
    $this->rekammedis_model->petugas_ubah($data, $id);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!! </div>');
    redirect('Admin/data_petugas');
  }
  public function petugas_hapus($id)
  {
    $where = array('id' => $id);
    $this->rekammedis_model->hapus_petugas($where, 'tb_petugas');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!! </div>');
    redirect('Admin/data_petugas');
  }

  public function data_diagnosa()
  {
    $data['title'] = 'Data Diagnosa Penyakit';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['diagnosa'] = $this->db->get('tb_diagnosa')->result_array();
    $this->form_validation->set_rules('kode', 'Kode', 'required');
    $this->form_validation->set_rules('jenis_penyakit', 'Jenis Penyakit', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('Admin/dataDiagnosa', $data);
      $this->load->view('templates/footer');
    } else {

      //simpan data
      $data = [
        'kode' => $this->input->post('kode'),
        'jenis_penyakit' => $this->input->post('jenis_penyakit')

      ];
      $this->db->insert('tb_diagnosa', $data);


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan </div>');
      redirect('Admin/data_diagnosa');
    }
  }

  public function diagnosa_ubah()
  {
    $id = $this->input->post('id');
    $data = array(
      'kode' => $this->input->post('kode'),
      'jenis_penyakit' => $this->input->post('jenis_penyakit'),

    );
    $this->rekammedis_model->diagnosa_ubah($data, $id);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!! </div>');
    redirect('Admin/data_diagnosa');
  }

  public function diagnosa_hapus($id)
  {
    $where = array('id' => $id);
    $this->rekammedis_model->hapus_diagnosa($where, 'tb_diagnosa');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!! </div>');
    redirect('Admin/data_diagnosa');
  }
}
