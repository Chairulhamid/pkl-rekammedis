
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> CETAK <?= $title; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/bootstrap-select.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/jquery-ui.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/jquery-ui.theme.min.css" rel="stylesheet">
</head>

<body>





  <div class="container-xl">
    <center class="my-5 text-dark">
      <div class="row justify-content-center">
        <div class="mr-4">
          <img src="<?= base_url('assets/img/lpusk.png') ?>" alt="puskesmas" width="180px">
        </div>
        <div class="w-50 my-auto">
          <h3>LAPORAN POLI IMUNISASI</h3>
          <h4 class="border-bottom-dark">REKAM MEDIS PUSKESMAS PADANG LUA </h4>
          <small>Alamat: Jl. Raya Padang Panjang - Bukittinggi No.Km.5, Padang Lua, Kec. Banuhampu, Kabupaten Agam, Sumatera Barat 26181.</small><br>
          <small>Telepon: (0752) 7839180.</small>
        </div>
      </div>
    </center>

    
    <p><?php echo $subtitle ?> <br></p>
    
    <div class="card shadow mb-4">
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data Poli Umum</h6>
      </div> -->
      <div class="card-body">
        <div class="table">
          <table class="display nowrap dataTable dtr-inline table table-bordered table-striped text-center" cellspacing="0">
            <thead>
              <tr>
                <th>No </th>
                <th>No Kartu</th>
                <th>Nama</th>
                <th>Nama KK</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Tanggal Kunjungan</th>
                <td>Alamat</td>
                <td>Diagnosa</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($datafilterU as $pu) :
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  
                  <td><?= $pu->nokartu; ?></td>
                  <td><?= $pu->namaP; ?></td>
                  <td><?= $pu->namakk; ?></td>
                  <td><?= $pu->jeniskel; ?></td>
                  <td><?= $pu->umur; ?></td>
                  <td><?= $pu->tggl; ?></td>
                  <td><?= $pu->alamat; ?></td>
                  <td><?= $pu->diagnosa; ?></td>
                </tr>

              <?php
              endforeach;
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

   <div class="card-body card-block">
            <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Padang Lua, <?php echo date('d M Y')?></label></div>
                
            </div>
            <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label"></label></div>

            </div>
            
            <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label"><?= $user['name']; ?></label></div>
                   </div>
            </div>

          </div>


            </div>
            </div>

              
  <!-- Script -->

  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap-select.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>


  <script>
    window.print();
  </script> 
</body>

</html>