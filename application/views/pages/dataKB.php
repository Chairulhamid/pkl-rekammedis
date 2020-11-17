<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-dark"><?= $title; ?></h1>

  <div>
    <a href="<?= base_url('Welcome') ?>" class="btn btn-facebook mb-3"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
    <a href="<?= base_url('Welcome/b_printKB') ?>" class="btn btn-danger mb-3" target="blank"><i class="fas fa-print"></i> Print</a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-center">Data KB </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display nowrap dataTable dtr-inline table table-bordered table-striped text-center" id="dataTable" cellspacing="0">
          <thead>
            <tr>
              <th>No </th>
              <th>No Kartu</th>
              <th>Nama</th>
              <th>Nama KK</th>
              <th>Jenis Kelamin</th>
              <th>Umur</th>
              <th>Tanggal Kunjungan</th>
              <td>Alamat</td>
              <td>Aksi Data</td>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($dataKB as $pu) :
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $pu['nokartu']; ?></td>
                <td><?= $pu['namaP']; ?></td>
                <td><?= $pu['namakk']; ?></td>
                <td><?= $pu['jeniskel']; ?></td>
                <td><?= $pu['umurP']; ?></td>
                <td><?= $pu['tggl']; ?></td>
                <td><?= $pu['alamatP']; ?></td>
                <td>
                  <a href="javascript:;" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg" data-namakk="<?= $pu['namakk']; ?>" data-nokartu="<?= $pu['nokartu']; ?>" data-nama="<?= $pu['namaP']; ?>" data-kelamin="<?= $pu['jeniskel']; ?>" data-umur="<?= $pu['umurP']; ?>" data-alamat="<?= $pu['alamatP']; ?>" data-jenisk="<?= $pu['jenisk']; ?>" data-keluhan="<?= $pu['keluhan']; ?>" data-diagnosa="<?= $pu['diagnosa']; ?>" data-pengobatan="<?= $pu['pengo']; ?>" data-konsul="<?= $pu['konsl']; ?>" data-petugas="<?= $pu['tenagam']; ?>"><i class="fas fa-search"></i></a>
                  <a href="javascript:;" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm" data-nama="<?= $pu['namaP']; ?>" data-href="<?= base_url('Welcome/hapusKB/' . $pu['id']) ?>"><i class="fa fa-trash"></i></a>
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


  <!-- Modal Hapus -->
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="hapus">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data <span id="nama"></span> ..??</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger text-light btn-ok">Hapus</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Lihat -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="lihat">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-info" id="exampleModalCenterTitle">Data <span id="jdl"></span></h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- form -->
          <form class="p-4 border">

            <div class="form-group tengah row justify-content-center">
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="namakk"> Nama KK </span>
                  </div>
                  <input type="text" class="form-control" name="namakk" id="nkk" readonly>
                </div><br>
              </div>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="nokartu">No Kartu</span>
                  </div>
                  <input type="text" class="form-control" name="nokartu" id="nok" readonly>
                </div> <br>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="namaP">Nama</span>
                  </div>
                  <input type="text" class="form-control" name="namaP" id="nap" readonly>
                </div> <br>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="jeniskel">Jenis Kelamin</span>
                  </div>
                  <input type="text" class="form-control" name="jeniskel" id="kel" readonly>
                </div> <br>
              </div>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="umur">Umur</span>
                  </div>
                  <input type="text" class="form-control" name="umur" id="um" readonly>
                </div>
              </div>
              <div class="col-md-7">
                <div class="input-group my-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alamat">Alamat</span>
                  </div>
                  <input type="text" class="form-control" name="alamat" id="almt" readonly>
                </div>
              </div>
            </div>


            <div class="form-group">
              <h5>Jenis Kunjungan</h5>
              <input type="text" class="form-control" id="jk" name="jenisk" readonly>
            </div>

            <div class="form-group">
              <h5> Keluhan / Anamnesa </h5>
              <textarea class="form-control" rows="3" id="kelu" name="keluhan" readonly></textarea>
            </div>
            <hr class="my-4">

            <!-- Diagnosa -->
            <div class="form-group">
              <h5>Diagnosa</h5>
              <div class="form-row justify-content-center">
                <div class="col-md">
                  <input class="form-control" type="text" id="diag" name="diagnosa" readonly>
                </div>
              </div>
            </div>

            <div class="form-group">
              <h5> Pengobatan </h5>
              <textarea class="form-control" rows="3" id="pgo" name="pengo" readonly></textarea>
            </div>

            <div class="form-group">
              <h5> Konseling </h5>
              <textarea class="form-control" rows="3" name="konsl" id="kon" readonly></textarea>
            </div>

            <!-- Tenaga Medis -->
            <div class="form-group">
              <h5>Tenaga Medis</h5>
              <div class="form-row justify-content-center">
                <div class="col-md ">
                  <input class="form-control" type="text" id="ptgs" name="tenagam" readonly>
                </div>
              </div>
            </div>
          </form>
          <!-- end form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->