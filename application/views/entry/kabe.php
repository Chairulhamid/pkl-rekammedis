<!-- Begin Page Content -->
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
        <h5> Waktu Kunjungan</h5>
        <div class="row">
          <div class="col-md-4">
            <input type="date" class="form-control my-1" id="tggl" name="tggl" value="<?= date('Y-m-d') ?>" required>
          </div>
          <div class="col-md-2">
            <input type="time" class="form-control my-1" id="jam" name="jam" value="<?= date("h:i") ?>" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <h5>Identitas Pasien KB</h5>
        <div class="form-row">
          <div class="col-md-4">
            <div>
              <small>Nama </small>
              <input type="text" class="form-control" name="nama">
            </div>
            <div>
              <small>Tanggal Lahir</small>
              <input type="date" class="form-control" id="tggalhr" name="tggalhr" onchange="cnAge()">
            </div>
            <div>
              <small>Umur</small>
              <input type="text" class="form-control" id="umur_" name="umur">
            </div>
            <div>
              <small>Pendidikan</small>
              <input type="text" class="form-control" name="pendidikan">
            </div>
            <div>
              <small>Pekerjaan</small>
              <input type="text" class="form-control" name="pekerjn">
            </div>
            <div>
              <small>Alamat</small>
              <input type="text" class="form-control" name="alamat">
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <small>Nama Suami</small>
              <input type="text" class="form-control" name="nmsuami">
            </div>
            <div>
              <small>Umur</small>
              <input type="text" class="form-control" name="umsuami">
            </div>
            <div>
              <small>Pendidikan</small>
              <input type="text" class="form-control" name="pensuami">
            </div>
            <div>
              <small>Pekerjaan</small>
              <input type="text" class="form-control" name="peksuami">
            </div>
          </div>
          <div class="col-md-4">
            <small>Jumlah Anak</small>
            <input type="text" class="form-control" name="jmlhank">
            <small> Haid Terakir</small>
            <input type="date" class="form-control" name="haidt">

            <small> Riwayat KB</small>
            <div class="form-check">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" id="rw1" name="rwkb" value="Ada">
                <label for="rw1" class="form-check-label">Ada</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" id="rw2" name="rwkb" value="Tidak" checked>
                <label for="rw2" class="form-check-label">Tidak</label>
              </div>
            </div>
            <input type="date" class="form-control" name="rwkb2" id="ada_" hidden>
          </div>
        </div>
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
          <div class="col-md-3">
            <small for="tnggi">Tinggi Badan</small>
            <div class="input-group mb-3">
              <input type="text" class="form-control" learia-describedby="tnggi" name="tnggi" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="tnggi">cm</span>
              </div>
            </div> <br>
          </div>
          <div class="col-md-3">
            <small for="tnggi">Berat Badan</small>
            <div class="input-group mb-3">
              <input type="text" class="form-control" learia-describedby="berat" name="berat" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="berat">kg</span>
              </div>
            </div> <br>
          </div>
          <div class="col-md-3">
            <small for="tnggi">Lingkar Perut</small>
            <div class="input-group mb-3">
              <input type="text" class="form-control" learia-describedby="lper" name="lper" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="lper">cm</span>
              </div>
            </div> <br>
          </div>
          <div class="form-row justify-content-around">
            <div class="col-md-5">
              <small for="tnggi">IMT</small>
              <div class="input-group">
                <input type="text" class="form-control" learia-describedby="imt" name="imt" readonly>
                <div class="input-group-append">
                  <span class="input-group-text" id="imt">kg/m<sup>2</sup></span>
                </div>
              </div> <br>
            </div>
            <div class="col-md-5">
              <small for="tnggi">Suhu</small>
              <div class="input-group">
                <input type="text" class="form-control" learia-describedby="suhu" name="suhu" maxlength="4">
                <div class="input-group-append">
                  <span class="input-group-text" id="suhu">C</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4">

      <!-- Tekanan Darah -->
      <div class="form-group">
        <h5> Tekanan Darah</h5>
        <div class="form-row justify-content-around">
          <div class="col-md-3">
            <small>Sistole</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="sistole" name="sistole" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="sistole">mmHg</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small>Distole</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="distole" name="distole" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="distole">mmHg</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small>Respiratory Rate</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="rrt" name="rrt" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="rrt">/minute</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small> Hearth Rate</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="hrt" name="hrt" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="hrt">bpm</span>
              </div>
            </div>
          </div>
        </div><br>
      </div>
      <hr class="my-4">

      <!-- Labor -->
      <div class="form-group">
        <h5>Pemeriksaan Labor</h5>
        <div class="form-row justify-content-around">
          <div class="col-md-3">
            <small>HB</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="hb" name="hb" maxlength="4">
              <div class="input-group-append">
                <span class="input-group-text" id="hb">g/dL</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small>Urine | Albumin</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="uralbu" name="uralbu" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="uralbu">mg/dL </span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small>Urine | Reduksi</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="urredu" name="urredu" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="urredu">mg/dL </span>
              </div>
            </div>
          </div><br>
        </div>
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
              <option value="Tenaga medis tidak di pilih">- - Pilih Tenaga Medis - - </option>
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
            <input type="submit" value="Batal" id="batal" name="batal" class="btn btn-danger w-100 ">
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
  var ad = document.querySelector("#rw1")
  var td = document.querySelector("#rw2")

  ad.addEventListener("click", shw)
  td.addEventListener("click", hid)

  function shw() {
    var mncl = document.getElementById('ada_');
    mncl.removeAttribute("hidden");
  }

  function hid() {
    var mncl = document.getElementById('ada_');
    mncl.hidden = "true";
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