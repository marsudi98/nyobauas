<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <style type="text/css">
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="home">LOGO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
      </nav>

      <br>


     <!-- Table  -->
    <div class="container">
      <main role="main" class="container">
      <a href="<?php echo base_url('index.php/pegawai/create') ?>" class="btn btn-primary my-3">Tambah</a>
      <table class="table table-hover">
        <thead>
          <th>No.</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Foto</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php $no=1; foreach ($pegawai_list as $key => $value): ?>
            <tr>
              <td class="align-middle"><?php echo $no++ ?></td>
              <td class="align-middle"><?php echo $value['nama'] ?></td>
              <td class="align-middle"><?php echo date("d-m-Y", strtotime($value['tanggalLahir'])); ?></td>
              <td class="align-middle"><?php echo $value['alamat'] ?></td>
              <td class="align-middle"><img src="<?php echo base_url(); ?>/assets/uploads/<?php echo $value['foto'] ?>" width="100px" height="100px"></td>
              <td class="align-middle">
                <a href="<?php echo base_url("index.php/pegawai/update/".$value['id']) ?>" class="btn btn-sm btn-link">Edit</a>
                <a href="<?php echo base_url("index.php/pegawai/deleteData/".$value['id']) ?>" class="btn btn-sm btn-link">Hapus</a>
                <a class="btn btn-outline-primary my-2 my-sm-0" href="<?php echo base_url("index.php/pendidikan/id/".$value['id']) ?>">Details</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    </div>
 
    
    <hr> 

    <footer class="footer">
        <div class="container">
          <p class="text-center foot-custom">&copy; Marsudi 2018</p>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>