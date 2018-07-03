<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Pendidikan</title>
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
        <?php echo form_open('pendidikan/update/'.$idPegawai."/".$idPendidikan); ?>
        <legend>Edit Data Pegawai</legend>
        <?php echo validation_errors(); ?>
        <div class="form-group">
          <input type="hidden" name="idPendidikan" value="<?php echo $pendidikan[0]->id ?>">
          <input type="hidden" name="fk_pegawai" value="<?php echo $pendidikan[0]->fk_pegawai ?>">
          <label for="">Nama Sekolah</label>
          <input type="text" class="form-control" name="namaSekolah" id="namaSekolah" value="<?php echo $pendidikan[0]->namaSekolah ?>" placeholder="Input field">
        </div>
          <div class="form-group">
          <label for="">Tahun Lulus</label>
          <input type="number" min="1900" max="2099" step="1" value="2018" class="form-control" name="tahunLulus" id="tahunLulus" value="<?php echo $pendidikan[0]->tahunLulus ?>" placeholder="Input field">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>