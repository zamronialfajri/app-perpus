<?php
  $this->db->where('status_logo', 'Aktif');
  $logo = $this->db->get('logo')->row_array();

  $this->db->where('status_background', 'Aktif');
  $background = $this->db->get('background')->row_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>assets/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/css/mystyle.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <img src="<?= base_url()?>assets/img/background/<?= $background['gambar_background'];?>" alt="" class="bg">
  <!-- Login Content -->
  <div class="container-login transparant mt-5">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-md-4">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="<?= base_url()?>assets/img/logo/<?= $logo['gambar_logo'];?>" alt="" width="100" class="mb-3">
                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Login</h1>

                  </div>

                  <form class="user" method="post" action="<?= base_url()?>Login/prosesLogin">

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-sort"></i></span>
                        </div>
                        <select name="level" class="form-control">
                          <option value=""> - Pilih Level - </option>
                          <option value="Petugas"> Petugas </option>
                          <option value="Anggota"> Anggota </option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                   
                  </form>
                  
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/js/ruang-admin.min.js"></script>
  <script src="<?= base_url()?>assets/js/sweetalert2.all.min.js"></script>

  <script>
    <?php 
      if($this->session->flashdata('gagal')){?>
        var isi = <?php echo json_encode($this->session->flashdata('gagal'))?>;
        Swal.fire({
          icon: "error",
          title: "Gagal",
          text: isi
        })
    <?php }
    ?>
  </script>

</body>

</html>