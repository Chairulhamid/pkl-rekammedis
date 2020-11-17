<?php

class Laporan_umum extends CI_Model
{

   
	function gettahun(){

		$query = $this->db->query("SELECT YEAR(tanggal_pu) AS tahun FROM data_poli_umum GROUP BY YEAR(tanggal_pu) ORDER BY YEAR(tanggal_pu) ASC");

		return $query->result();

	}

	function filterbytanggal($tanggalawal,$tanggalakhir){

		$query = $this->db->query("SELECT * from data_poli_umum where tanggal_pu BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal_pu ASC ");

		return $query->result();
	}

	function filterbybulan($tahun1,$bulanawal,$bulanakhir){

		$query = $this->db->query("SELECT * from data_poli_umum where YEAR(tanggal_pu) = '$tahun1' and MONTH(tanggal_pu) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal_pu ASC ");

		return $query->result();
	}

	function filterbytahun($tahun2){

		$query = $this->db->query("SELECT * from data_poli_umum where YEAR(tanggal_pu) = '$tahun2'  ORDER BY tanggal_pu ASC ");

		return $query->result();
	} 
}