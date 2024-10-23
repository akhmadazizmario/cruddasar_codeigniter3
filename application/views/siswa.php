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
  <div class="row mb-2">
    <div class="col-md-6">
      <a href="<?= base_url('siswa/tambah'); ?>" class="btn btn-danger mb-2">
        <i class="fas fa-plus"></i> Tambah Data Siswa
      </a>
      <?= $this->session->flashdata('pesans2'); ?>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control bg-white" placeholder="Cari Data Siswa... " name="keyword">
          <button class="btn btn-danger" type="submit">Cari</button>
        </div>
    </div>
  </div>
  <br>
  <div class="card shadow mb-4">
    <div class="card-header py-3 bg-dark">
      <h6 class="m-0 font-weight-bold text-white">Data siswa</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered bg-light" id="dataTable" width="100%" cellspacing="0">
          <thead bgcolor="greenyellow">
            <tr>
              <td style="color:black;">No</td>
              <td style="color:black;">Nama lengkap</td>
              <td style="color:black;">alamat</td>
              <td style="color:black;">email</td>
              <td style="color:black;">status</td>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($siswa as $g) : ?>
              <tr>
                <td style="color:black;"><?= $no++; ?></td>
                <td style="color:black;"><?= $g['nama_lengkap']; ?></td>
                <td style="color:black;"><?= $g['alamat']; ?></td>
                <td style="color:black;"><?= $g['email']; ?></td>
                <td>
                  <a href="<?= base_url('siswa/ubahSiswa/') . $g['id_siswa']; ?>" class="btn btn-primary">
                    Ubah
                  </a>
                  <a href="<?= base_url('siswa/lihat/') . $g['id_siswa']; ?>" class="btn btn-success">
                    Lihat
                  </a>
                  <a href="<?= base_url('siswa/hapus/') . $g['id_siswa']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </main>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


