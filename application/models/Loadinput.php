<?php

class Loadinput extends CI_Model
{
   public function getDiagnosa()
   {
      $this->db->get('tb_diagnosa');
      $penyakit = " SELECT jenis_penyakit FROM tb_diagnosa";
      return $this->db->query($penyakit)->result_array();
   }

   public function getPetugas()
   {
      $this->db->get('tb_petugas');
      $petugas = " SELECT nama_petugas FROM tb_petugas";
      return $this->db->query($petugas)->result_array();
   }
}
