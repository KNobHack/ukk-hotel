<?php
helper('card');
?>

<?= $this->extend('templates/dashboard') ?>

<?= $this->section('content') ?>
<button class="btn bg-gradient-success" type="button" data-bs-toggle="modal" data-bs-target="#TambahFasilitasHotelModal">Tambah Fasilitas Kamar</button>

<?php if ($alert = session()->getFlashdata('alert')) : ?>
  <div class="alert alert-<?= $alert['type'] ?> alert-dismissible fade show text-white" role="alert">
    <span class="alert-text"><?= $alert['message'] ?></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif ?>

<div class="row">
  <?php foreach (cardChunk($fasilitas_hotel, 3) as $fasilitas_hotel) : ?>
    <div class="col mx-2">

      <?php foreach ($fasilitas_hotel as $fasilitas_htl) : ?>
        <div class="row my-2">

          <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <a href="/fasilitas-hotel/<?= $fasilitas_htl->id ?>" class="d-block">
                <img src="<?= $fasilitas_htl->foto ?>" class="img-fluid border-radius-lg">
              </a>
            </div>

            <div class="card-body pt-2">
              <a href="/fasilitas-hotel/<?= $fasilitas_htl->id ?>" class="card-title h5 d-block text-darker">
                <?= $fasilitas_htl->nama ?>
              </a>
              <p class="card-description mb-4">
                <?= $fasilitas_htl->deskripsi ?>
              </p>
              <div class="d-grid gap-1">
                <div class="row">
                  <div class="col-lg-6 col-sm-12 mx-0 mb-1">
                    <button type="button" class="btn btn-sm bg-gradient-info my-0 w-100" data-bs-toggle="modal" data-bs-target="#EditFasilitasHotelModal" data-fasilitas-hotel-nama="<?= $fasilitas_htl->nama ?>" data-fasilitas-hotel-id="<?= $fasilitas_htl->id ?>" data-fasilitas-hotel-deskripsi="<?= $fasilitas_htl->deskripsi ?>">Edit</button>
                  </div>
                  <div class="col-lg-6 col-sm-12 mx-0">
                    <button type="button" class="btn btn-sm bg-gradient-info my-0 w-100" data-bs-toggle="modal" data-bs-target="#UbahFotoFasilitasHotelModal" data-fasilitas-hotel-id="<?= $fasilitas_htl->id ?>">Edit Foto</button>
                  </div>
                </div>
                <button type="button" class="btn btn-sm bg-gradient-danger my-0" data-bs-toggle="modal" data-bs-target="#modalKonfirmasiHapus" data-fasilitas-hotel-nama="<?= $fasilitas_htl->nama ?>" data-fasilitas-hotel-id="<?= $fasilitas_htl->id ?>">Hapus</button>
              </div>
            </div>
          </div>

        </div>
      <?php endforeach ?>

    </div>
  <?php endforeach ?>
</div>
<?= $this->endSection() ?>

<?= $this->section('modal') ?>
<?= $this->include('fasilitas-hotel/tambah-modal') ?>
<?= $this->include('fasilitas-hotel/edit-modal') ?>
<?= $this->include('fasilitas-hotel/edit-foto-modal') ?>
<?= $this->include('fasilitas-hotel/hapus-modal') ?>
<?= $this->endSection() ?>