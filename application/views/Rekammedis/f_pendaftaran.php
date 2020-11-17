<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if (validation_errors()) :  ?>
        <div class="alert alert-danger " role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <!-- hasil sukses -->
    <?= $this->session->flashdata('message'); ?>

    <div class="row justify-content-around">
        <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;"><?= $title; ?></h3>
    </div>
    <form class="row justify-content-around" action="<?PHP echo base_url(); ?>/rekammedis/add_action" method="post">
        <div class="form-group col-md-8">
            <label for="tanggal" class="control-label col-xs-1" style="font-weight: bold;">Date</label>
            <input type="date" name="tanggal" id="tanggal" value="<?= date('Y-m-d') ?>" class="form-control" required>
        </div>
        <div class="form-group col-md-8">
            <div class="col-xs-6">
                <label for="norm">No. Rekam Medis <small class="text-danger">*</small></label>
                <input type="hidden" id="id" name="id">
                <input type="text" id="no_kartu" name="no_kartu" class="form-control" value="" placeholder="Masukan nomor rekam medis" required />
            </div>
            <div class="col-xs-2">
                <label for="norm" class="col-xs-12">&nbsp;</label><br />
                <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#modal-item" title="Cari No. Rekam Medis"><i class="fa fa-search"></i> Cari No. RM</button></small>
            </div>
        </div>
        <div class="form-row col-md-8">
            <div class=" form-group col-md-6">
                <label for="status" style="font-weight: bold;">Status Pelayanan</label>
                <input type="text" class="form-control" id="status" name="status" value="" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="nama" style="font-weight: bold;">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="" readonly>
            </div>
        </div>
        <div class=" form-row col-md-8">
            <div class="form-group col-md-6">
                <label for="tgl_lahir" style="font-weight: bold;">Tanggal lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="" readonly>
            </div>
            <div class=" form-group col-md-6">
                <label for="umur" style="font-weight: bold;">Umur Pasien</label>
                <input type="text" class="form-control" id="umur" name="umur" value="" readonly>
            </div>
        </div>
        <div class=" form-row col-md-8">
            <div class="form-group col-md-6">
                <label for="tgl_lahir" style="font-weight: bold;">Nama KK</label>
                <input type="text" id="nama_kk" name="nama_kk" class="form-control" value="" readonly>
            </div>
            <div class=" form-group col-md-6">
                <label for="umur" style="font-weight: bold;">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="" readonly>
            </div>
        </div>
        <div class=" form-row col-md-8">
            <div class="form-group col-md-6">
                <label for="j_kelamin" style="font-weight: bold;">Jenis Kelamin</label>
                <input type="text" id="j_kelamin" name="j_kelamin" class="form-control" value="" readonly>
            </div>
            <div class=" form-group col-md-6">
                <label for="keluhan" class="control-label " style="font-weight: bold;">Status Tindakan</label>
                <input type="text" id="tindakan" name="tindakan" class="form-control " value="Mengantri" readonly>
            </div>
        </div>
        <div class="form-group col-md-8">
            <label for="keluhan" style="font-weight: bold;">Keluhan</label>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
        </div>
        <div class="form-group col-md-8">
            <label class="control-label col-xs-3" style="font-weight: bold;">Poli Tujuan</label>
            <div class="">
                <select name="poli_tj" id="poli_tj" class="form-control" required>
                    <option value=""> --PILIH-- </option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Ibu">Poli Ibu</option>
                    <option value="Poli Anak">Poli Anak</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <option value="Pemeriksaan Imunisasi">Pemeriksaan Imunisasi</option>
                    <option value="Pemeriksaan KB">Pemeriksaan KB</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-md-8">
            <div class="col-md-10">
                <button type="submit" name="simpan" class="btn btn-success btn-flat" value="f_pendaftaran">
                    <i class="fa fa-paper-plane"></i> Simpan
                </button>
                <button type="Reset" class="btn btn-secondary btn-flat">
                    <i class="fas fa-ban"></i> Reset</button>
                <a href="<?= site_url('rekammedis/datapendaftaran') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
    </form>

    </html>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal data F_Pendaftaran -->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pencarian No.RM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">

                <table id="table_f_pendaftaran" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.RM</>
                            <th>Status Pelayanan</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama KK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rekammedis as $rm) : ?>
                            <tr>
                                <td><?= $rm['no_kartu']; ?></td>
                                <td><?= $rm['status']; ?></td>
                                <td><?= $rm['nama']; ?></td>
                                <td><?= $rm['tgl_lahir']; ?></td>
                                <td><?= $rm['umur']; ?></td>
                                <td><?= $rm['j_kelamin']; ?></td>
                                <td><?= $rm['nama_kk']; ?></td>
                                <td>
                                    <button class="btn btn-xs btn-info " id="select" data-id="<?php echo $rm['id'] ?>" data-no_kartu="<?php echo $rm['no_kartu'] ?>" data-status="<?php echo $rm['status'] ?>" data-nama="<?php echo $rm['nama'] ?>" data-tgl_lahir="<?php echo $rm['tgl_lahir'] ?>" data-umur="<?php echo $rm['umur'] ?>" data-j_kelamin="<?php echo $rm['j_kelamin'] ?>" data-nama_kk="<?php echo $rm['nama_kk'] ?>" data-alamat="<?php echo $rm['alamat'] ?>">
                                        <i class="fa fa-check"></i>Pilih
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal F_Pendaftaran -->
<!-- SCRIPT PADA MODAL PENCARIAN F PENDAFTARAN -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_f_pendaftaran').DataTable();
    });
</script>