<div class="row justify-content-center">
  <div class="col-lg-4">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center">Form Tambah Kategori Buku</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Kategori_buku/simpan" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group  col-12">
                <label>Nama Kategori Buku <small class="text-danger">*</small></label>
                <input type="text" name="nama_kategori" class="form-control" required>
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
        <h4 class="m-0 font-weight-bold text-primary">Data Kategori Buku</h4>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Nama Kategori Buku</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($kategori as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $row->nama_kategori;?></td>
                  <td>
                    <a href="<?= base_url()?>panel/Kategori_buku/edit/<?= $row->id_kategori;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Kategori_buku/delete/<?= $row->id_kategori;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
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