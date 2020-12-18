<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-12">
      <?php if (validation_errors()) :  ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>
      <!-- hasil sukses -->
      <?= $this->session->flashdata('message'); ?>
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"><i class="fa fa-plus"></i> Tambah Sub Menu Baru</a>
      <table class="table table-hover border text-center display nowrap dataTable dtr-inline  text-center "   >
       <!-- <table class="table table-hover display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0" style="text-align:center"> -->
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Menu</th>
            <th>Url</th>
            <th>Icon</th>
            <th>Active</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($subMenu as $sm) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $sm['title']; ?></td>
              <td><?= $sm['menu']; ?></td>
              <td><?= $sm['url']; ?></td>
              <td><?= $sm['icon']; ?></td>
              <td><?= $sm['is_active']; ?></td>
              <td>
                <a href="javascript:;" class="btn btn-info " data-id="<?php echo $sm['id'] ?>" data-title="<?php echo $sm['title'] ?>" data-menu="<?php echo $sm['menu'] ?>" data-url="<?php echo $sm['url'] ?>" data-icon="<?php echo $sm['icon'] ?>" data-is_active="<?php echo $sm['is_active'] ?>" data-toggle="modal" data-target="#edit-data"><i class="fa fa-edit" title="Edit"></i></a>
                <a href="<?= base_url('Menu/subHapus/' . $sm['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger "><i class="fa fa-trash" title="Hapus"></i></a>
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
<!-- Modal subMenu -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Tambah Sub Menu Baru </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <form action="<?= base_url('menu/submenu'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">==PILIH MENU== </option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                  Active?
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Tambah</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true" style="float: left;"><i class="fa fa-times"></i> Keluar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal SubMenu -->

<!-- Modal Ubah SubMenu -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Edit Menu Manajemen</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('Menu/subUbah') ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Sub Menu Title</label>
              <input type="hidden" id="id" name="id">
              <input name="title" id="title" class="form-control" type="text" required>
            </div>
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Menu</label>
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">==PILIH MENU== </option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">URL</label>
              <input name="url" id="url" class="form-control" type="text" required>
            </div>
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Icon</label>
              <input name="icon" id="icon" class="form-control" type="text" required>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
              <label class="form-check-label" for="is_active">
                Active?
              </label>
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
<!-- END Modal Ubah SubMenu -->

<script>
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      let modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#title').attr("value", div.data('title'));
      modal.find('#menu_id').attr("value", div.data('menu'));
      modal.find('#url').attr("value", div.data('url'));
      modal.find('#icon').attr("value", div.data('icon'));
      modal.find('#is_active').attr("value", div.data('is_active'));

    });
    $("#hapus-data").click(function() {
      $("#delete_item_id").val($('p').get());
      $('#hapus-data').modal('show');
    });
  });
</script>