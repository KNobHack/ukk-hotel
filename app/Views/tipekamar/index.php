<?php
helper('text');
?>

<?= $this->extend('templates/dashboard/template') ?>

<?= $this->section('content') ?>
<button class="btn btn-success" type="button">Tambah Tipe Kamar</button>

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