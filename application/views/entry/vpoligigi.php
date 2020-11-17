<!-- Begin Page Content -->
<div class="container-fluid text-gray-900">

  <!-- Page Heading -->
  <h1 class="h3 my-5 text-center"><?= $title; ?></h1>


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pasien Poli Gigi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable" cellspacing="0">
          <thead>
            <tr>
              <th colspan="1">No </th>
              <th>No Kartu</th>
              <th>Nama</th>
              <th>Jenis Pelayanan</th>
              <th>Jenis Kelamin</th>
              <th>Umur</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($poliumum as $pu) :
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $pu['no_kartu']; ?></td>
                <td><?= $pu['nama']; ?></td>
                <td><?= $pu['status']; ?></td>
                <td><?= $pu['j_kelamin']; ?></td>
                <td><?= $pu['umur']; ?></td>
                <td><?= $pu['tindakan']; ?></td>
                <td>
                  <a href="<?= base_url('entry/poligigi/' . $pu['id_pendaftaran']) ?>" class="btn btn-primary btn-xs "> Periksa
                  </a>
                </td>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->