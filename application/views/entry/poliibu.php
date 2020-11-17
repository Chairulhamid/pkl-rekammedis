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

      <!-- identitas ibu -->
      <div id="id_" class="form-group">
        <h5>Identitas Ibu</h5>
        <div class="form-row justify-content-around">
          <div class="col-md-5">
            <div>
              <small>Nama</small>
              <input type="text" class="form-control" name="namaib" id="ibu1">
            </div>
            <div>
              <small>Umur</small>
              <input type="text" class="form-control" name="umurib" id="ibu2">
            </div>
            <div>
              <small>Alamat</small>
              <input type="text" class="form-control" name="alamatib" id="ibu3">
            </div>
            <div>
              <small>Pekerjaan</small>
              <input type="text" class="form-control" name="kerjib" id="ibu4">
            </div>
          </div>
          <div class="col-md-5">
            <div>
              <small>Nama Suami</small>
              <input type="text" class="form-control" name="namas" id="s1">
            </div>
            <div>
              <small>Umur</small>
              <input type="text" class="form-control" name="umurs" id="s2">
            </div>
            <div>
              <small>Pekerjaan</small>
              <input type="text" class="form-control" name="kerjs" id="s3">
            </div>

          </div>
        </div>
      </div>

      <!-- gpa -->
      <div id="gpa_" class="form-group">
        <div class="from-row">
          <div class="input-group my-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default"> G </span>
            </div>
            <input type="text" class="form-control" name="G">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default"> P </span>
            </div>
            <input type="text" class="form-control" name="P">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default"> A </span>
            </div>
            <input type="text" class="form-control" name="A">
          </div>
        </div>
        <hr class="my-4">
      </div>

      <!-- riwayat kehamilan -->
      <div id="rw_" class="form-group">
        <h5>Status Kehamilan</h5>
        <div class="form-row justify-content-center">
          <div class="col-md-4">
            <small>Haid Terakir</small>
            <input type="date" class="form-control" name="haid">
          </div>
          <div class="col-md-4">
            <small>Perkiraan Partus</small>
            <input type="date" class="form-control" name="partus">
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
              <input type="text" class="form-control" maxlength="3" id="tgi" learia-describedby="tnggi" name="tnggi" onkeyup="sum();">
              <div class="input-group-append">
                <span class="input-group-text" id="tnggi">cm</span>
              </div>
            </div> <br>
          </div>
          <div class="col-md-3">
            <small for="tnggi">Berat Badan</small>
            <div class="input-group mb-3">
              <input type="text" class="form-control" maxlength="3" id="bb" learia-describedby="berat" name="berat" onkeyup="sum();">
              <div class="input-group-append">
                <span class="input-group-text" id="berat">kg</span>
              </div>
            </div> <br>
          </div>
          <div class="col-md-3">
            <small for="tnggi">Lingkar Lengan</small>
            <div class="input-group mb-3">
              <input type="text" class="form-control" maxlength="3" learia-describedby="lper" name="lper">
              <div class="input-group-append">
                <span class="input-group-text" id="lper">cm</span>
              </div>
            </div> <br>
          </div>
          <div class="form-row justify-content-around">
            <div class="col-md-5">
              <small for="tnggi">IMT</small>
              <div class="input-group">
                <input type="text" class="form-control" maxlength="3" id="imt" learia-describedby="imt" name="imt" readonly>
                <div class="input-group-append">
                  <span class="input-group-text" id="imt">kg/m<sup>2</sup></span>
                </div>
              </div> <br>
            </div>
            <div class="col-md-5">
              <small for="tnggi">Suhu</small>
              <div class="input-group">
                <input type="text" class="form-control" maxlength="2" learia-describedby="suhu" name="suhu">
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
              <input type="text" class="form-control" aria-describedby="distole" name="distole" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="distole">mmHg</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small>Respiratory Rate</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="rrt" name="rrt" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="rrt">/minute</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <small> Hearth Rate</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="hrt" name="hrt" maxlength="3">
              <div class="input-group-append">
                <span class="input-group-text" id="hrt">bpm</span>
              </div>
            </div>
          </div>
        </div><br>
      </div>
      <hr class="my-4">

      <!-- Kebidanan -->
      <div class="form-group">
        <h5> Kebidanan</h5>
        <div class="form-row my-3">
          <div class="col-md-4">
            <div class="mb-2">
              <small>Tinggi Fundus Uteri</small>
              <br>
              <input type="hidden" name="tdf" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="tdf" id="tdf1" value="Sesuai Kurva">
                <label for="tdf1" class="form-check-label">Sesuai Kurva</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="tdf" id="tdf2" value="Tidak Sesuai Kurva">
                <label for="tdf2" class="form-check-label">Tidak Sesuai Kurva</label>
              </div>
            </div>
            <div class="mb-2">
              <small>Bentuk Uterus</small>
              <br>
              <input type="hidden" name="butrs" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="butrs" id="butrs1" value="Normal">
                <label for="butrs1" class="form-check-label">Normal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="butrs" id="butrs2" value="Kelainan">
                <label for="butrs2" class="form-check-label">Kelainan</label>
              </div>
            </div>
            <div>
              <small>Detak Jantung Janin</small>
              <div class="input-group">
                <input type="text" class="form-control" aria-describedby="djk" name="djk">
                <div class="input-group-append">
                  <span class="input-group-text" id="djk">/Menit</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-2">
              <small>Letak Janin</small>
              <br>
              <input type="hidden" name="letakj" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="letakj" id="letakj1" value="Kepala">
                <label for="letakj1" class="form-check-label">Kepala</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="letakj" id="letakj2" value="Lintang">
                <label for="letakj2" class="form-check-label">Lintang</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="letakj" id="letakj3" value="Sunsang">
                <label for="letakj3" class="form-check-label">Sunsang</label>
              </div>
            </div>
            <div class="mb-2">
              <small>Pemeriksaan Dalam Atas Indikasi</small>
              <br>
              <input type="hidden" name="pdai" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="pdai" id="pdai1" value="Panggul Normal">
                <label for="pdai1" class="form-check-label">Panggul Normal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="pdai" id="pdai2" value="Panggul Sempit">
                <label for="pdai2" class="form-check-label">Panggul Sempit</label>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-2">
              <small>Gerak Janin</small>
              <br>
              <input type="hidden" name="gerj" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="gerj" id="gerj1" value="Aktif">
                <label for="gerj1" class="form-check-label">Aktif</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="gerj" id="gerj2" value="Jarang">
                <label for="gerj2" class="form-check-label">Jarang</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="gerj" id="gerj3" value="Tidak Ada">
                <label for="gerj3" class="form-check-label">Tidak Ada</label>
              </div>
            </div>
            <div class="mb-2">
              <small>Inspekulo</small>
              <br>
              <input type="hidden" name="insp" value="--">
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="insp" id="insp1" value="Normal">
                <label for="insp1" class="form-check-label">Normal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="insp" id="insp2" value="Tomorica Cervix">
                <label for="insp2" class="form-check-label">Tomorica Cervix</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="mr-1" type="radio" name="insp" id="insp3" value="Vagintis/Corvitis">
                <label for="insp3" class="form-check-label">Vagintis/Corvitis</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4">

      <!-- Labor -->
      <div class="form-group">
        <h5>Pemeriksaan Labor</h5>
        <div class="form-row justify-content-around">
          <div class="col-md-3">
            <small>HB</small>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="hb" name="hb" maxlength="3">
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
  function sum() {
    var tinggi = document.getElementById('tgi').value;
    var bert = document.getElementById('bb').value;
    var imt_ = parseInt(bert) / ((parseInt(tinggi) * 2) / 100);
    var num = imt_.toFixed(2);
    if (!isNaN(num)) {
      document.getElementById('imt').value = num;
    }
  }
</script>

<script type="text/javascript">
  var x1 = document.querySelector("#lama");
  var x2 = document.querySelector("#kasus")
  var x3 = document.querySelector("#baru")
  x1.addEventListener("click", hidex)
  x2.addEventListener("click", hidex)
  x3.addEventListener("click", shwx)

  function hidex() {
    var x = document.getElementById("id_")
    x.hidden = "true"
    var y = document.getElementById("gpa_")
    y.hidden = "true"
    var z = document.getElementById("rw_")
    z.hidden = "true"
  }

  function shwx() {
    var x = document.getElementById("id_")
    x.removeAttribute("hidden")
    var y = document.getElementById("gpa_")
    y.removeAttribute("hidden")
    var z = document.getElementById("rw_")
    z.removeAttribute("hidden")
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