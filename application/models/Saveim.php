<?php

class Saveim extends CI_Model
{
   public function getPoli_tj()
   {
      $query = "SELECT * FROM user_pendaftaran WHERE poli_tj='Pemeriksaan Imunisasi' AND tindakan='Mengantri'";
      return $this->db->query($query)->result_array();
   }

   public function detail($nilai)
   {
      $this->db->select('*');
      $this->db->from('user_pendaftaran');
      $this->db->where_in('id_pendaftaran', $nilai);
      return $this->db->get();
   }

   public function simpan()
   {


      $data = array(
         'namakk'   => $this->input->post('namakk'),
         'nokartu'  => $this->input->post('nokartu'),
         'namaP'    => $this->input->post('namaP'),
         'jeniskel' => $this->input->post('jeniskel'),
         'umurP'    => $this->input->post('umurP'),
         'alamatP'  => $this->input->post('alamatP'),
         'jenisk'   => $this->input->post('jenisk'),
         'tggl'     => $this->input->post('tggl'),
         'jam'      => $this->input->post('jam'),
         'nama'     => $this->input->post('nama'),
         'tggalhr'  => $this->input->post('tggalhr'),
         'umur'     => $this->input->post('umur'),
         'alamat'   => $this->input->post('alamat'),
         'pekerjn'  => $this->input->post('pekerjn'),
         'keluhan'  => $this->input->post('keluhan'),
         'tnggi'    => $this->input->post('tnggi'),
         'berat'    => $this->input->post('berat'),
         'lper'     => $this->input->post('lper'),
         'imt'      => $this->input->post('imt'),
         'suhu'     => $this->input->post('suhu'),
         'sistole'  => $this->input->post('sistole'),
         'distole'  => $this->input->post('distole'),
         'rrt'      => $this->input->post('rrt'),
         'hrt'      => $this->input->post('hrt'),
         'hb'       => $this->input->post('hb'),
         'gdarah'   => $this->input->post('gdarah'),
         'pdarah'   => $this->input->post('pdarah'),
         'diagnosa' => $this->input->post('diagnosa'),
         'pengo'    => $this->input->post('pengo'),
         'konsl'    => $this->input->post('konsl'),
         'rujuk'    => $this->input->post('rujuk'),
         'tenagam'  => $this->input->post('tenagam')
      );
      $this->db->insert('data_imunisasi', $data);
      // redirect('entry/imunisasi');
   }
}
