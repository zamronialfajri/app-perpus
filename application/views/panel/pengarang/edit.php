<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Edit Pengarang</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Pengarang/update" enctype="multipart/form-data">
          
            <div class="form-row" hidden>
              <div class="form-group col-12">
                <label>Id Pengarang <small class="text-danger">*</small></label>
                <input type="text" name="id_pengarang" value="<?= $pengarang['id_pengarang'];?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-12">
                <label>Nama Pengarang <small class="text-danger">*</small></label>
                <input type="text" name="nama_pengarang" value="<?= $pengarang['nama_pengarang'];?>" class="form-control" required>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group col-12">
                <label>Alamat <small class="text-danger">*</small></label>
                <input type="text" name="alamat_pengarang" value="<?= $pengarang['alamat_pengarang'];?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-12">
                <label>Email <small class="text-danger">*</small></label>
                <input type="email" name="email_pengarang" value="<?= $pengarang['email_pengarang'];?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-12">
                <label>Telepon <small class="text-danger">*</small></label>
                <input type="number" name="telepon_pengarang" value="<?= $pengarang['telepon_pengarang'];?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row justify-content-center">
              <div class="form-group col-3">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </div>

              <div class="form-group col-3">
              <label></label>
              <a href="<?= base_url()?>panel/Pengarang" class="btn btn-dark btn-block">Batal</a>
              </div>
            </div>

         
        </form>
      </div>
    </div>
  </div>
</div>