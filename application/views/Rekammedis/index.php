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

  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahPasien"><i class="fa fa-plus"></i> Tambah Pasien Baru</a>

  <?= $this->session->flashdata('notif') ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-20">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary ">Data Pasien</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable">
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
              <th colspan="1">Aksi</th>
              

            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($rekammedis as $rm) : ?>
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
                <td>
                  <a class="btn btn-info" href="" data-id="<?php echo $rm['id'] ?>" data-no_kartu="<?php echo $rm['no_kartu'] ?>" data-status="<?php echo $rm['status'] ?>" data-nama="<?php echo $rm['nama'] ?>" data-tgl_lahir="<?php echo $rm['tgl_lahir'] ?>" data-umur="<?php echo $rm['umur'] ?>" data-j_kelamin="<?php echo $rm['j_kelamin'] ?>" data-nama_kk="<?php echo $rm['nama_kk'] ?>" data-no_hp="<?php echo $rm['no_hp'] ?>" data-alamat="<?php echo $rm['alamat'] ?>" data-toggle="modal" data-target="#edit-data"><i class="fa fa-edit btn-sm" title="Edit"></i></a>
                  <a class="btn btn-danger" href="<?= base_url('rekammedis/hapus/' . $rm['id']) ?>" onclick="return confirm('Anda Yakin ingin Menghapus Data Ini???');"><i class="fa fa-trash btn-sm" title="Edit"></i></a>
                </td>
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

<!-- Modal Ubah rekammedis (INDEX) -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Update Data Pasien</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('rekammedis/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Nomor Kartu</label>
              <input type="hidden" id="id" name="id">
              <input name="no_kartu" id="no_kartu" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Status Pelayanan</label>
              <select name="status" id="status" class="form-control" required>
                <option value=""> --PILIH PELAYANAN-- </option>
                <option value="Umum">Umum</option>
                <option value="BPJS">BPJS</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Nama Pasien</label>
              <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Pasien..." required>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Tanggal Lahir</label>
              <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Umur Pasien</label>
              <input name="umur" id="umur" class="form-control" type="text" required>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Jenis Kelamin</label>
              <select name="j_kelamin" id="j_kelamin" class="form-control" required>
                <option value=""> --Jenis Kelamin-- </option>
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Nama KK</label>
              <input name="nama_kk" id="nama_kk" class="form-control" type="text" placeholder="Nama KK..." required>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label col-xs-3" style="font-weight: bold;">Nomor Handphone</label>
              <input name="no_hp" id="no_hp" class="form-control" type="text" placeholder="No Handphone..." required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group ">
              <label class="control-label col-xs-3" style="font-weight: bold;">Alamat</label>
              <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" required>
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
<!-- END Modal Ubah rekammedis (index) -->

<!--  MODAL Tambah rekammedis (index) -->
<div class="modal fade" id="tambahPasien" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Tambah Data Pasien</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-weight: bold;">x</button>
      </div>
      <form class="form-horizontal" method="post" action="<?= base_url('rekammedis/index'); ?>">
        <div class="modal-body">
          <div class="form-group col-md-12">
            <label for="tanggal" class="control-label col-xs-1" style="font-weight: bold;">Date</label>
            <input type="date" name="tanggal" id="tanggal" value="<?= date('Y-m-d') ?>" class="form-control" required>
          </div>
          <div class="form-row col-md-12">
            <div class=" form-group col-md-6">
              <label for="status" style="font-weight: bold;">Nomor Kartu Pasien</label>
              <input name="no_kartu" class="form-control" type="text" placeholder="Nomor Kartu..." required>
            </div>
            <div class="form-group col-md-6">
              <label for="nama" style="font-weight: bold;">Status Pelayanan</label>
              <select name="status" class="form-control" required>
                <option value="">==PILIH PELAYANAN==</option>
                <option value="Umum">Umum</option>
                <option value="BPJS">BPJS</option>
              </select>
            </div>
          </div>
          <div class="form-row col-md-12">
            <div class=" form-group col-md-6">
              <label for="status" style="font-weight: bold;">Nama Pasien</label>
              <input name="nama" class="form-control" type="text" placeholder="Nama Pasien..." required>
            </div>
            <div class="form-group col-md-6">
              <label for="nama" style="font-weight: bold;">Jenis Kelamin</label>
              <select name="j_kelamin" class="form-control" required>
                <option value="">==PILIH JENIS KELAMIN==</option>
                <option value="laki_laki">laki_laki</option>
                <option value="perempuan">perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-row col-md-12">
            <div class=" form-group col-md-6">
              <label for="status" style="font-weight: bold;">Tanggal Lahir</label>
              <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="nama" style="font-weight: bold;">Umur Pasien</label>
              <input name="umur" class="form-control" type="text" placeholder="Umur Pasien..." required>
            </div>
          </div>
          <div class="form-row col-md-12">
            <div class=" form-group col-md-6">
              <label for="status" style="font-weight: bold;">Nama KK</label>
              <input name="nama_kk" class="form-control" type="text" placeholder="Nama KK..." required>
            </div>
            <div class="form-group col-md-6">
              <label for="nama" style="font-weight: bold;">No Handphone</label>
              <input name="no_hp" class="form-control" type="text" placeholder="No Handphone..." required>
            </div>
          </div>
          <div class="form-row col-md-12">
            <div class=" form-group col-md-6">
              <label for="status" style="font-weight: bold;">Alamat Pasien</label>
              <input name="alamat" class="form-control" type="text" placeholder="Alamat..." required>
            </div>
            <div class="form-group col-md-6">
              <label for="nama" style="font-weight: bold;">Status Tindakan</label>
              <input type="text" id="tindakan" name="tindakan" class="form-control " value="Mengantri" readonly>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="keluhan" style="font-weight: bold;">Keluhan</label>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Keluhan..." required></textarea>
          </div>
          <div class="form-group col-md-12">
            <label class="control-label col-xs-3" style="font-weight: bold;">Poli Tujuan</label>
            <div class="">
              <select name="poli_tj" id="poli_tj" class="form-control" required>
                <option value="">==PILIH POLI TUJUAN==</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Ibu">Poli Ibu</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Pemeriksaan Imunisasi">Pemeriksaan Imunisasi</option>
                <option value="Pemeriksaan KB">Pemeriksaan KB</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success"><i class="fa fa-paper-plane"></i> Simpan</button>
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" style="float: left;"><i class="fa fa-times"></i> Tutup</button>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
<!--END MODAL tambah Rekammedis (INDEX) -->