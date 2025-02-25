<?php
  $tujuhHariMendatang = strtotime("+7 days");
  $tanggalKembali = date("Y-m-d", $tujuhHariMendatang);
?>


<div class="row justify-content-center">
  <div class="col-lg-8">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-center mt-4">Form Tambah Peminjaman</h4>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url()?>panel/Peminjaman/simpan" enctype="multipart/form-data">

            <div class="form-row">
              <div class="form-group  col-12">
                <label>ID Peminjaman <small class="text-danger">*</small></label>
                <input type="text" name="id_peminjaman" value="<?= $id_peminjaman;?>" class="form-control" readonly>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-6">
                <label>Pilih Peminjam <small class="text-danger">*</small></label>
                <select name="id_anggota" class="form-control select2-single" required>
                  <option value=""> - Id / Nama Peminjam - </option>
                  <?php
                    foreach ($peminjam as $row) {?>
                      <option value="<?= $row->id_anggota;?>"> <?= $row->id_anggota;?> / <?= $row->nama_anggota?></option>
                   <?php }
                  ?>
                </select>
              </div>

              <div class="form-group  col-6">
                <label>Pilih Buku <small class="text-danger">*</small></label>
                <select name="id_buku" id="buku" class="form-control select2-single" required>
                  <option value=""> - Id / Judul Buku - </option>
                  <?php
                    foreach ($buku as $row) {?>
                      <option value="<?= $row->id_buku;?>"> <?= $row->id_buku;?> / <?= $row->judul_buku?></option>
                   <?php }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group  col-6">
                <label>Tanggal Pinjam <small class="text-danger">*</small></label>
                <input type="text" name="tanggal_pinjam" value="<?= date('Y-m-d');?>" class="form-control" readonly>
              </div>

              <div class="form-group  col-6">
                <label>Tanggal Kembali <small class="text-danger">*</small></label>
                <input type="text" name="tanggal_kembali" value="<?= $tanggalKembali;?>" class="form-control" readonly>
              </div>
            </div>

            <div class="form-row" hidden>
              <div class="form-group  col-6">
                <label>Petugas <small class="text-danger">*</small></label>
                <input type="text" name="id_petugas" value="<?= $this->session->userdata('id_petugas');?>" class="form-control" readonly>
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
</div>


<script>
  $(document).ready(function(){
    $('#buku').change(function(){
      var id_buku = $(this).val();

      $.ajax({
        url : '<?= base_url()?>panel/Peminjaman/cekStokBuku',
        method : 'post',
        dataType : 'JSON',
        data : {id_buku:id_buku},
        success: function(hasil){
          if(hasil.stok_buku === 0){
            alert('Maaf Stok buku kosong, Silahkan pinjam buku yang lain');
            location.reload();
          }
        }
      });
    });
  });
</script>