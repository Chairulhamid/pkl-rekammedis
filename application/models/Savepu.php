<?php

class Savepu extends CI_Model
{
   public function getPoli_tj()
   {
      $query = "SELECT * FROM user_pendaftaran WHERE poli_tj='Poli Umum' AND tindakan='Mengantri'";
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
         'namakk'          => $this->input->post('namakk'),
         'nokartu'         => $this->input->post('nokartu'),
         'namaP'           => $this->input->post('namaP'),
         'jeniskel'        => $this->input->post('jeniskel'),
         'umur'            => $this->input->post('umur'),
         'alamat'          => $this->input->post('alamat'),
         'jenis_kunjungan' => $this->input->post('jenisk'),
         'tanggal_pu'      => $this->input->post('tggl'),
         'jam_pu'          => $this->input->post('jam'),
         'keluhan_pu'      => $this->input->post('keluhan'),
         'tinggi_pu'       => $this->input->post('tnggi'),
         'berat_pu'        => $this->input->post('berat'),
         'lebar_pu'        => $this->input->post('lper'),
         'imt_pu'          => $this->input->post('imt'),
         'suhu_pu'         => $this->input->post('suhu'),
         'sistole_pu'      => $this->input->post('sistole'),
         'distole_pu'      => $this->input->post('distole'),
         'rrt_pu'          => $this->input->post('rrt'),
         'hrt_pu'          => $this->input->post('hrt'),
         'hb_pu'           => $this->input->post('hb'),
         'gdarah_pu'       => $this->input->post('gdarah'),
         'pdarah_pu'       => $this->input->post('pdarah'),
         'diagnosa_pu'     => $this->input->post('diagnosa'),
         'pengobatan_pu'   => $this->input->post('pengo'),
         'konsl_pu'        => $this->input->post('konsl'),
         'rujuk_pu'        => $this->input->post('rujuk'),
         'petugas_pu'      => $this->input->post('tenagam')
      );
      $this->db->insert('data_poli_umum', $data);
      // redirect('Entry');
   }
}
