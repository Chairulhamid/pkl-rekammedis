<?php
class LoadTabel extends CI_Model
{
  public function loadPU()
  {

    $poliUmum = $this->db->query('SELECT * FROM data_poli_umum');
    return $poliUmum->result_array();
  }
  public function loadAN()
  {
    $poliAnak = $this->db->query('SELECT * FROM data_poli_anak');
    return $poliAnak->result_array();
  }
  public function loadIB()
  {
    $poliIbu = $this->db->query('SELECT * FROM data_poli_ibu');
    return $poliIbu->result_array();
  }
  public function loadGG()
  {
    $poligigi = $this->db->query('SELECT * FROM data_poli_gigi');
    return $poligigi->result_array();
  }
  public function loadIM()
  {
    $poliim = $this->db->query('SELECT * FROM data_imunisasi');
    return $poliim->result_array();
  }
  public function loadKB()
  {
    $polikb = $this->db->query('SELECT * FROM data_kabe');
    return $polikb->result_array();
  }


  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
