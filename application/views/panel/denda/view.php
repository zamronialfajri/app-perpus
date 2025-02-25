<div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Data Denda</h4>
        <?php
          if(empty($denda)){?>
            <a href="<?= base_url()?>panel/Denda/tambah" class="btn btn-primary">Tambah Denda</a>
          <?php }
        ?>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="bg-primary text-white">
            <tr>
              <th>No.</th>
              <th>Nominal Denda</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $no = 1;
              foreach ($denda as $row) {?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= number_format($row->nominal_denda,0,'.','.');?></td>
                  <td>
                    <a href="<?= base_url()?>panel/Denda/edit/<?= $row->id_denda;?>"class="btn btn-sm btn-success">Edit</a>
                  </td>
                </tr>
              <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>