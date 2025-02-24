<div class="row justify-content-center">
  <div class="col-lg-4">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Tambah Rak</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Rak/simpan" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Rak <small class="text-danger">*</small></label>
                <input type="text" name="nama_rak" class="form-control" required>
              </div>
            </div>
          
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Lokasi Rak <small class="text-danger">*</small></label>
                <input type="text" name="lokasi_rak" class="form-control" required>
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
        <h4 class="m-0 font-weight-bold text-primary">Data Rak</h4>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Nama Rak</th>
              <th>Lokasi Rak</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($rak as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $row->nama_rak;?></td>
                  <td><?= $row->lokasi_rak;?></td>
                  <td>
                    <a href="<?= base_url()?>panel/Rak/edit/<?= $row->id_rak;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Rak/delete/<?= $row->id_rak;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
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