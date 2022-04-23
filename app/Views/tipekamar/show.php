<?= $this->extend('templates/dashboard') ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-6 mb-2">
    <div class="card">
      <div class="card-header pb-0">
        <?php if ($alert = session()->getFlashdata('alert')) : ?>
          <div class="alert alert-<?= $alert['type'] ?> alert-dismissible fade show text-white" role="alert">
            <span class="alert-text"><?= $alert['message'] ?></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif ?>
        <div class="d-grid gap-2">
          <img src="<?= $tipe_kamar->foto ?>" alt="<?= $tipe_kamar->tipe ?>" class="img-fluid border-radius-lg">
          <button class="btn bg-gradient-primary btn-sm" data-bs-toggle="modal" data-bs-target="#UbahFotoTipeKamarModal" data-tipe-kamar-id="<?= $tipe_kamar->id ?>">Ubah Foto</button>
        </div>
      </div>
      <div class="card-body">
        <form action="/tipe-kamar/update/<?= $tipe_kamar->id ?>" method="POST" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="nama-tipe-kamar" class="col-form-label">Nama</label>
            <input name="tipe" type="text" value="<?= $tipe_kamar->tipe ?>" class="form-control" id="nama-tipe-kamar" required="required">
          </div>
          <div class="form-group">
            <label for="harga-tipe-kamar" class="col-form-label">Harga</label>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input name="harga" type="number" value="<?= $tipe_kamar->harga ?>" class="form-control" id="harga-tipe-kamar" required="required" min="0">
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi-tipe-kamar" required="required"><?= $tipe_kamar->deskripsi ?></textarea>
          </div>
          <div class="d-grid gap-1">
            <button type="submit" class="btn bg-gradient-primary btn-sm d-none" id="form-edit-tipe-kamar-submit">Simpan Perubahan</button>
            <a href="/tipe-kamar" role="button" class="btn bg-gradient-danger btn-sm">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="card-header pb-0 pt-2 px-2">
        <span>Fasilitas Kamar</span>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Fasilitas</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($tipe_kamar->fasilitas) < 1) : ?>
              <tr>
                <td colspan="2" class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Belum ada fasilitas</p>
                </td>
              </tr>
            <?php endif ?>
            <?php foreach ($tipe_kamar->fasilitas as $fasilitas) : ?>
              <tr>
                <td>
                  <p class="text-xs font-weight-bold mb-0"><?= $fasilitas->nama ?></p>
                </td>
                <td class="align-middle">
                  <form action="/fasilitas-kamar/delete/<?= $fasilitas->id ?>" method="POST" class="d-hidden" id="hapus-fasilitas-kamar-<?= $fasilitas->id ?>"></form>
                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" onclick="document.getElementById('hapus-fasilitas-kamar-<?= $fasilitas->id ?>').submit()">
                    Hapus
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="/tipe-kamar/add/fasilitas/<?= $tipe_kamar->id ?>" method="POST" class="needs-validation" novalidate>
          <div class="form-group">
            <input name="nama" type="text" class="form-control form-control-sm" required="required" placeholder="Nama fasilitas">
          </div>
          <div class="d-grid gap-1">
            <button type="submit" class="btn bg-gradient-primary btn-sm">Tambah Fasilitas</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('modal') ?>
<?= $this->include('tipekamar/edit-foto-modal') ?>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
  var nama_tipe_kamar = document.getElementById('nama-tipe-kamar')
  var harga_tipe_kamar = document.getElementById('harga-tipe-kamar')
  var deskripsi_tipe_kamar = document.getElementById('deskripsi-tipe-kamar')
  var tombol_simpan = document.getElementById('form-edit-tipe-kamar-submit')

  function tampilTombolSimpan() {
    tombol_simpan.classList.remove('d-none')
  }

  nama_tipe_kamar.addEventListener('focus', tampilTombolSimpan);
  harga_tipe_kamar.addEventListener('focus', tampilTombolSimpan);
  deskripsi_tipe_kamar.addEventListener('focus', tampilTombolSimpan);
</script>
<?= $this->endSection() ?>