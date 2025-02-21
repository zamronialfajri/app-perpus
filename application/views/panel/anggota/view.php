  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Anggota</h4>

        <a href="<?= base_url()?>panel/Anggota/tambah" class="btn btn-primary">Tambah Anggota</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>ID Anggota</th>
              <th>Nama Anggota</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Tanggal Daftar</th>
              <th>Username</th>
              <th>Password</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              foreach ($anggota as $row) {?>
                <tr>
                  <td><?= $row->id_anggota;?></td>
                  <td><?= $row->nama_anggota;?></td>
                  <td><?= $row->alamat_anggota;?></td>
                  <td><?= $row->email_anggota;?></td>
                  <td><?= $row->telepon_anggota;?></td>
                  <td><?= $row->tanggal_daftar;?></td>
                  <td><?= $row->username;?></td>
                  <td><?= $row->password;?></td>
                  <td>
                    <img src="<?= base_url()?>assets/img/anggota/<?= $row->foto_anggota;?>" width="50">
                  </td>
                  <td>
                    <a href="<?= base_url()?>panel/Anggota/edit/<?= $row->id_anggota;?>"class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url()?>panel/Anggota/delete/<?= $row->id_anggota;?>"class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>