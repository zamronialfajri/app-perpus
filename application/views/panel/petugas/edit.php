<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Edit Petugas</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Petugas/update" enctype="multipart/form-data">
            <div class="form-row" hidden>
              <div class="form-group  col-12">
                <label>Id Petugas <small class="text-danger">*</small></label>
                <input type="text" name="id_petugas" value="<?= $petugas['id_petugas']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Petugas <small class="text-danger">*</small></label>
                <input type="text" name="nama_petugas" value="<?= $petugas['nama_petugas']?>" class="form-control" required>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Username <small class="text-danger">*</small></label>
                <input type="text" name="username" value="<?= $petugas['username']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Passaword <small class="text-danger">*</small></label>
                <input type="text" name="password" value="<?= $petugas['password']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Foto <small class="text-danger">*</small></label>
                <input type="file" name="foto_petugas" class="form-control">
                <small class="text-danger">Foto harus berupa JPG atau PNG dengan maksimal Kapasitas 2mb</small><br><br>
                <?php
                if(!empty($petugas['foto_petugas'])){?>
                    <img src="<?= base_url()?>assets/img/petugas/<?= $petugas['foto_petugas'];?>" width="100">
                <?php }
                ?>
              </div>
            </div>

            <div class="form-row justify-content-center">
              <div class="form-group  col-3">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </div>

              <div class="form-group  col-3">
                <label></label>
                <a href="<?= base_url()?>panel/Petugas" class="btn btn-dark btn-block">Kembali</a>
              </div>
            </div>

         
        </form>
      </div>
    </div>
  </div>
</div>