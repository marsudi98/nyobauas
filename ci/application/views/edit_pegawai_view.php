<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Pegawai</title>
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
	

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      	<?php echo form_open('pegawai/update/'.$this->uri->segment(3)); ?>
      	<legend>Edit Data Pegawai</legend>
      	<?php echo validation_errors(); ?>
      	<div class="form-group">
      		<label for="">Nama</label>
      		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $pegawai[0]->nama ?>" placeholder="Nama Pegawai">
      	</div>
      	<div class="form-group">
      		<label for="">Alamat</label>
      		<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $pegawai[0]->alamat ?>" placeholder="Alamat Pegawai">
      	</div>
        <div class="form-group">
          <label for="">Tanggal Lahir</label>
          <input type="text" name="tanggalLahir" id="tanggalLahir" class="form-control" 
             title="Masukkan tahun lahir dengan format YYYY-MM-DD" value="<?php echo $pegawai[0]->tanggalLahir ?>" />
        </div>
      	<button type="submit" class="btn btn-primary">Update</button>
      	<?php echo form_close(); ?>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>