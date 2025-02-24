<div class="row justify-content-center">
  <div class="col-lg-5">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Edit Rak</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Rak/update" enctype="multipart/form-data">

            <div class="form-row" hidden>
              <div class="form-group  col-12">
                <label>Id Rak <small class="text-danger">*</small></label>
                <input type="text" name="id_rak" value="<?= $rak['id_rak']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Rak <small class="text-danger">*</small></label>
                <input type="text" name="nama_rak" value="<?= $rak['nama_rak']?>" class="form-control" required>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Lokasi Rak <small class="text-danger">*</small></label>
                <input type="text" name="lokasi_rak" value="<?= $rak['lokasi_rak']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row justify-content-center">
              <div class="form-group  col-3">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </div>

              <div class="form-group  col-3">
                <label></label>
                <a href="<?= base_url()?>panel/Rak" class="btn btn-dark btn-block">Batal</a>
              </div>
            </div>
         
        </form>
      </div>
    </div>
  </div>
</div>