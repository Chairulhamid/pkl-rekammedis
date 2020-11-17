<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('menu_model');
  }

  public function index()
  {


    $data['title'] = 'Menu Manajemen';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['menu'] = $this->db->get('user_menu')->result_array();
    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added </div>');
      redirect('menu');
    }
  }

  public function submenu()
  {

    $data['title'] = 'Submenu Manajemen';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model', 'menu');

    $data['subMenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added </div>');
      redirect('menu/submenu');
    }
  }
  public function ubah()
  {
    $id = $this->input->post('id');
    $data = array(
      'menu' => $this->input->post('menu'),

    );
    $this->menu_model->ubah($data, $id);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!! </div>');
    redirect('menu');
  }
  public function subUbah()
  {
    $id = $this->input->post('id');
    $data = array(
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
      'is_active' => $this->input->post('is_active'),

    );
    $this->menu_model->subUbah($data, $id);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!! </div>');
    redirect('menu/submenu');
  }
  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->menu_model->hapus_data($where, 'user_menu');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!! </div>');
    redirect('menu/index');
  }
  public function subHapus($id)
  {
    $where = array('id' => $id);
    $this->menu_model->subHapus_data($where, 'user_sub_menu');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!! </div>');
    redirect('menu/submenu');
  }
}
