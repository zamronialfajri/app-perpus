  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Petugas</h4>

        <a href="<?= base_url()?>panel/Petugas/tambah" class="btn btn-primary">Tambah Petugas</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Nama Petugas</th>
              <th>Username</th>
              <th>Password</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($petugas as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $row->nama_petugas;?></td>
                  <td><?= $row->username;?></td>
                  <td><?= $row->password;?></td>
                  <td>
                    <img src="<?= base_url()?>assets/img/petugas/<?= $row->foto_petugas;?>" width="50">
                  </td>
                  <td>
                    <a href="<?= base_url()?>panel/Petugas/edit/<?= $row->id_petugas;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Petugas/delete/<?= $row->id_petugas;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>