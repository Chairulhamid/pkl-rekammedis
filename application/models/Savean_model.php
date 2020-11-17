<?php

class Savean_model extends CI_Model
{
   public function getPoli_tj()
   {
      $query = "SELECT * FROM user_pendaftaran WHERE poli_tj='Poli Anak' AND tindakan='Mengantri'";
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
         'namakk'        => $this->input->post('namakk'),
         'nokartu'       => $this->input->post('nokartu'),
         'namaP'         => $this->input->post('namaP'),
         'jeniskel'      => $this->input->post('jeniskel'),
         'umurP'         => $this->input->post('umurP'),
         'alamatP'       => $this->input->post('alamatP'),
         'jenisk'        => $this->input->post('jenisk'),
         'tggl'          => $this->input->post('tggl'),
         'jam'           => $this->input->post('jam'),
         'nama'          => $this->input->post('nama'),
         'jenkel'        => $this->input->post('jenkel'),
         'tggalhr'       => $this->input->post('tggalhr'),
         'umur'          => $this->input->post('umur'),
         'alamat'        => $this->input->post('alamat'),
         'nmayh'         => $this->input->post('nmayh'),
         'umayh'         => $this->input->post('umayh'),
         'penayh'        => $this->input->post('penayh'),
         'pkayh'         => $this->input->post('pkayh'),
         'nmibu'         => $this->input->post('nmibu'),
         'umibu'         => $this->input->post('umibu'),
         'penibu'        => $this->input->post('penibu'),
         'pkibu'         => $this->input->post('pkibu'),
         'bbdn_a'        => $this->input->post('bbdn_a'),
         'prol'          => $this->input->post('prol'),
         'letjan'        => $this->input->post('letjan'),
         'klahir'        => $this->input->post('klahir'),
         'konbay'        => $this->input->post('konbay'),
         'kesimpulanby'  => $this->input->post('kesimpulanby'),
         'bbdn_b'        => $this->input->post('bbdn_b'),
         'penap'         => $this->input->post('penap'),
         'konasi'        => $this->input->post('konasi'),
         'gejala'        => $this->input->post('gejala'),
         'kesimpulan'    => $this->input->post('kesimpulan'),
         'bbdn_c'        => $this->input->post('bbdn_c'),
         'ketbb'         => $this->input->post('ketbb'),
         'dimun'         => $this->input->post('dimun'),
         'pernap'        => $this->input->post('pernap'),
         'gejalan'       => $this->input->post('gejalan'),
         'makanbayi'     => $this->input->post('makanbayi'),
         'kesimpulanneo' => $this->input->post('kesimpulanneo'),
         'keluhan'       => $this->input->post('keluhan'),
         'berat'         => $this->input->post('berat'),
         'suhu'          => $this->input->post('suhu'),
         'rrt'           => $this->input->post('rrt'),
         'hrt'           => $this->input->post('hrt'),
         'diagnosa'      => $this->input->post('diagnosa'),
         'pengo'         => $this->input->post('pengo'),
         'konsl'         => $this->input->post('konsl'),
         'rujuk'         => $this->input->post('rujuk'),
         'tenagam'       => $this->input->post('tenagam')
      );
      $this->db->insert('data_poli_anak', $data);
      // redirect('entry/polianak');
   }
}
