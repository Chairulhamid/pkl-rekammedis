<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Entry extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
   }


   public function index()
   {
      $data['title'] = 'Daftar Pasien Poli Umum';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Savepu');
      $data['poliumum'] = $this->Savepu->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vpoliumum', $data);
      $this->load->view('templates/footer');
   }

   public function vpoliibu()
   {
      $data['title'] = 'Daftar Pasien Poli Ibu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Saveib');
      $data['poliumum'] = $this->Saveib->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vpoliibu', $data);
      $this->load->view('templates/footer');
   }

   public function vpolianak()
   {
      $data['title'] = 'Daftar Pasien Poli Anak';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Savean_model');
      $data['poliumum'] = $this->Savean_model->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vpolianak', $data);
      $this->load->view('templates/footer');
   }

   public function vpoligigi()
   {
      $data['title'] = 'Daftar Pasien Poli Gigi';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Savegg');
      $data['poliumum'] = $this->Savegg->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vpoligigi', $data);
      $this->load->view('templates/footer');
   }

   public function vimunisasi()
   {
      $data['title'] = 'Daftar Pasien Imunisasi';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Saveim');
      $data['poli'] = $this->Saveim->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vimunisasi', $data);
      $this->load->view('templates/footer');
   }

   public function vkabe()
   {
      $data['title'] = 'Daftar Pasien KB';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Savekb');
      $data['poli'] = $this->Savekb->getPoli_tj();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/vkabe', $data);
      $this->load->view('templates/footer');
   }

   public function poliumum($id_pendaftaran)
   {
      $data['title'] = 'Data Pemeriksaan Poli Umum';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('Savepu');
      $this->load->model('loadinput');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Savepu->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Savepu->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('Entry');
      } elseif ($this->input->post('batal')) {
         redirect('Entry');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/poliumum', $data);
      $this->load->view('templates/footer');
   }

   public function poliibu($id_pendaftaran)
   {
      $data['title'] = 'Data Pemeriksaan Poli Ibu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('loadinput');
      $this->load->model('Saveib');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Saveib->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Saveib->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('entry/vpoliibu');
      } elseif ($this->input->post('batal')) {
         redirect('entry/vpoliibu');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/poliibu', $data);
      $this->load->view('templates/footer');
   }

   public function polianak($id_pendaftaran)
   {
      $data['title'] = 'Data Pemeriksaan Poli Anak';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('loadinput');
      $this->load->model('Savean_model');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Savean_model->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Savean_model->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('entry/vpolianak');
      } elseif ($this->input->post('batal')) {
         redirect('entry/vpolianak');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/polianak', $data);
      $this->load->view('templates/footer');
   }

   public function poligigi($id_pendaftaran)
   {
      $data['title'] = 'Data Pemeriksaan Poli Gigi';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('loadinput');
      $this->load->model('Savegg');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Savegg->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Savegg->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('entry/vpoligigi');
      } elseif ($this->input->post('batal')) {
         redirect('entry/vpoligigi');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/poligigi', $data);
      $this->load->view('templates/footer');
   }

   public function kabe($id_pendaftaran)
   {
      $data['title'] = 'Data Pemeriksaan KB';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('loadinput');
      $this->load->model('Savekb');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Savekb->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Savekb->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('entry/vkabe');
      } elseif ($this->input->post('batal')) {
         redirect('entry/vkabe');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/kabe', $data);
      $this->load->view('templates/footer');
   }

   public function imunisasi($id_pendaftaran)
   {
      $data['title'] = 'Data Imunisasi';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // Load Model
      $this->load->model('loadinput');
      $this->load->model('Saveim');
      //
      $nilai = array('id_pendaftaran' => $id_pendaftaran);
      $data['pasien'] = $this->Saveim->detail($nilai)->result();
      $up = ['tindakan' => 'Selesai'];
      //
      if ($this->input->post('simpan')) {
         $this->Saveim->simpan($data);
         $this->db->where('id_pendaftaran', $id_pendaftaran);
         $this->db->update('user_pendaftaran', $up);
         redirect('entry/vimunisasi');
      } elseif ($this->input->post('batal')) {
         redirect('entry/vimunisasi');
      }
      //
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('entry/imunisasi', $data);
      $this->load->view('templates/footer');
   }
}
