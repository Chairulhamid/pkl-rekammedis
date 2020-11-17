<div class="container-fluid text-gray-900">

	<!-- Page Heading -->
	<h1 class="h3 my-5 text-center"><?= $title; ?></h1>

	<!-- Tabel Form -->
	<div class="row flex-lg-column my-4 p-5 border">
		<form method="POST" action="">

			<!--  Data Umum Pasien -->
			<div>
				<div role="form">
					<?php foreach ($pasien as $pu) : ?>
						<div class="tengah row justify-content-around">
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="namakk"> Nama KK </span>
									</div>
									<input type="text" class="form-control" name="namakk" value="<?= $pu->nama_kk; ?>" readonly>
								</div><br>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="nokartu">No Kartu</span>
									</div>
									<input type="text" class="form-control" name="nokartu" value="<?= $pu->no_kartu; ?>" readonly>
								</div> <br>
							</div>
						</div>
						<div class="tengah row my-auto justify-content-between">
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="namaP">Nama</span>
									</div>
									<input type="text" class="form-control" name="namaP" value="<?= $pu->nama; ?>" readonly>
								</div> <br>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="jeniskel">Jenis Kelamin</span>
									</div>
									<input type="text" class="form-control" name="jeniskel" value="<?= $pu->j_kelamin; ?>" readonly>
								</div> <br>
							</div>
							<div class="col-md-2">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="umur">Umur</span>
									</div>
									<input type="text" class="form-control" name="umur" value="<?= $pu->umur; ?>" readonly>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="input-group my-1">
									<div class="input-group-prepend">
										<span class="input-group-text" id="alamat">Alamat</span>
									</div>
									<input type="text" class="form-control" name="alamat" value="<?= $pu->alamat; ?>" readonly>
								</div>
							</div>
						</div>
					<?php endforeach;  ?>
				</div>
			</div>

			<div class="form-group">
				<h5> Jenis Kunjungan</h5>
				<div>
					<div class="custom-control custom-radio">
						<input type="radio" id="baru" name="jenisk" class="custom-control-input" value="Baru" checked>
						<label class="custom-control-label" for="baru">Baru</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="lama" name="jenisk" class="custom-control-input" value="Lama">
						<label class="custom-control-label" for="lama">Lama</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="kasus" name="jenisk" class="custom-control-input" value="Kasus">
						<label class="custom-control-label" for="kasus">Kasus</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<h5>Waktu Kunjungan</h5>
				<div class="row">
					<div class="col-md-4">
						<input type="date" class="form-control my-1" id="tggl" name="tggl" value="<?= date('Y-m-d') ?>" required>
					</div>
					<div class="col-md-2">
						<input type="time" class="form-control my-1" id="jam" name="jam" value="<?= date("h:i") ?>" required>
					</div>
				</div>
			</div>
			<!-- identitas Anak -->
			<div id="idn_" class="form-group">
				<h5>Identitas Anak</h5>
				<div class="form-row">
					<div class="col-md-4">
						<div>
							<small>Nama</small>
							<input type="text" class="form-control" name="nama">
						</div>
						<div>
							<small>Jenis Kelamin</small>
							<div class="form-check">
								<input type="hidden" name="jenkel" value="--">
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" id="jenk1" name="jenkel" value="Laki- Laki">
									<label for="jenk1" class="form-check-label">Laki- Laki</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" id="jenk2" name="jenkel" value="Perempuan">
									<label for="jenk2" class="form-check-label">Perempuan</label>
								</div>
							</div>
						</div>
						<div>
							<small>Tanggal Lahir</small>
							<input type="date" class="form-control" id="tggalhr" name="tggalhr" onchange="cnAge()">
						</div>
						<div>
							<small>Umur</small>
							<input type="text" class="form-control" id="umur_" name="umurP">
						</div>
						<div>
							<small>Alamat</small>
							<input type="text" class="form-control" name="alamatP">
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<small>Nama Ayah</small>
							<input type="text" class="form-control" name="nmayh">
						</div>
						<div>
							<small>Umur</small>
							<input type="text" class="form-control" name="umayh">
						</div>
						<div>
							<small>Pendidikan</small>
							<input type="text" class="form-control" name="penayh">
						</div>
						<div>
							<small>Pekerjaan</small>
							<input type="text" class="form-control" name="pkayh">
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<small>Nama Ibu</small>
							<input type="text" class="form-control" name="nmibu">
						</div>
						<div>
							<small>Umur</small>
							<input type="text" class="form-control" name="umibu">
						</div>
						<div>
							<small>Pendidikan</small>
							<input type="text" class="form-control" name="penibu">
						</div>
						<div>
							<small>Pekerjaan</small>
							<input type="text" class="form-control" name="pkibu">
						</div>

					</div>
				</div>
			</div>

			<div id="lhr_" class="form-group">
				<h5> Pemeriksaan Saat Lahir</h5>
				<div class="form-row mb-3">
					<div class="col-md-6">
						<div>
							<small>Berat Badan</small>
							<div class="input-group col-md-5">
								<input type="text" class="form-control" maxlength="4" name="bbdn_a">
								<div class="input-group-append">
									<span class="input-group-text">gram</span>
								</div>
							</div>
						</div>
						<div>
							<small>Proses Lahir</small>
							<div class="form-check">
								<input type="hidden" name="prol" value="--">
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="prol" id="prol" value="Lancar">
									<label class="form-check-label" for="prol">Lancar</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="prol" id="prol2" value="Sulit">
									<label class="form-check-label" for="prol2">Sulit</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="prol" id="prol3" value="Lama">
									<label class="form-check-label" for="prol3">Lama</label>
								</div>
							</div>
						</div>
						<div>
							<small> Letak Janin</small>
							<div class="form-check">
								<input type="hidden" name="letjan" value="--">
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="letjan" id="letjan" value="Kepala">
									<label class="form-check-label" for="letjan">Kepala</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="letjan" id="letjan1" value="Sunsang">
									<label class="form-check-label" for="letjan1">Sunsang</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="letjan" id="letjan2" value="Tidak Tahu">
									<label class="form-check-label" for="letjan2">Tidak Tahu</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<small> Keadaan Lahir</small>
							<div class="form-check">
								<div class="form-check-inline">
									<input type="hidden" name="klahir" value="--">
									<input class="mr-1" type="checkbox" id="klahir" name="klahir" value="Cukup Bulan">
									<label class="form-check-label" for="klahir">Cukup Bulan</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="klahir1" name="klahir" value="Kurang Bulan">
									<label class="form-check-label" for="klahir1">Kurang Bulan</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="klahir2" name="klahir" value="Tidak Tahu">
									<label class="form-check-label" for="klahir2">Tidak Tahu</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="klahir3" name="klahir" value="Lahir Tunggal">
									<label class="form-check-label" for="klahir3">Lahir Tunggal</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="klahir4" name="klahir" value="Lahir Kembar">
									<label class="form-check-label" for="klahir4">Lahir Kembar</label>
								</div>
							</div>
						</div>
						<div>
							<small> Kondisi Bayi</small>
							<div class="form-check">
								<input type="hidden" name="konbay" value="--">
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay" name="konbay" value="Menangis Spontan">
									<label class="form-check-label" for="konbay">Menangis Spontan</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay1" name="konbay" value="Kulit Kemerahan">
									<label class="form-check-label" for="konbay1">Kulit Kemerahan</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay2" name="konbay" value="Tidak Menangis">
									<label class="form-check-label" for="konbay2">Tidak Menangis</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay3" name="konbay" value="Bibir,kuku,kulit Biru">
									<label class="form-check-label" for="konbay3">Bibir,kuku,kulit Biru</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay4" name="konbay" value="Tidak Ada Gerakan">
									<label class="form-check-label" for="konbay4">Tidak Ada Gerakan</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="konbay5" name="konbay" value="Cacat Bawaan">
									<label class="form-check-label" for="konbay5">Cacat Bawaan</label>
								</div>
							</div>
						</div>
						<div class="mt-2">
							<small>Kesimpulan Pemeriksaan</small>
							<br>
							<div class="form-check">
								<input type="hidden" name="kesimpulanby" value="--">
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="kesimpulanby" id="kesimpulanby1" value="Sehat">
									<label for="kesimpulanby1" class="form-check-label">Sehat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="kesimpulanby" id="kesimpulanby2" value="Tidak Sehat">
									<label for="kesimpulanby2" class="form-check-label">Tidak Sehat</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>

			<div id="per_" class="form-group">
				<div>
					<h5>Pemeriksaan perintal ( 0 -7 )</h5>
					<div class="form-row mb-3">
						<div class="col-md-6">
							<div>
								<small>Berat Badan</small>
								<div class="input-group col-md-5">
									<input type="text" class="form-control" maxlength="4" name="bbdn_b">
									<div class="input-group-append">
										<span class="input-group-text">gram</span>
									</div>
								</div>
							</div>
							<div>
								<small>Pernapasan</small>
								<div class="input-group col-md-5">
									<input type="text" class="form-control" maxlength="4" name="penap">
									<div class="input-group-append">
										<span class="input-group-text">/minute</span>
									</div>
								</div>
							</div>
							<div>
								<small>Konsumsi ASI</small>
								<div class="form-check">
									<input type="hidden" name="konasi" value="--">
									<div class="form-check form-check-inline">
										<input class="mr-1" type="radio" name="konasi" id="konasi" value="Baik">
										<label class="form-check-label" for="konasi">Baik</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="mr-1" type="radio" name="konasi" id="konasi2" value="Lemah">
										<label class="form-check-label" for="konasi2">Lemah</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="mr-1" type="radio" name="prol" id="konasi3" value="Tidak Mau">
										<label class="form-check-label" for="konasi3">Tidak Mau</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<small>Gejala</small>
								<div class="form-check">
									<input type="hidden" name="gejala" value="--">
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala" name="gejala" value="Tubuh Dingin">
										<label class="form-check-label" for="gejala">Tubuh Dingin</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala1" name="gejala" value="Panas Tinggi">
										<label class="form-check-label" for="gejala1">Panas Tinggi</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala2" name="gejala" value="Sukar Nafas">
										<label class="form-check-label" for="gejala2">Sukar Nafas</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala3" name="gejala" value="Tubuh Kuning">
										<label class="form-check-label" for="gejala3">Tubuh Kuning</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala4" name="gejala" value="Lahir Kembar">
										<label class="form-check-label" for="gejala4">Merintih, Lemah</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala5" name="gejala" value="Lahir Kembar">
										<label class="form-check-label" for="gejala5">Perut Buncit</label>
									</div>
									<div class="form-check-inline">
										<input class="mr-1" type="checkbox" id="gejala6" name="gejala" value="Lahir Kembar">
										<label class="form-check-label" for="gejala6">Gg B.A.B</label>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<small>Kesimpulan Pemeriksaan</small>
								<br>
								<div class="form-check">
									<input type="hidden" name="kesimpulan" value="--">
									<div class="form-check form-check-inline">
										<input class="mr-1" type="radio" name="kesimpulan" id="kesimpulan1" value="Sehat">
										<label for="kesimpulan1" class="form-check-label">Sehat</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="mr-1" type="radio" name="kesimpulan" id="kesimpulan2" value="Tidak Sehat">
										<label for="kesimpulan2" class="form-check-label">Tidak Sehat</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>

			<div id="neo_" class="form-group">
				<h5>Pemeriksaan Neonatal Lanjut</h5>
				<div class="form-row mb-3">
					<div class="col-md-6">
						<div>
							<small>Berat Badan</small>
							<div class="input-group col-md-5">
								<input type="text" class="form-control" maxlength="4" name="bbdn_c">
								<div class="input-group-append">
									<span class="input-group-text">gram</span>
								</div>
							</div>
							<input type="hidden" name="ketbb" value="--">
							<div class="form-check form-check-inline mt-2">
								<input class="mr-1" type="radio" name="ketbb" id="ketbb" value="BB Baik">
								<label for="ketbb" class="form-check-label">BB Baik</label>
							</div>
							<div class="form-check form-check-inline mt-2">
								<input class="mr-1" type="radio" name="ketbb" id="ketbb1" value="BB Buruk">
								<label for="ketbb1" class="form-check-label">BB Buruk</label>
							</div>
						</div>
						<div class="mt-2">
							<small>Diberi Imunisasi</small>
							<br>
							<input type="hidden" name="dimun" value="--">
							<div class="form-check form-check-inline">
								<input class="mr-1" type="radio" name="dimun" id="dimun1" value="BCG">
								<label for="dimun1" class="form-check-label">BCG</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="mr-1" type="radio" name="dimun" id="dimun2" value="Hepavac">
								<label for="dimun2" class="form-check-label">Hepavac</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="mr-1" type="radio" name="pdai" id="dimun3" value="OPV 0">
								<label for="dimun3" class="form-check-label">OPV 0</label>
							</div>
						</div>
						<div>
							<small>Pernapasan</small>
							<div class="input-group col-md-5">
								<input type="text" class="form-control" maxlength="4" name="pernap">
								<div class="input-group-append">
									<span class="input-group-text">/minute</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<small>Gejala</small>
							<div class="form-check">
								<input type="hidden" name="gejalan" value="--">
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan" name="gejalan" value="Sesak & Batuk">
									<label class="form-check-label" for="gejalan">Sesak & Batuk</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan1" name="gejalan" value="Tubuh Dingin">
									<label class="form-check-label" for="gejalan1">Tubuh Dingin</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan2" name="gejalan" value="Tidak Menangis">
									<label class="form-check-label" for="gejalan2">Tidak Menangis</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan3" name="gejalan" value="Mencret">
									<label class="form-check-label" for="gejalan3">Mencret</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan4" name="gejalan" value="Panas Tinggi">
									<label class="form-check-label" for="gejalan4">Panas Tinggi</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan5" name="gejalan" value="Kuning">
									<label class="form-check-label" for="gejalan5">Kuning</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan6" name="gejalan" value="Kejang-Kejang">
									<label class="form-check-label" for="gejalan6">Kejang-Kejang</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="gejalan7" name="gejalan" value="Cacat Bawaan">
									<label class="form-check-label" for="gejalan7">Cacat Bawaan</label>
								</div>
							</div>
						</div>
						<div>
							<small>Makanan Bayi</small>
							<input type="hidden" name="makanbayi" value="--">
							<div class="form-check">
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="makanbayi" name="makanbayi" value="ASI">
									<label class="form-check-label" for="makanbayi">ASI</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="makanbayi1" name="makanbayi" value="Formula">
									<label class="form-check-label" for="makanbayi1">Formula</label>
								</div>
								<div class="form-check-inline">
									<input class="mr-1" type="checkbox" id="makanbayi2" name="makanbayi" value="Makanan Lembek">
									<label class="form-check-label" for="makanbayi2">Makanan Lembek</label>
								</div>
							</div>
						</div>
						<div class="mt-2">
							<small>Kesimpulan Pemeriksaan</small>
							<br>
							<input type="hidden" name="kesimpulanneo" value="--">
							<div class="form-check">
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="kesimpulanneo" id="kesimpulanneo1" value="Sehat">
									<label for="kesimpulanneo1" class="form-check-label">Sehat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="mr-1" type="radio" name="kesimpulanneo" id="kesimpulanneo2" value="Tidak Sehat">
									<label for="kesimpulanneo2" class="form-check-label">Tidak Sehat</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>

			<div class="form-group">
				<h5> Keluhan / Anamnesa </h5>
				<textarea class="form-control" rows="3" name="keluhan"></textarea>
			</div>
			<hr class="my-4">

			<!-- Pemeriksaan Fisik -->
			<div class="form-group">
				<h5 class="mb-3">Pemeriksaan Fisik </h5>
				<div class="form-row justify-content-around">
					<div class="col-md-4">
						<small for="tnggi">Berat Badan</small>
						<div class="input-group mb-3">
							<input type="text" class="form-control" learia-describedby="berat" name="berat">
							<div class="input-group-append">
								<span class="input-group-text" id="berat">kg</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<small for="tnggi">Suhu</small>
						<div class="input-group">
							<input type="text" class="form-control" learia-describedby="suhu" name="suhu">
							<div class="input-group-append">
								<span class="input-group-text" id="suhu">C</span>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>

			<!-- Tekanan Darah -->
			<div class="form-group">
				<h5> Tekanan Darah</h5>
				<div class="form-row justify-content-around">
					<div class="col-md-3">
						<small>Respiratory Rate</small>
						<div class="input-group">
							<input type="text" class="form-control" aria-describedby="rrt" name="rrt">
							<div class="input-group-append">
								<span class="input-group-text" id="rrt">/minute</span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<small> Hearth Rate</small>
						<div class="input-group">
							<input type="text" class="form-control" aria-describedby="hrt" name="hrt">
							<div class="input-group-append">
								<span class="input-group-text" id="hrt">bpm</span>
							</div>
						</div>
					</div>
				</div><br>
			</div>
			<hr class="my-4">

			<!-- Diagnosa -->
			<div class="form-group">
				<h5>Diagnosa</h5>
				<div class="form-row justify-content-center">
					<div class="col-md">
						<small class="note"> *ketik di kolom untuk mencari </small>
						<select class="form-control selectpicker" data-style="border-dark" data-live-search="true" name="diagnosa">
							<option value="Diagnosa tidak di pilih">- - Pilih Diagnosa - - </option>
							<option value="Sehat"> Sehat </option>
							<?php $item = $this->loadinput->getdiagnosa(); ?>
							<?php foreach ($item as $itm) : ?>
								<option value="<?= $itm['jenis_penyakit'] ?>"> <?= $itm['jenis_penyakit']; ?> </option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<h5> Pengobatan </h5>
				<textarea class="form-control" rows="3" name="pengo"></textarea>
			</div>

			<div class="form-group">
				<h5> Konseling </h5>
				<textarea class="form-control" rows="3" name="konsl"></textarea>
			</div>

			<div class="form-group">
				<h5>Di Rujuk</h5>
				<div class="custom-control custom-radio">
					<input type="radio" id="ya" name="rujuk" class="custom-control-input" value="Ya">
					<label class="custom-control-label" for="ya">Ya</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="tdk" name="rujuk" class="custom-control-input" value="Tidak" checked>
					<label class="custom-control-label" for="tdk">Tidak</label>
				</div>
			</div>

			<!-- Tenaga Medis -->
			<div class="form-group">
				<h5>Tenaga Medis</h5>
				<div class="form-row justify-content-center">
					<div class="col-md ">
						<select class="form-control selectpicker" data-style="border-dark" data-live-search="true" name="tenagam">
							<option value="Tenaga Medis Tidak Dipilih ">- - Pilih Tenaga Medis - - </option>
							<?php $list = $this->loadinput->getPetugas(); ?>
							<?php foreach ($list as $ptgs) : ?>
								<option value="<?= $ptgs['nama_petugas'] ?>"> <?= $ptgs['nama_petugas']; ?> </option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>

			<hr class="my-4">
			<!-- Button Simpan & Batal -->
			<div class="form-group">
				<div class="form-row justify-content-center">
					<div class="col-md-4 mb-3">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary w-100">
					</div>
					<div class="col-md-4">
						<input type="submit" value="Batal" name="batal" id="batal" class="btn btn-danger w-100 ">
					</div>
				</div>
			</div>
		</form>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script type="text/javascript">
	const x1 = document.querySelector("#baru");
	const x2 = document.querySelector("#lama");
	const x3 = document.querySelector("#kasus");

	x1.addEventListener("click", shwx)
	x2.addEventListener("click", hidx)
	x3.addEventListener("click", hidx)

	function shwx() {
		let a = document.getElementById('idn_');
		let b = document.getElementById('lhr_');
		let c = document.getElementById('per_');
		let d = document.getElementById('neo_');
		a.removeAttribute("hidden");
		b.removeAttribute("hidden");
		c.removeAttribute("hidden");
		d.removeAttribute("hidden");
	}

	function hidx() {
		let a = document.getElementById('idn_');
		let b = document.getElementById('lhr_');
		let c = document.getElementById('per_');
		let d = document.getElementById('neo_');
		a.hidden = "true";
		b.hidden = "true";
		c.hidden = "true";
		d.hidden = "true";
	}
</script>

<script type="text/javascript">
	function cnAge() {
		var baru = document.getElementById("tggalhr").value;
		var today = "";
		var tlahir = +new Date(baru);
		today = ((Date.now() - tlahir) / (31557600000));
		var age = today.toFixed(0);
		document.getElementById('umur_').value = age;
	}
</script>

<script>
	const batal = document.querySelector('#batal');
	batal.addEventListener('click', remv);

	function remv() {
		const tanggal = document.getElementById('tggl');
		const jam = document.getElementById('jam');
		tanggal.removeAttribute("required");
		jam.removeAttribute("required");
	};
</script>