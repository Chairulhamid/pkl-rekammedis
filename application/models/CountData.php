 <?php

class CountData extends CI_Model
{
  public function countPU()
  {
    $quer = $this->db->query('SELECT * FROM data_poli_umum');
    echo $quer->num_rows();
  }
  public function countPI()
  {
    $quer = $this->db->query('SELECT * FROM data_poli_ibu');
    echo $quer->num_rows();
  }
  public function countPA()
  {
    $quer = $this->db->query('SELECT * FROM data_poli_anak');
    echo $quer->num_rows();
  }
  public function countGG()
  {
    $quer = $this->db->query('SELECT * FROM data_poli_gigi');
    echo $quer->num_rows();
  }
  public function countIM()
  {
    $quer = $this->db->query('SELECT * FROM data_imunisasi');
    echo $quer->num_rows();
  }
  public function countKB()
  {
    $quer = $this->db->query('SELECT * FROM data_kabe');
    echo $quer->num_rows();
  }
  public function countPS()
  {
    $quer = $this->db->query('SELECT * FROM user_pendaftaran');
    echo $quer->num_rows();
  }
  public function countTot()
  {
    $quer = $this->db->query('SELECT * FROM user_pendaftaran');
    echo $quer->num_rows();
  }
  public function countUM()
  {
    $data = "SELECT * FROM user_pendaftaran WHERE status='Umum'";
    $quer = $this->db->query($data);
    echo $quer->num_rows();
  }
  public function countBP()
  {
    $data = "SELECT * FROM user_pendaftaran WHERE status='BPJS'";
    $quer = $this->db->query($data);
    echo $quer->num_rows();
  }

  public function countY()
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
  }
  public function countX()
  {
    $quer1  = $this->db->query('SELECT * FROM data_poli_umum WHERE jenis_kunjungan="Baru" ');
    $quer2  = $this->db->query('SELECT * FROM data_poli_anak WHERE jenisk="Baru" ');
    $quer3  = $this->db->query('SELECT * FROM data_poli_ibu WHERE jenisk="Baru" ');
    $quer4  = $this->db->query('SELECT * FROM data_poli_gigi WHERE jenisk="Baru" ');
    $quer5  = $this->db->query('SELECT * FROM data_imunisasi WHERE jenisk="Baru" ');
    $quer6  = $this->db->query('SELECT * FROM data_kabe WHERE jenisk="Baru" ');
    $hasil  = $quer1->num_rows();
    $hasil2 = $quer2->num_rows();
    $hasil3 = $quer3->num_rows();
    $hasil4 = $quer4->num_rows();
    $hasil5 = $quer5->num_rows();
    $hasil6 = $quer6->num_rows();
    $a = array($hasil, $hasil2, $hasil3, $hasil4, $hasil5, $hasil6);
    echo array_sum($a);
  }
}
