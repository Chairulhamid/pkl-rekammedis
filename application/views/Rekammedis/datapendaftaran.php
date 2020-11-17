<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

  <?php if (validation_errors()) :  ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
    </div>
  <?php endif; ?>
  <!-- hasil sukses -->
  <?= $this->session->flashdata('message'); ?>

  <a href="<?= base_url('rekammedis/f_pendaftaran') ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Kunjungan Pasien</a>

  <!-- DataTales -->
  <div class="card shadow mb-20">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary ">Data Rekam Medis</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama</th>
              <th scope="col">Status Pelayanan</th>
              <th scope="col">Keluhan</th>
              <th scope="col">Tindakan</th>
              <th scope="col">Poli Tujuan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pendaftaran as $p) : ?>
              <tr>
                <td scope="row"><?= $i; ?></td>
                <td><?= $p['tanggal']; ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['status']; ?></td>
                <td><?= $p['keluhan']; ?></td>
                <td class="border-bottom-warning" style="align:center; height:10px"><?= $p['tindakan']; ?></td>
                <td><?= $p['poli_tj']; ?></td>
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