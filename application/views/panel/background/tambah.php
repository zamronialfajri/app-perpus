<div class="row justify-content-center">
  <div class="col-lg-4">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Tambah Background</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Background/simpan" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Upload Background <small class="text-danger">*</small></label>
                <input type="file" name="gambar_background" class="form-control" required>
                <small class="text-danger">File yang diupload harus berupa JPG atau PNG dengan maksimal kapasitas 2mb</small>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Status <small class="text-danger">*</small></label>
                <select name="status_background" class="form-control" required>
                  <option value=""> - Pilih Status - </option>
                  <option value="Aktif"> Aktif </option>
                  <option value="Tidak Aktif"> Tidak Aktif </option>
                </select>
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


  <!-- =============== BATAS FORM ================= -->


  
  <div class="col-lg-7">
   
  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Background</h4>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Background</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($background as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td>
                    <a href="<?= base_url()?>assets/img/background/<?= $row->gambar_background;?>" target="_blank">
                      <img src="<?= base_url()?>assets/img/background/<?= $row->gambar_background;?>" width="40">
                    </a>
                  </td>
                  <td><?= $row->status_background;?></td>
                  <td>
                    <a href="<?= base_url()?>panel/Background/edit/<?= $row->id_background;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Background/delete/<?= $row->id_background;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>