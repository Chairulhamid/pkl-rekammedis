<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>All rights reserved &copy; <?= date('Y'); ?> | Tugas PKL CHAIRUL HAMID & MAHFUDH SYAUQI </span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda yakin Ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih Tombol "Keluar".</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap-select.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>



<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }
    });
  });
</script>


<!-- Script Count Hal Beranda -->
<script>
  $('.num').each(function() {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 1000,
      easing: 'swing',
      step: function(now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
</script>

<!-- Script Hal Pendaftaran -->
<script>
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget); // Tombol dimana modal di tampilkan
      let modal = $(this);

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#no_kartu').attr("value", div.data('no_kartu'));
      modal.find('#status').attr("value", div.data('status'));
      modal.find('#nama').attr("value", div.data('nama'));
      modal.find('#tgl_lahir').attr("value", div.data('tgl_lahir'));
      modal.find('#umur').attr("value", div.data('umur'));
      modal.find('#j_kelamin').attr("value", div.data('j_kelamin'));
      modal.find('#nama_kk').attr("value", div.data('nama_kk'));
      modal.find('#no_hp').attr("value", div.data('no_hp'));
      modal.find('#alamat').attr("value", div.data('alamat'));
    });
    $("#hapus-data").click(function() {
      //Say - $('p').get(0).id - this delete item id
      //modal.find('#delete_item_id').attr("value",div.data('#delete_item_id'));
      $("#delete_item_id").val($('p').get());
      $('#hapus-data').modal('show');
    });
  });
</script>

<!-- Script Hal Kunjungan Ulang -->
<script>
  $(document).ready(function() {
    $(document).on('click', '#select', function() {
      var id = $(this).data('id');
      var no_kartu = $(this).data('no_kartu');
      var status = $(this).data('status');
      var nama = $(this).data('nama');
      var tgl_lahir = $(this).data('tgl_lahir');
      var umur = $(this).data('umur');
      var j_kelamin = $(this).data('j_kelamin');
      var nama_kk = $(this).data('nama_kk');
      var alamat = $(this).data('alamat');
      $('#id').val(id);
      $('#no_kartu').val(no_kartu);
      $('#status').val(status);
      $('#nama').val(nama);
      $('#tgl_lahir').val(tgl_lahir);
      $('#umur').val(umur);
      $('#j_kelamin').val(j_kelamin);
      $('#nama_kk').val(nama_kk);
      $('#alamat').val(alamat);
      $('#modal-item').modal('hide');
    });
  });
</script>

<!-- Script Hal Data Beranda -->
<script>
  $(document).ready(function() {
    // Halaman
    $('#lihat').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget);
      let modal = $(this);

      // field
      modal.find('#jdl').text(div.data('nama'));
      modal.find('#nkk').attr("value", div.data('namakk'));
      modal.find('#nok').attr("value", div.data('nokartu'));
      modal.find('#nap').attr("value", div.data('nama'));
      modal.find('#kel').attr("value", div.data('kelamin'));
      modal.find('#um').attr("value", div.data('umur'));
      modal.find('#almt').attr("value", div.data('alamat'));
      modal.find('#jk').attr("value", div.data('jenisk'));
      modal.find('textarea#kelu').val(div.data('keluhan'));
      modal.find('#diag').attr("value", div.data('diagnosa'));
      modal.find('textarea#pgo').val(div.data('pengobatan'));
      modal.find('textarea#kon').val(div.data('konsul'));
      modal.find('#ptgs').attr("value", div.data('petugas'));
    });
    // Hapus
    $('#hapus').on('show.bs.modal', function(event) {
      let div = $(event.relatedTarget);
      let modal = $(this);

      modal.find('.btn-ok').attr('href', div.data('href'));
      modal.find('#nama').text(div.data('nama'));
    });
  });
</script>

<script>
  $(function() {
    const to = 1000;
    $(".alert").delay(to).fadeOut(300);
  });
</script>

</body>

</html>