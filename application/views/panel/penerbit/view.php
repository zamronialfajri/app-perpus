  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Penerbit</h4>

        <a href="<?= base_url()?>panel/Penerbit/tambah" class="btn btn-primary">Tambah Penerbit</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Nama Penerbit</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($penerbit as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $row->nama_penerbit;?></td>
                  <td><?= $row->alamat_penerbit;?></td>
                  <td><?= $row->email_penerbit;?></td>
                  <td><?= $row->telepon_penerbit;?></td>
                  <td>
                    <a href="<?= base_url()?>panel/Penerbit/edit/<?= $row->id_penerbit;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Penerbit/delete/<?= $row->id_penerbit;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>