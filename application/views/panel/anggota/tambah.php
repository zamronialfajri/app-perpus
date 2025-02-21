<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Tambah Anggota</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Anggota/simpan" enctype="multipart/form-data">

            <div class="form-row">
              <div class="form-group  col-12">
                <label>ID Anggota <small class="text-danger">*</small></label>
                <input type="text" name="id_anggota" value="<?= $id_anggota;?>" class="form-control form-control-sm" readonly>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Anggota <small class="text-danger">*</small></label>
                <input type="text" name="nama_anggota" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Alamat <small class="text-danger">*</small></label>
                <input type="text" name="alamat_anggota" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Email</label>
                <input type="email" name="email_anggota" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Telepon <small class="text-danger">*</small></label>
                <input type="number" name="telepon_anggota" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Tanggal Daftar <small class="text-danger">*</small></label>
                <input type="text" name="tanggal_daftar" value="<?= date('Y-m-d');?>" class="form-control form-control-sm" readonly>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Username <small class="text-danger">*</small></label>
                <input type="text" name="username" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Passaword <small class="text-danger">*</small></label>
                <input type="text" name="password" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Foto <small class="text-danger">*</small></label>
                <input type="file" name="foto_anggota" class="form-control form-control-sm" required>
                <small class="text-danger">Foto harus berupa JPG atau PNG dengan maksimal Kapasitas 2mb</small>
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