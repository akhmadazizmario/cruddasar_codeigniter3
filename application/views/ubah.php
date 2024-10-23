<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <h1 class="h2"><?= $title; ?></h1>
  <hr>
  <div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark">
      <h6 class="m-0 font-weight-bold text-white">ubah siswa</h6>
    </div>
    <div class="card-body bg-info">
      <div class="table-responsive">
        <table class="table table-bordered bg-white" id="dataTable" width="100%" cellspacing="0">
          <div class="card">
            <div class="card-body ">
              <div class="row">
                <div class="col-md">
                  <?= form_open(''); ?>
                  <!-- <label for="id_siswa">ID siswa</label> -->
                  <input type="hidden" name="id_siswa" class="form-control" value="<?= $siswa['id_siswa']; ?>" readonly>
                  <br>
                  <div class="form-group">
                    <label for="nama_lengkap">nama_lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $siswa['nama_lengkap']; ?>">
                    <small class="muted text-danger"><?= form_error('nama_lengkap'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $siswa['alamat']; ?>">
                    <small class="muted text-danger"><?= form_error('alamat'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $siswa['email']; ?>">
                    <small class="muted text-danger"><?= form_error('email'); ?></small>
                  </div>

                  <div class="form-group">
                    <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary mt-3" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-dark mt-3">Ubah</button>
                  </div>
                  <?= form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>