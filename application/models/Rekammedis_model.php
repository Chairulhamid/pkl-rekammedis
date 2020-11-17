<?php

class Rekammedis_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    return $this->db->query('SELECT *
        FROM  `user_pasien` ORDER BY id DESC');
  }
  public function getPasien()
  {
    $builder = $this->db->table('user_pasien');
    return $builder->get();
  }
  public function updatePasien($data, $id)
  {
    $query = $this->db->table('user_pasien')->update($data, array('id' => $id));
    return $query;
  }
  public function ubah($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('user_pasien', $data);
    return TRUE;
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  function jumlahpasien()
  {
    $query = $this->db->get('user_pasien');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function jumlahKunjungan()
  {
    $query = $this->db->get('user_pendaftaran');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function jumlahPasien_umum()
  {
    $query =  $this->db->get_where('user_pasien', array('status' => 'Umum'));
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function jumlahPasien_BPJS()
  {
    $query =  $this->db->get_where('user_pasien',  array('status' => 'BPJS'));
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function getUmum()
  {
    $query = "SELECT * FROM user_pasien WHERE status ='Umum'";
    return $this->db->query($query)->result_array();
  }
  public function getBpjs()
  {
    $query = "SELECT * FROM user_pasien WHERE status ='BPJS'";
    return $this->db->query($query)->result_array();
  }
  public function pendaftaran()
  {
    $query = "SELECT * FROM user_pendaftaran WHERE tindakan ='Mengantri'";
    return $this->db->query($query)->result_array();
  }
  public function bpjs()
  {
    $query = "SELECT * FROM user_pendaftaran WHERE status ='BPJS'";
    return $this->db->query($query)->result_array();
  }
  public function umum()
  {
    $query = "SELECT * FROM user_pendaftaran WHERE status ='Umum'";
    return $this->db->query($query)->result_array();
  }

  function jumlahPasien_lama()
  {
    $query0 =  $this->db->query('SELECT * FROM data_poli_umum WHERE jenis_kunjungan ="Lama"');
    $query1 =  $this->db->query('SELECT * FROM data_poli_ibu WHERE jenisk ="Lama"');
    $query2 =  $this->db->query('SELECT * FROM data_poli_anak WHERE jenisk ="Lama" ');
    $query3 =  $this->db->query('SELECT * FROM data_poli_gigi WHERE jenisk ="Lama" ');
    $query4 =  $this->db->query('SELECT * FROM data_imunisasi WHERE jenisk ="Lama"');
    $query5 =  $this->db->query('SELECT * FROM data_kabe WHERE jenisk ="Lama"');
    $query6 =  $this->db->query('SELECT * FROM data_poli_umum WHERE jenis_kunjungan ="Kasus"');
    $query7 =  $this->db->query('SELECT * FROM data_poli_ibu WHERE jenisk ="Kasus"');
    $query8 =  $this->db->query('SELECT * FROM data_poli_anak WHERE jenisk ="Kasus" ');
    $query9 =  $this->db->query('SELECT * FROM data_poli_gigi WHERE jenisk ="Kasus" ');
    $query10 =  $this->db->query('SELECT * FROM data_imunisasi WHERE jenisk ="Kasus"');
    $query11 =  $this->db->query('SELECT * FROM data_kabe WHERE jenisk ="Kasus"');
    $hasil0 = $query0->num_rows();
    $hasil1 = $query1->num_rows();
    $hasil2 = $query2->num_rows();
    $hasil3 = $query3->num_rows();
    $hasil4 = $query4->num_rows();
    $hasil5 = $query5->num_rows();
    $hasil6 = $query6->num_rows();
    $hasil7 = $query7->num_rows();
    $hasil8 = $query8->num_rows();
    $hasil9 = $query9->num_rows();
    $hasil10 = $query10->num_rows();
    $hasil11 = $query11->num_rows();
    $a = array($hasil0, $hasil1, $hasil2, $hasil3, $hasil4, $hasil5, $hasil6, $hasil7, $hasil8, $hasil9, $hasil10, $hasil11);
    echo array_sum($a);
    return $a;
  }
  function jumlahPasien_baru()
  {
    $query0 =  $this->db->query('SELECT * FROM data_poli_umum WHERE jenis_kunjungan ="Baru"');
    $query1 =  $this->db->query('SELECT * FROM data_poli_ibu WHERE jenisk ="Baru"');
    $query2 =  $this->db->query('SELECT * FROM data_poli_anak WHERE jenisk ="Baru"');
    $query3 =  $this->db->query('SELECT * FROM data_poli_gigi WHERE jenisk ="Baru"');
    $query4 =  $this->db->query('SELECT * FROM data_imunisasi WHERE jenisk ="Baru"');
    $query5 =  $this->db->query('SELECT * FROM data_kabe WHERE jenisk ="Baru"');
    $hasil0 = $query0->num_rows();
    $hasil1 = $query1->num_rows();
    $hasil2 = $query2->num_rows();
    $hasil3 = $query3->num_rows();
    $hasil4 = $query4->num_rows();
    $hasil5 = $query5->num_rows();
    $a = array($hasil0, $hasil1, $hasil2, $hasil3, $hasil4, $hasil5);
    echo array_sum($a);
    return $a;
  }
  function petugas_ubah($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_petugas', $data);
    return TRUE;
  }
  function diagnosa_ubah($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_diagnosa', $data);
    return TRUE;
  }
  function hapus_petugas($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  function hapus_diagnosa($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
