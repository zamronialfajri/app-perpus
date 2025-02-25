<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Edit Buku</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Buku/update" enctype="multipart/form-data">

            <div class="form-row">
              <div class="form-group  col-12">
                <label>ID Buku <small class="text-danger">*</small></label>
                <input type="text" name="id_buku" value="<?= $buku['id_buku'];?>" class="form-control form-control-sm" readonly>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Judul Buku <small class="text-danger">*</small></label>
                <input type="text" name="judul_buku" value="<?= $buku['judul_buku']?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-6">
                <label>Tahun Terbit <small class="text-danger">*</small></label>
                <input type="number" name="tahun_buku" value="<?= $buku['tahun_buku']?>" class="form-control form-control-sm" required>
              </div>

              <div class="form-group  col-6">
                <label>Stok Buku <small class="text-danger">*</small></label>
                <input type="number" name="stok_buku" value="<?= $buku['stok_buku']?>" class="form-control form-control-sm" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-6">
                <label>Pengarang <small class="text-danger">*</small></label>
                <select name="id_pengarang" class="form-control form-control-sm select2-single" required>
                  <option value=""> - Pilih Pengarang - </option>
                  <?php
                    foreach ($pengarang as $row) {
                      if($row->id_pengarang == $buku['id_pengarang']){?>
                        <option value="<?= $row->id_pengarang?>" selected> <?= $row->nama_pengarang;?> </option>
                      <?php }else{?>
                        <option value="<?= $row->id_pengarang?>" selected> <?= $row->nama_pengarang;?> </option>
                      <?php }
                    }
                  ?>
                </select>
              </div>

              <div class="form-group  col-6">
                <label>Penerbit <small class="text-danger">*</small></label>
                <select name="id_penerbit" class="form-control form-control-sm select2-single" required>
                  <option value=""> - Pilih Penerbit - </option>
                  <?php
                    foreach ($penerbit as $row) {
                      if($row->id_penerbit == $buku['id_penerbit']){?>
                        <option value="<?= $row->id_penerbit?>" selected> <?= $row->nama_penerbit;?> </option>
                      <?php }else{?>
                        <option value="<?= $row->id_penerbit?>" selected> <?= $row->nama_penerbit;?> </option>
                      <?php }
                    }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-6">
                <label>Rak <small class="text-danger">*</small></label>
                <select name="id_rak" class="form-control form-control-sm select2-single" required>
                  <option value=""> - Pilih Rak - </option>
                  <?php
                    foreach ($rak as $row) {
                      if($row->id_rak == $buku['id_rak']){?>
                        <option value="<?= $row->id_rak?>" selected> <?= $row->nama_rak;?> </option>
                      <?php }else{?>
                        <option value="<?= $row->id_rak?>" selected> <?= $row->nama_rak;?> </option>
                      <?php }
                    }
                  ?>
                </select>
              </div>

              <div class="form-group  col-6">
                <label>Kategori Buku <small class="text-danger">*</small></label>
                <select name="id_kategori" class="form-control form-control-sm select2-single" required>
                  <option value=""> - Pilih Kategori Buku - </option>
                  <?php
                    foreach ($kategori as $row) {
                      if($row->id_kategori == $buku['id_kategori']){?>
                        <option value="<?= $row->id_kategori?>" selected> <?= $row->nama_kategori;?> </option>
                      <?php }else{?>
                        <option value="<?= $row->id_kategori?>" selected> <?= $row->nama_kategori;?> </option>
                      <?php }
                    }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Gambar Buku <small class="text-danger">*</small></label>
                <input type="file" name="gambar_buku" class="form-control form-control-sm">
                <small class="text-danger"> Format file harus berupa JPG atau PNG dengan maksimal kapasitas 2mb </small><br>
                <?php
                if(!empty($buku['gambar_buku'])){?>
                    <img src="<?= base_url()?>assets/img/buku/<?= $buku['gambar_buku']?>" width="100">
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
                <a href="<?= base_url()?>panel/Buku" class="btn btn-dark btn-block">Batal</a>
              </div>
            </div>

         
        </form>
      </div>
    </div>
  </div>
</div>