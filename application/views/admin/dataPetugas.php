<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row justify-content-around">
    <div class="col-lg">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <!-- hasil sukses -->
      <?= $this->session->flashdata('message'); ?>
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#data-petugas"><i class="fa fa-plus"></i> Tambah Petugas Baru</a>

      <table class="table table-hover border text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Petugas</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($namaPetugas as $np) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $np['nik']; ?></td>
              <td><?= $np['nama_petugas']; ?></td>
              <td>
                <a href="javascript:;" class="btn btn-info btn-sm" data-id="<?php echo $np['id'] ?>" data-nik="<?php echo $np['nik'] ?>" data-nama_petugas="<?php echo $np['nama_petugas'] ?>" data-toggle="modal" data-target="#edit-petugas"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?= base_url('Admin/petugas_hapus/' . $np['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Halaman data Petugas -->
<div class="modal fade" id="data-petugas" tabindex="-1" role="dialog" aria-labelledby="data-petugas" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="data-petugas">Tambah Petugas Baru </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <form action="<?= base_url('Admin/data_petugas'); ?>" method="post">
          <div class="modal-body">

            <div class="form-group col-md-12">
              <label for="nik" class="control-label col-xs-1" style="font-weight: bold;">NIP</label>
              <input type="text" name="nik" id="nik" value="" class="form-control" placeholder="Masukan NIK..." required>
            </div>
            <div class="form-group col-md-12">
              <label for="nama_petugas" class="control-label col-xs-1" style="font-weight: bold;">Nama Petugas</label>
              <input type="text" name="nama_petugas" id="nama_petugas" value="" class="form-control" placeholder="Masukan Nama Petugas..." required>
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Tambah</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true" style="float: left;"><i class="fa fa-times"></i> Keluar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Halaman Petugas-->

<!-- Modal Ubah data Petugas -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-petugas" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Edit Data Petugas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('Admin/petugas_ubah') ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">NIP</label>
              <input type="hidden" id="id" name="id">
              <input name="nik" id="nik" class="form-control" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Nama Petugas</label>
              <input name="nama_petugas" id="nama_petugas" class="form-control" type="text" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Modal Ubah data petugas -->

<!-- script halaman welcome-data petugas -->
<script>
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-petugas').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      let modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#nik').attr("value", div.data('nik'));
      modal.find('#nama_petugas').attr("value", div.data('nama_petugas'));

    });
    $("#hapus-data").click(function() {
      $("#delete_item_id").val($('p').get());
      $('#hapus-data').modal('show');
    });
  });
</script>