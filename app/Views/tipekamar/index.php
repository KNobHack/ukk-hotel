<?php
helper('text');
?>

<?= $this->extend('templates/dashboard/template') ?>

<?= $this->section('content') ?>
<button class="btn bg-gradient-success" type="button" data-bs-toggle="modal" data-bs-target="#TambahTipeKamarModal">Tambah Tipe Kamar</button>

<?php if ($alert = session()->getFlashdata('alert')) : ?>
  <div class="alert alert-<?= $alert['type'] ?> alert-dismissible fade show text-white" role="alert">
    <span class="alert-text"><?= $alert['message'] ?></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif ?>

<div class="row">
  <?php foreach ($tipe_kamar_batch as $tipe_kamar) : ?>
    <div class="col mx-2">

      <?php foreach ($tipe_kamar as $tipe_kmr) : ?>
        <div class="row my-2">

          <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <a href="/tipe-kamar/<?= $tipe_kmr->id ?>" class="d-block">
                <img src="<?= $tipe_kmr->foto ?>" class="img-fluid border-radius-lg">
              </a>
            </div>

            <div class="card-body pt-2">
              <a href="/tipe-kamar/<?= $tipe_kmr->id ?>" class="card-title h5 d-block text-darker">
                <?= $tipe_kmr->tipe ?>
              </a>
              <p class="card-description mb-4">
                <?= word_limiter($tipe_kmr->deskripsi, 12) ?>
              </p>
              <a href="/tipe-kamar/<?= $tipe_kmr->id ?>" class="btn btn-sm bg-gradient-info">Detail</a>
              <button type="button" class="btn btn-sm bg-gradient-danger <?= ($tipe_kmr->undeletable) ? 'disabled' : '' ?>" data-bs-toggle="modal" data-bs-target="#modalKonfirmasiHapus" data-tipe-kamar="<?= $tipe_kmr->tipe ?>" data-tipe-kamar-id="<?= $tipe_kmr->id ?>">Hapus</button>
            </div>
          </div>

        </div>
      <?php endforeach ?>

    </div>
  <?php endforeach ?>
</div>
<?= $this->endSection() ?>

<?= $this->section('modal') ?>
<?= $this->include('tipekamar/tambah-modal') ?>
<?= $this->include('tipekamar/hapus-modal') ?>
<?= $this->endSection() ?>