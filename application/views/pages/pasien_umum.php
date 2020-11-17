<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <a href="<?= base_url('Welcome') ?>" class="btn btn-facebook mb-3"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

  <div class="card shadow mb-20">
    <!-- <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary "></h6>
    </div> -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable">
          <thead>
            <tr>
              <th colspan="1">No</th>
              <th colspan="1">No Kartu</th>
              <th colspan="1">Status Pelayanan</th>
              <th colspan="1">Nama</th>
              <th colspan="1">Umur</th>
              <th colspan="1">Jenis Kelamin</th>
              <th colspan="1">Nama KK</th>
              <th colspan="1">No Handphone</th>
              <th colspan="1">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pasienUmum as $rm) : ?>
              <tr>
                <td scope=" row"><?= $i; ?></td>
                <td><?= $rm['no_kartu']; ?></td>
                <td><?= $rm['status']; ?></td>
                <td><?= $rm['nama']; ?></td>
                <td><?= $rm['umur']; ?></td>
                <td><?= $rm['j_kelamin']; ?></td>
                <td><?= $rm['nama_kk']; ?></td>
                <td><?= $rm['no_hp']; ?></td>
                <td><?= $rm['alamat']; ?></td>
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