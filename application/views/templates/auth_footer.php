  <!-- Bootstrap core JavaScript-->
  <script src=" <?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src=" <?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src=" <?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/main.js"></script>

  <script>
    $(function() {
      const to = 1000;
      $(".alert").delay(to).fadeOut(300);
    });
  </script>

  </body>

  </html>