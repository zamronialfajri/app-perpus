<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Tambah Penerbit</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Penerbit/simpan" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Penerbit <small class="text-danger">*</small></label>
                <input type="text" name="nama_penerbit" class="form-control" required>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Alamat <small class="text-danger">*</small></label>
                <input type="text" name="alamat_penerbit" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Email <small class="text-danger">*</small></label>
                <input type="email" name="email_penerbit" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Telepon <small class="text-danger">*</small></label>
                <input type="number" name="telepon_penerbit" class="form-control" required>
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