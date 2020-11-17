<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

 <div>
    <a href="<?= base_url('Welcome') ?>" class="btn btn-facebook mb-3"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
  </div> 
  <!-- DataTales Example -->
  <div class="card shadow mb-20">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary ">Data Pasien</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama</th>
              <th scope="col">Nomor Kartu</th>
              <th scope="col">Nama KK</th>
              <th scope="col">Umur</th>
              <th scope="col">Status</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($umum as $p) : ?>
              <tr>
                <td scope="row"><?= $i; ?></td>
                <td><?= $p['tanggal']; ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['no_kartu']; ?></td>
                <td><?= $p['nama_kk']; ?></td>
                <td><?= $p['umur']; ?></td>
                <td><?= $p['status']; ?></td>
                <td><?= $p['alamat']; ?></td>
               
              </tr>
              <?php $i++; ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

