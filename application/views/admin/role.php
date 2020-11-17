<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="col">
    <div class="col-lg-7">

      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('admin/addAkun'); ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Akun</a>

      <table class="table table-hover border text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($akun as $ak) :
          ?>
            <tr>
              <td scope="row"><?= $i++; ?></td>
              <td><?= $ak['email']; ?> </td>
              <td>
                <a href=" <?= base_url('admin/setakun/') . $ak['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Atur</a>
                <a href="<?= base_url('admin/hapusakun/' . $ak['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-lg-7">

      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <!-- hasil sukses -->
      <?= $this->session->flashdata('message'); ?>
      <!-- <a href="javascript:;" class="btn btn-primary mb-3" data-toggle="modal" data-target="#data-role"><i class="fa fa-plus"></i> Tambah Jenis Akses</a> -->

      <table class="table table-hover border">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($role as $r) : ?>
            <tr>
              <td scope="row"><?= $i++; ?></td>
              <td><?= $r['role']; ?> </td>
              <td>
                <a href=" <?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Atur</a>
                <!-- <a href="<?= base_url('admin/hapus/' . $r['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a> -->
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Role Admin -->
<div class="modal fade" id="data-role" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Tambah Hak Akses </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <form action="<?= base_url('admin/role'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Tambah</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true" style="float: left;"><i class="fa fa-times"></i> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Role Admin -->