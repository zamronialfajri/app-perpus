<div class="row justify-content-center">
  <div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Detail Buku</h4>
      </div>
      <div class="card-body">
        
        <table class="table">
            <tr class="text-center">
                <td colspan="2">
                    <img src="<?= base_url()?>assets/img/buku/<?= $buku['gambar_buku']?>" width="200">
                </td>
            </tr>

            <tr>
                <td>Id Buku</td>
                <td>: <?= $buku['id_buku']?></td>
            </tr>

            <tr>
                <td>Judul Buku</td>
                <td>: <?= $buku['judul_buku']?></td>
            </tr>

            <tr>
                <td>Stok Buku</td>
                <td>: <?= $buku['stok_buku']?></td>
            </tr>

            <tr>
                <td>Tahun Terbit</td>
                <td>: <?= $buku['tahun_buku']?></td>
            </tr>

            <tr>
                <td>Nama Pengarang</td>
                <td>: <?= $buku['nama_pengarang']?></td>
            </tr>

            <tr>
                <td>Nama Penerbit</td>
                <td>: <?= $buku['nama_penerbit']?></td>
            </tr>

            <tr>
                <td>Rak</td>
                <td>: <?= $buku['nama_rak']?> <?= $buku['lokasi_rak']?></td>
            </tr>

            <tr>
                <td>Kategori Buku</td>
                <td>: <?= $buku['nama_kategori']?></td>
            </tr>

            <tr class="text-center">
                <td colspan="2">
                    <a href="<?= base_url()?>panel/Buku" class="btn btn-dark">Kembali</a>
                    <a href="<?= base_url()?>panel/Buku/edit/<?= $buku['id_buku'];?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Buku/delete/<?= $buku['id_buku']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>

      </div>
    </div>
  </div>
</div>