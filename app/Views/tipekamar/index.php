<?php
helper('text');
?>

<?= $this->extend('templates/dashboard/template') ?>

<?= $this->section('content') ?>
<button class="btn bg-gradient-success" type="button" data-bs-toggle="modal" data-bs-target="#TambahTipeKamarModal">Tambah Tipe Kamar</button>

<div class="row">
  <?php foreach ($tipe_kamar_batch as $tipe_kamar) : ?>
    <div class="col mx-2">

      <?php foreach ($tipe_kamar as $tipe_kmr) : ?>
        <div class="row my-2">

          <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <a href="javascript:;" class="d-block">
                <img src="<?= $tipe_kmr->foto ?>" class="img-fluid border-radius-lg">
              </a>
            </div>

            <div class="card-body pt-2">
              <a href="javascript:;" class="card-title h5 d-block text-darker">
                <?= $tipe_kmr->tipe ?>
              </a>
              <p class="card-description mb-4">
                <?= word_limiter($tipe_kmr->deskripsi, 12) ?>
              </p>
              <a href="javascript:;" class="btn btn-sm bg-gradient-info">Detail</a>
            </div>
          </div>

        </div>
      <?php endforeach ?>

    </div>
  <?php endforeach ?>
</div>
<?= $this->endSection() ?>

<?= $this->section('modal') ?>
<!-- Modal -->
<div class="modal fade tipe-kamar-modal" id="TambahTipeKamarModal" tabindex="-1" role="dialog" aria-labelledby="TambahTipeKamarModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahTipeKamarModalTitle">Tambah TIpe Kamar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nama-tipe-kamar" class="col-form-label">Nama Tipe Kamar</label>
            <input name="tipe" type="text" class="form-control" id="nama-tipe-kamar">
          </div>
          <div class="form-group">
            <label for="foto" class="col-form-label">Foto</label>
            <input name="foto" type="file" class="form-control" id="foto">
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>