  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Buku</h4>

        <a href="<?= base_url()?>panel/Buku/tambah" class="btn btn-primary">Tambah Buku</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>ID Buku</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Tahun Terbit</th>
              <th>Stok</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              foreach ($buku as $row) {?>
                <tr>
                  <td><?= $row->id_buku;?></td>
                  <td><?= $row->judul_buku;?></td>
                  <td><?= $row->nama_kategori;?></td>
                  <td><?= $row->tahun_buku;?></td>
                  <td><?= $row->stok_buku;?></td>
                  <td>
                    <img src="<?= base_url()?>assets/img/buku/<?= $row->gambar_buku;?>" width="50">
                  </td>
                  <td>
                    <a href="<?= base_url()?>panel/Buku/detail/<?= $row->id_buku;?>"class="btn btn-sm btn-dark">Detail</a>
                    <a href="<?= base_url()?>panel/Buku/edit/<?= $row->id_buku;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Buku/delete/<?= $row->id_buku;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>