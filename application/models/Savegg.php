<?php

class Savegg extends CI_Model
{
   public function getPoli_tj()
   {
      $query = "SELECT * FROM user_pendaftaran WHERE poli_tj='Poli Gigi' AND tindakan='Mengantri'";
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
         'umur'     => $this->input->post('umur'),
         'alamat'   => $this->input->post('alamat'),
         'jenisk'   => $this->input->post('jenisk'),
         'tggl'     => $this->input->post('tggl'),
         'jam'      => $this->input->post('jam'),
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
      $this->db->insert('data_poli_gigi', $data);
      // redirect('entry/poligigi');
   }
}
