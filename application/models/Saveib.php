<?php

class Saveib extends CI_Model
{
   public function getPoli_tj()
   {
      $query = "SELECT * FROM user_pendaftaran WHERE poli_tj='Poli Ibu' AND tindakan='Mengantri'";
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
      $jenisk   = $this->input->post('jenisk');
      $tggl     = $this->input->post('tggl');
      $jam      = $this->input->post('jam');
      $namaib   = $this->input->post('namaib');
      $umurib   = $this->input->post('umurib');
      $alamats  = $this->input->post('alamat');
      $kerjib   = $this->input->post('kerjib');
      $namas    = $this->input->post('namas');
      $umurs    = $this->input->post('umurs');
      $kerjs    = $this->input->post('kerjs');
      $g        = $this->input->post('G');
      $p        = $this->input->post('P');
      $a        = $this->input->post('A');
      $haid     = $this->input->post('haid');
      $partus   = $this->input->post('partus');
      $keluhan  = $this->input->post('keluhan');
      $tnggi    = $this->input->post('tnggi');
      $berat    = $this->input->post('berat');
      $lper     = $this->input->post('lper');
      $imt      = $this->input->post('imt');
      $suhu     = $this->input->post('suhu');
      $sistole  = $this->input->post('sistole');
      $distole  = $this->input->post('distole');
      $rrt      = $this->input->post('rrt');
      $hrt      = $this->input->post('hrt');
      $tdf      = $this->input->post('tdf');
      $butrs    = $this->input->post('butrs');
      $djk      = $this->input->post('djk');
      $letakj   = $this->input->post('letakj');
      $pdai     = $this->input->post('pdai');
      $gerj     = $this->input->post('gerj');
      $insp     = $this->input->post('insp');
      $hb       = $this->input->post('hb');
      $uralbu   = $this->input->post('uralbu');
      $urredu   = $this->input->post('urredu');
      $diagnosa = $this->input->post('diagnosa');
      $pengo    = $this->input->post('pengo');
      $konsl    = $this->input->post('konsl');
      $rujuk    = $this->input->post('rujuk');
      $tenagam  = $this->input->post('tenagam');

      $data = array(
         'namakk'          => $this->input->post('namakk'),
         'nokartu'         => $this->input->post('nokartu'),
         'namaP'           => $this->input->post('namaP'),
         'jeniskel'        => $this->input->post('jeniskel'),
         'umur'            => $this->input->post('umur'),
         'alamat'          => $this->input->post('alamat'),
         'jenisk'   => $jenisk,
         'tggl'     => $tggl,
         'jam'      => $jam,
         'namaib'   => $namaib,
         'umurib'   => $umurib,
         'alamatib' => $alamats,
         'kerjib'   => $kerjib,
         'namas'    => $namas,
         'umurs'    => $umurs,
         'kerjs'    => $kerjs,
         'g'        => $g,
         'p'        => $p,
         'a'        => $a,
         'haid'     => $haid,
         'partus'   => $partus,
         'keluhan'  => $keluhan,
         'tinggi'   => $tnggi,
         'berat'    => $berat,
         'lper'     => $lper,
         'imt'      => $imt,
         'suhu'     => $suhu,
         'sistole'  => $sistole,
         'distole'  => $distole,
         'rrt'      => $rrt,
         'hrt'      => $hrt,
         'tdf'      => $tdf,
         'butrs'    => $butrs,
         'djk'      => $djk,
         'letakj'   => $letakj,
         'pdai'     => $pdai,
         'gerj'     => $gerj,
         'insp'     => $insp,
         'hb'       => $hb,
         'uralbu'   => $uralbu,
         'urredu	' => $urredu,
         'diagnosa' => $diagnosa,
         'pengo'    => $pengo,
         'kosnl'    => $konsl,
         'rujuk'    => $rujuk,
         'tenagam'  => $tenagam
      );
      $this->db->insert('data_poli_ibu', $data);
      // redirect('entry/poliibu');
   }
}
