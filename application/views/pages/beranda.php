<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="judul h3 my-5 text-center text-primary "> SELAMAT DATANG DI APLIKASI REKAM MEDIS PUSKESMAS PADANG LUA</h1>


  <div class="row justify-content-around">
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card bg-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Jumlah Kunjungan Pasien </div>
              <div class="num h5 mb-0 font-weight-bold text-light text-center">
                <?php
                $this->CountData->countTot();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-injured fa-3x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('rekammedis/kunjunganTot') ?>" class="btn rounded-0 bg-primary text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card bg-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Kunjungan Pasien BPJS </div>
              <div class="num h5 mb-0 font-weight-bold text-light text-center">
                <?php
                $this->CountData->countBP();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-card fa-3x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('rekammedis/bpjs') ?>" class="btn rounded-0 bg-primary text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card bg-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Kunjungan Pasien Umum </div>
              <div class="num h5 mb-0 font-weight-bold text-light text-center">
                <?php
                $this->CountData->countUM();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="far fa-address-card fa-3x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('rekammedis/umum') ?>" class="btn rounded-0 bg-primary text-light">Lihat Data</a>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card bg-gradient-primary shadow py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-4">Pasien Baru Bulan Ini </div>
              <div class="num h5 mb-0 font-weight-bold text-light text-center">
                <?php
                $this->CountData->countX();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="far fa-address-card fa-3x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card bg-gradient-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-light text-uppercase mb-4">Pasien Lama Bulan Ini </div>
              <div class="num h5 mb-0 font-weight-bold text-light text-center">
                <?php
                $this->CountData->countY();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="far fa-address-card fa-3x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-4">

  <div class="row justify-content-center">
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Kunjungan Pasien Poli Umum </div>
              <div class="num h5 mb-n1 font-weight-bold text-primary text-center">
                <?php
                $this->CountData->countPU();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataPU'); ?>" class="btn rounded-0 bg-primary text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Kunjungan Pasien Poli Anak </div>
              <div class="num h5 mb-0 font-weight-bold text-info text-center">
                <?php
                $this->CountData->countPA();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataAN'); ?>" class="btn rounded-0 bg-info text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Kunjungan Pasien Poli Ibu </div>
              <div class="num h5 mb-0 font-weight-bold text-danger text-center">
                <?php
                $this->CountData->countPI();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataIB'); ?>" class="btn rounded-0 bg-danger text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kunjungan Pasien Poli Gigi </div>
              <div class="num h5 mb-0 font-weight-bold text-warning text-center">
                <?php
                $this->CountData->countGG();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataGG'); ?>" class="btn rounded-0 bg-warning text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kunjungan Pasien Imunisasi</div>
              <div class="num h5 mb-0 font-weight-bold text-success text-center">
                <?php
                $this->CountData->countIM();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataIM'); ?>" class="btn rounded-0 bg-success text-light">Lihat Data</a>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 my-3">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kunjungan Pasien KB</div>
              <div class="num h5 mb-0 font-weight-bold text-success text-center">
                <?php
                $this->CountData->countKB();
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-3x text-gray-500"></i>
            </div>
          </div>
        </div>
        <a href="<?= base_url('welcome/dataKB'); ?>" class="btn rounded-0 bg-success text-light">Lihat Data</a>
      </div>
    </div>
  </div>


  <br><br><br>
  <br><br><br>
  <br><br><br>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->