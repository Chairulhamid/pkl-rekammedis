<?php

class Laporan_anak extends CI_Model
{

   
	function gettahun(){

		$query = $this->db->query("SELECT YEAR(tggl) AS tahun FROM data_poli_anak GROUP BY YEAR(tggl) ORDER BY YEAR(tggl) ASC");

		return $query->result();

	}

	function filterbytanggal($tanggalawal,$tanggalakhir){

		$query = $this->db->query("SELECT * from data_poli_anak where tggl BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tggl ASC ");

		return $query->result();
	}

	function filterbybulan($tahun1,$bulanawal,$bulanakhir){

		$query = $this->db->query("SELECT * from data_poli_anak where YEAR(tggl) = '$tahun1' and MONTH(tggl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tggl ASC ");

		return $query->result();
	}

	function filterbytahun($tahun2){

		$query = $this->db->query("SELECT * from data_poli_anak where YEAR(tggl) = '$tahun2'  ORDER BY tggl ASC ");

		return $query->result();
	} 
}