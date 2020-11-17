<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <a href="<?= base_url('Admin/role') ?>" class="btn btn-facebook mb-3"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

  <div class="col-12 col-md-8">
    <div class="card">
      <div class="card-body">
        <form action="" method="post" accept-charset="utf-8">
          <div class="form-group row">
            <label for="nama_depan" class="col-3 control-label">Nama</label>
            <div class="col-9">
              <input type="text" name="nama" value="<?= $akun['name']; ?>" id="nama" class="form-control" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-3 control-label">Email</label>
            <div class="col-9">
              <input type="text" name="email" value="<?= $akun['email']; ?>" id="email" class="form-control" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="dob" class="col-3 control-label">Hak Akses</label>
            <div class="col-9">
              <select name="roleid" id="roleid" class="form-control">
                <?php
                if ($akun['role_id'] == 1 && $akun['id'] != 1) { ?>
                  <option value="1" selected>Administrator</option>
                  <option value="2">Admin Puskesmas</option>
                  <option value="3">Petugas Puskesmas</option>
                <?php
                } else if ($akun['role_id'] == 2 && $akun['id'] != 1) { ?>
                  <option value="1">Administrator</option>
                  <option value="2" selected>Admin Puskesmas</option>
                  <option value="3">Petugas Puskesmas</option>
                <?php
                } else if ($akun['role_id'] == 3 && $akun['id'] != 1) { ?>
                  <option value="1">Administrator</option>
                  <option value="2">Admin Puskesmas</option>
                  <option value="3" selected>Petugas Puskesmas</option>
                <?php } else { ?>
                  <option value="1">Administrator</option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-dark btn-block">
        </form>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
  let X = document.querySelector('#roleid');
  console.log(X.value);
</script>