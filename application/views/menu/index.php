<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row ">
    <div class="col-lg-7">
      <!-- hasil sukses -->
      <?= $this->session->flashdata('message'); ?>

      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><i class="fa fa-plus"></i> Tambah Menu Baru</a>

      <table class="table table-hover border text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Menu</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($menu as $m) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $m['menu']; ?></td>
              <td>
                <a href="javascript:;" class="btn btn-info btn-sm" data-id="<?php echo $m['id'] ?>" data-menu="<?php echo $m['menu'] ?>" data-toggle="modal" data-target="#edit-data"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?= base_url('Menu/hapus/' . $m['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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

<!-- Modal tambah menu -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Tambah Menu Baru </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <form action="<?= base_url('menu'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success "><i class="fa fa-paper-plane"></i> Tambah</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal tambah Menu -->

<!-- Modal Ubah Menu -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Edit Menu Manajemen</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('Menu/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Menu</label>
              <input type="hidden" id="id" name="id">
              <input name="menu" id="menu" class="form-control" type="text" required>
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
<!-- END Modal Ubah menu -->

<script>
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      let modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#menu').attr("value", div.data('menu'));

    });
    $("#hapus-data").click(function() {
      $("#delete_item_id").val($('p').get());
      $('#hapus-data').modal('show');
    });
  });
</script>