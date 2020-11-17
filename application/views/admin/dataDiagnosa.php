<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row justify-content-around">
    <div class="col-lg">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <!-- hasil sukses -->
      <?= $this->session->flashdata('message'); ?>
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"><i class="fa fa-plus"></i> Tambah Data Diagnosa Baru</a>

      <table class="table table-hover border ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Jenis Penyakit</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($diagnosa as $d) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $d['kode']; ?></td>
              <td><?= $d['jenis_penyakit']; ?></td>
              <td>
                <a href="javascript:;" class="btn btn-info btn-sm" data-id="<?php echo $d['id'] ?>" data-kode="<?php echo $d['kode'] ?>" data-jenis_penyakit="<?php echo $d['jenis_penyakit'] ?>" data-toggle="modal" data-target="#edit-diagnosa"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?= base_url('Admin/diagnosa_hapus/' . $d['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah diagnosa-->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Tambah Diagnosa Baru </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <form action="<?= base_url('Admin/data_diagnosa'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group col-md-12">
              <label for="kode" class="control-label col-xs-1" style="font-weight: bold;">Kode</label>
              <input type="text" name="kode" id="kode" value="" class="form-control" placeholder="Masukan kode..." required>
            </div>
            <div class="form-group col-md-12">
              <label for="jenis_penyakit" class="control-label col-xs-1" style="font-weight: bold;">Jenis Penyakit</label>
              <input type="text" name="jenis_penyakit" id="jenis_penyakit" value="" class="form-control" placeholder="Masukan Jenis Penyakit..." required>
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
<!-- End Modal Tambah Diagnosa -->

<!-- Modal Ubah diagnosa -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-diagnosa" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Edit Data Diagnosa</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('Admin/diagnosa_ubah') ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Kode</label>
              <input type="hidden" id="id" name="id">
              <input name="kode" id="kode" class="form-control" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Jenis Penyakit</label>
              <input name="jenis_penyakit" id="jenis_penyakit" class="form-control" type="text" required>
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
<!-- END Modal Ubah diagnosa -->

<script>
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-diagnosa').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      let modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#kode').attr("value", div.data('kode'));
      modal.find('#jenis_penyakit').attr("value", div.data('jenis_penyakit'));

    });
    $("#hapus-data").click(function() {
      $("#delete_item_id").val($('p').get());
      $('#hapus-data').modal('show');
    });
  });
</script>