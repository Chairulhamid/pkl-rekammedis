<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="content-wrapper">
        <selection class="content">
            <?php foreach ($menu as $m) { ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>no kartu</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $m->id ?>">
                        <input type="text" name="no_kartu" class="form-control" value="<?php echo $m->no_kartu ?>">
                    </div>
                    <div class="form-group">
                        <label>Status Pelayanan</label>
                        <input type="text" name="status" class="form-control" value="<?php echo $m->status ?>">
                    </div>
                    <div class="form-group">
                        <label>nama Pasien</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $m->nama ?>">
                    </div>
                    <div class="form-group">
                        <label>tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $m->tgl_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="text" name="umur" class="form-control" value="<?php echo $m->umur ?>">
                    </div>
                    <div class="form-group">
                        <label>jenis Kelamin</label>
                        <input type="text" name="j_kelamin" class="form-control" value="<?php echo $m->j_kelamin ?>">
                    </div>
                    <div class="form-group">
                        <label>nama kk</label>
                        <input type="text" name="nama_kk" class="form-control" value="<?php echo $m->nama_kk ?>">
                    </div>
                    <div class="form-group">
                        <label>no hp</label>
                        <input type="text" name="no_hp" class="form-control" value="<?php echo $m->no_hp ?>">
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $m->alamat ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            <?php } ?>
        </selection>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->