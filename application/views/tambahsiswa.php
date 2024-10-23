<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid py-4">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
    <?php endif; ?>
    <?= $this->session->flashdata('pesans1'); ?>
    <div classs="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-dark">
                <h6 class="m-0 font-weight-bold text-white">Tambah Siswa</h6>
            </div>
            <div class="card-body bg-info">
                <div class="table-responsive">
                    <table class="table table-bordered bg-light" id="dataTable" width="100%" cellspacing="0">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md">
                                        <?= form_open('siswa/tambah'); ?>
                                        <div class="form-group">
                                            <label for="nama_lengkap">nama_lengkap</label>
                                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                                            <small class="muted text-danger"><?= form_error('nama_lengkap'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">alamat</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control">
                                            <small class="muted text-danger"><?= form_error('alamat'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">email</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                            <small class="muted text-danger"><?= form_error('email'); ?></small>
                                        </div>

                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('siswa') ?>" class="btn btn-secondary mr-3">Close</a>
                                            <button type="submit" class="btn btn-dark ">Tambah</button>
                                        </div>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>