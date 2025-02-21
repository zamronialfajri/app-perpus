<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Edit Anggota</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Anggota/update" enctype="multipart/form-data">

            <div class="form-row">
              <div class="form-group  col-12">
                <label>ID Anggota <small class="text-danger">*</small></label>
                <input type="text" name="id_anggota" value="<?= $anggota['id_anggota'];?>" class="form-control form-control-sm" readonly>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Anggota <small class="text-danger">*</small></label>
                <input type="text" name="nama_anggota" value="<?= $anggota['nama_anggota'];?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Alamat <small class="text-danger">*</small></label>
                <input type="text" name="alamat_anggota" value="<?= $anggota['alamat_anggota'];?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Email</label>
                <input type="email" name="email_anggota" value="<?= $anggota['email_anggota'];?>" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Telepon <small class="text-danger">*</small></label>
                <input type="number" name="telepon_anggota" value="<?= $anggota['telepon_anggota'];?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Tanggal Daftar <small class="text-danger">*</small></label>
                <input type="text" name="tanggal_daftar" value="<?= $anggota['tanggal_daftar'];?>" class="form-control form-control-sm" readonly>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Username <small class="text-danger">*</small></label>
                <input type="text" name="username" value="<?= $anggota['username'];?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Passaword <small class="text-danger">*</small></label>
                <input type="text" name="password" value="<?= $anggota['password'];?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Foto <small class="text-danger">*</small></label>
                <input type="file" name="foto_anggota" class="form-control form-control-sm" required>
                <small class="text-danger">Foto harus berupa JPG atau PNG dengan maksimal Kapasitas 2mb</small><br>
                <?php
                  if (!empty($anggota['foto_anggota'])) {?>
                    <img src="<?= base_url()?>assets/img/anggota/<?= $anggota['foto_anggota']?>" width="100">
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
                <a href="<?= base_url()?>panel/Anggota" class="btn btn-dark btn-block">Kembali</a>
              </div>
            </div>

         
        </form>
      </div>
    </div>
  </div>
</div>