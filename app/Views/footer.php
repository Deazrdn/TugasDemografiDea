<?php $session = \Config\Services::session();?>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Dataku</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Dea Zerlinda Ardini</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('');?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('');?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('');?>/assets/js/main.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
<?php if ($session->getFlashdata('sukses')) { ?>
// Notifikasi
swal ( "Berhasil" ,  "<?= $session->getFlashdata('sukses'); ?>" ,  "success" )
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
// Notifikasi
swal ( "Mohon maaf" ,  "<?= $session->getFlashdata('warning'); ?>" ,  "warning" )
<?php } ?>

</script>
</body>

</html>