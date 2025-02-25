<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Tambah Denda</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Denda/simpan" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nominal Denda <small class="text-danger">*</small></label>
                <input type="number" name="nominal_denda" class="form-control" required>
              </div>
            </div>

            <div class="form-row justify-content-center">
              <div class="form-group  col-6">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
              </div>
            </div>
         
        </form>
      </div>
    </div>
  </div>
</div>