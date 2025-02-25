<div class="row justify-content-center">
  <div class="col-lg-5">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Edit Background</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Background/update" enctype="multipart/form-data">

            <div class="form-row" hidden>
              <div class="form-group  col-12">
                <label>Id Background <small class="text-danger">*</small></label>
                <input type="text" name="id_background" value="<?= $background['id_background']?>" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Background <small class="text-danger">*</small></label>
                <input type="file" name="gambar_background" class="form-control">
                <small class="text-danger">File yang diupload harus berupa JPG atau PNG dengan maksimal kapasitas 2mb</small><br>
                <?php
                  if(!empty($background['gambar_background'])){?>
                    <img src="<?= base_url()?>assets/img/background/<?= $background['gambar_background']?>" width="100">
                  <?php }
                ?>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Status <small class="text-danger">*</small></label>
                <select name="status_background" class="form-control" required>
                  <?php
                    if($background['status_background'] == "Aktif"){?>
                      <option value="Aktif" selected> Aktif </option>
                      <option value="Tidak Aktif"> Tidak Aktif </option>
                   <?php }else{?>
                      <option value="Aktif"> Aktif </option>
                      <option value="Tidak Aktif" selected> Tidak Aktif </option>
                   <?php }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-row justify-content-center">
              <div class="form-group  col-3">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </div>

              <div class="form-group  col-3">
                <label></label>
                <a href="<?= base_url()?>panel/Background" class="btn btn-dark btn-block">Batal</a>
              </div>
            </div>
         
        </form>
      </div>
    </div>
  </div>
</div>