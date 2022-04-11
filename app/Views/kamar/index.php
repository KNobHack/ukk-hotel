<?= $this->extend('templates/dashboard/template') ?>

<?= $this->section('content') ?>

<button class="btn btn-success" type="button">Tambah Kamar</button>

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor Kamar</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipe Kamar</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tersedia</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($kamar) < 1) : ?>
          <tr>
            <td colspan="4" class="align-middle text-center text-sm">Data tidak tersedia</td>
          </tr>
        <?php endif ?>
        <?php foreach ($kamar as $kmr) : ?>
          <tr>
            <td>
              <p class="text-xs font-weight-bold mb-0"><?= $kmr->no_kamar ?></p>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0"><?= $kmr->id_tipe_kamar ?></p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-<?= $kmr->statusColor ?>"><?= $kmr->status ?></span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>