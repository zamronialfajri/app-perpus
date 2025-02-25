  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Peminjaman Buku</h4>

        <a href="<?= base_url()?>panel/Peminjaman/tambah" class="btn btn-primary">Tambah Peminjaman</a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr style="font-size:14px;">
              <th>No.</th>
              <th>Id Peminjaman</th>
              <th>Peminjam</th>
              <th>Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Tanggal Dikembalikan</th>
              <th>Denda</th>
              <th>Status</th>
              <th>Petugas</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              $totalDenda = 0;
              foreach ($peminjaman as $row){
                $tanggalSekarang = strtotime(date('Y-m-d'));
                $tanggalKembali = strtotime($row->tanggal_kembali);
                $selisihHari = ($tanggalSekarang - $tanggalKembali) / (60*60*24);

                if($tanggalSekarang > $tanggalKembali){
                  $totalDenda = $denda['nominal_denda'] * $selisihHari;
                }
                ?>

                <tr style="font-size:14px;">
                  <td><?= $no++?></td>
                  <td><?= $row->id_peminjaman;?></td>
                  <td><?= $row->nama_anggota;?></td>
                  <td><?= $row->judul_buku;?></td>
                  <td><?= $row->tanggal_pinjam;?></td>
                  <td><?= $row->tanggal_kembali;?></td>
                  <td><?= $row->tanggal_dikembalikan;?></td>
                  <td>
                    <?php
                      if($tanggalSekarang > $tanggalKembali){?>
                        <small class="text-danger">Telat <?= $selisihHari;?> Hari</small>
                        <small class="text-danger font-weight-bold"> <?= number_format($$totalDenda,0,'.','.')?> </small>
                      <?php }else{?>
                        <small class="text-primary">Tidak ada denda</small>
                      <?php }
                    ?>
                  </td>
                  <td><?= $row->status;?></td>
                  <td><?= $row->nama_petugas;?></td>
                  <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-warning">Perpanjang</a>
                    <a href="" class="badge badge-danger">Kembalikan</a>
                  </td>
                </tr>
             <?php }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>