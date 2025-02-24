<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Developed by
              <b>FusionX</b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/js/ruang-admin.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/select2/dist/js/select2.min.js"></script>

<script>
  <?php 
    if($this->session->flashdata('gagal')){?>
      var isi = <?php echo json_encode($this->session->flashdata('gagal'))?>;
      Swal.fire({
        icon: "error",
        title: "Gagal",
        text: isi
      })
  <?php }
  ?>


  <?php 
    if($this->session->flashdata('sukses')){?>
      var isi = <?php echo json_encode($this->session->flashdata('sukses'))?>;
      Swal.fire({
        icon: "success",
        title: "Sukses",
        text: isi
      })
  <?php }
  ?>
</script>


  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

    $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });
  </script>
</body>

</html>